<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\BlogsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Blog;

class backendController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return redirect()->route('dashboard')
                ->with('success', 'Welcome Back!');
        }
        return view('back.login');
    }
    
    public function logout(){
        if (Auth::check()) {
          Auth::logout();
          return redirect()->route('login')
          ->with('success', 'Logout Successfully');
        }
    }
    
  
    
    public function checklogin(Request $req)
    {
        $checkexistuser =  User::where('email', $req->uemail)->first();
        if($checkexistuser){
        Auth::attempt([
            'email' => $req->uemail,
            'password' => $req->upassword,
        ]); 
        return redirect()->route('dashboard')
                    ->with('success', 'Login Successfully.');
        }        

        if (Auth::check()) {
            return redirect()->route('dashboard')
                ->with('success', 'Already Logged In');
        }

        
    
        $userdata = $req->validate([
            'uname' => 'required',
            'uemail' => 'required|email',
            'upassword' => 'required|min:6|max:12|confirmed',
        ], [], [
            'uname' => 'Username',
            'uemail' => 'Email',
            'upassword' => 'Password',
        ]);
    
        User::create([
            'name' => $req->uname,
            'email' => $req->uemail,
            'password' => $req->upassword,
        ]);
        if (Auth::attempt([
            'email' => $req->uemail,
            'password' => $req->upassword,
        ])) 
        {
            return redirect()->route('dashboard')
                    ->with('success', 'Account Createad Successfully.');
        }
     
    }

    public function addBlogCategory(Request $request)
{
    $request->validate(
        [
            'bcname'     => 'required|string|max:255',
            'bcslug'     => 'nullable|string|max:255',
            'bccategory' => 'nullable|integer',
            'bcfile'     => 'nullable|image|mimes:webp,jpg,jpeg,png|max:2048',
            'status'     => 'required|in:0,1',
        ],
        [
            'bcname.required' => 'Please enter the category name.',
            'status.required' => 'Please select a status.',
            'status.in'       => 'Please select a valid status.',
            'bcfile.image'    => 'Please upload a valid image.',
            'bcfile.mimes'    => 'Only webp, jpg, jpeg or png images are allowed.',
            'bcfile.max'      => 'Image size must not be more than 2 MB.',
        ],
        [
            'bcname'     => 'category name',
            'bcslug'     => 'category slug',
            'bccategory' => 'sub category',
            'bcfile'     => 'feature image',
            'status'     => 'status',
        ]
    );

    $slug = Str::slug($request->bcslug ?: $request->bcname);

    if (BlogsCategory::where('bcslug', $slug)->exists()) {
        return response()->json('Slug already exists, please use a different one.');
    }

    $fileName = null;
    if ($request->hasFile('bcfile')) {
        $file = $request->file('bcfile');
        $fileName = time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('blogs-category'), $fileName);
    }

    BlogsCategory::create([
        'bcname'     => $request->bcname,
        'bcslug'     => $slug,
        'bccategory' => $request->bccategory ?: null, // parent category id
        'bcfile'     => $fileName,
        'status'     => $request->status,
    ],
    );

    return response()->json(true);
}

public function updateBlogCategory(Request $request)
{
    $request->validate(
    [
        'id'         => 'required|exists:blogs_categories,id',
        'bcname'     => 'required|string|max:255',
        'bcslug'     => 'nullable|string|max:255',
        'bccategory' => 'nullable|integer',
        'bcfile'     => 'nullable|image|mimes:webp,jpg,jpeg,png|max:2048',
        'status'     => 'required|in:0,1',
    ],
    [
        'bcname.required' => 'Please enter the category name.',
        'status.required' => 'Please select a status.',
        'status.in'       => 'Please select a valid status.',
        'bcfile.image'    => 'Please upload a valid image.',
        'bcfile.mimes'    => 'Only webp, jpg, jpeg or png images are allowed.',
        'bcfile.max'      => 'Image size must not be more than 2 MB.',
    ],
    [
        'bcname'     => 'category name',
        'bcslug'     => 'category slug',
        'bccategory' => 'sub category',
        'bcfile'     => 'feature image',
        'status'     => 'status',
    ]
);

$category = BlogsCategory::findOrFail($request->id);

// Category apna hi parent nahi ban sakti
if ($request->bccategory && (int) $request->bccategory === (int) $category->id) {
    return response()->json('A category cannot be its own sub category.');
}

$slug = Str::slug($request->bcslug ?: $request->bcname);

// Duplicate slug check (apni khud ki id ko chhodkar)
if (BlogsCategory::where('bcslug', $slug)->where('id', '!=', $category->id)->exists()) {
    return response()->json('Slug already exists, please use a different one.');
}

// Nayi image aayi to purani delete karke nayi save karo
$fileName = $category->bcfile;
if ($request->hasFile('bcfile')) {
    if ($category->bcfile && file_exists(public_path('blogs-category/' . $category->bcfile))) {
        @unlink(public_path('blogs-category/' . $category->bcfile));
    }
    $file = $request->file('bcfile');
    $fileName = time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('blogs-category'), $fileName);
}

$category->update([
    'bcname'     => $request->bcname,
    'bcslug'     => $slug,
    'bccategory' => $request->bccategory ?: null,
    'bcfile'     => $fileName,
    'status'     => $request->status,
]);

return response()->json(true);
}

public function deleteBlogCategory(Request $request)
{
    $request->validate([
        'id' => 'required|exists:blogs_categories,id',
    ]);

    $category = BlogsCategory::findOrFail($request->id);

    // Sub-categories hain to delete mat karo
    if (BlogsCategory::where('bccategory', $category->id)->exists()) {
        return response()->json('This category has sub categories. Please delete or move them first.');
    }

    // Image delete
    if ($category->bcfile && file_exists(public_path('blogs-category/' . $category->bcfile))) {
        @unlink(public_path('blogs-category/' . $category->bcfile));
    }

    $category->delete();

    return response()->json(true);
}


public function addBlog(Request $request)
{
    $request->validate([
        'title'       => 'required|string|max:255',
        'slug'        => 'nullable|string|max:255',
        'category'    => 'required|exists:blogs_categories,id',
        'author'      => 'nullable|string|max:255',
        'meta_title'   => 'nullable|string|max:255',
        'meta_desc'    => 'nullable|string|max:500',
        'meta_keys'    => 'nullable|string|max:500',
        'status'      => 'required|in:0,1',
        'description' => 'nullable|string',
        'shortdesc' => 'nullable|string',
        'file'        => 'nullable|image|mimes:webp,jpg,jpeg,png|max:2048',
    ], [
        'title.required'    => 'Please enter the blog title.',
        'category.required' => 'Please select a category.',
        'status.required'   => 'Please select a status.',
        'file.image'        => 'Please upload a valid image.',
        'file.mimes'        => 'Only webp, jpg, jpeg or png images are allowed.',
        'file.max'          => 'Image size must not be more than 2 MB.',
    ]);

    $slug = Str::slug($request->slug ?: $request->title);

    if (Blog::where('slug', $slug)->exists()) {
        return response()->json('Slug already exists, please use a different one.');
    }

    $fileName = null;
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $fileName = time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('blogs'), $fileName);
    }

    Blog::create([
        'title'       => $request->title,
        'slug'        => $slug,
        'category'    => $request->category,
        'shortdesc'  => $request->shortdesc,
        'author'      => $request->author,
        'meta_title'   => $request->meta_title,
        'meta_desc'    => $request->meta_desc,
        'meta_keys'    => $request->meta_keys,
        'status'      => $request->status,
        'description' => $request->description,
        'created_at' => $request->created_at,
        'file'        => $fileName,
    ]);

    return response()->json(true);
}

public function updateBlog(Request $request)
{
    $request->validate([
        'id'          => 'required|exists:blogs,id',
        'title'       => 'required|string|max:255',
        'slug'        => 'nullable|string|max:255',
        'category'    => 'required|exists:blogs_categories,id',
        'author'      => 'nullable|string|max:255',
        'meta_title'   => 'nullable|string|max:255',
        'meta_desc'    => 'nullable|string|max:500',
        'meta_keys'    => 'nullable|string|max:500',
        'status'      => 'required|in:0,1',
        'description' => 'nullable|string',
        'shortdesc' => 'nullable|string',
        'file'        => 'nullable|image|mimes:webp,jpg,jpeg,png|max:2048',
    ], [
        'title.required'    => 'Please enter the blog title.',
        'category.required' => 'Please select a category.',
        'status.required'   => 'Please select a status.',
        'file.image'        => 'Please upload a valid image.',
        'file.mimes'        => 'Only webp, jpg, jpeg or png images are allowed.',
        'file.max'          => 'Image size must not be more than 2 MB.',
    ]);

    $blog = Blog::findOrFail($request->id);

    $slug = Str::slug($request->slug ?: $request->title);

    if (Blog::where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
        return response()->json('Slug already exists, please use a different one.');
    }

    $fileName = $blog->file;
    if ($request->hasFile('file')) {
        if ($blog->file && file_exists(public_path('blogs/' . $blog->file))) {
            @unlink(public_path('blogs/' . $blog->file));
        }
        $file = $request->file('file');
        $fileName = time() . '_' . Str::random(6) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('blogs'), $fileName);
    }

    $blog->update([
        'title'       => $request->title,
        'slug'        => $slug,
        'category'    => $request->category,
        'shortdesc'  => $request->shortdesc,
        'author'      => $request->author,
        'meta_title'   => $request->meta_title,
        'meta_desc'    => $request->meta_desc,
        'meta_keys'    => $request->meta_keys,
        'status'      => $request->status,
        'description' => $request->description,
        'created_at' => $request->created_at,
        'file'        => $fileName,
    ]);

    return response()->json(true);
}

public function deleteBlog(Request $request)
{
    $request->validate([
        'id' => 'required|exists:blogs,id',
    ]);

    $blog = Blog::findOrFail($request->id);

    if ($blog->file && file_exists(public_path('blogs/' . $blog->file))) {
        @unlink(public_path('blogs/' . $blog->file));
    }

    $blog->delete();

    return response()->json(true);
}

}