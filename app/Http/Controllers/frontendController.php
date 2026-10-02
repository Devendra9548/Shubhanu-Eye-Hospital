<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminInfo;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogSeo;
use App\Models\GlobalSeo;
use App\Models\category_blog_seo;
use App\Models\PageSeo;
use App\Models\Contact;
use App\Models\EnquireLead;
use App\Models\HomePage;
use App\Models\Career;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\ContactMail;
use App\Mail\EnquireLeadMail;
use App\Models\ClientReview;
use Intervention\Image\Facades\Image;
use App\Mail\CareerMail;

class frontendController extends Controller
{
    function home(){
        $homepage = HomePage::all();
        $pageseo = PageSeo::where('pagename', 'Home')->get();
        $homepageseo = PageSeo::where('pagename', 'Home')->get();
        $gseo = GlobalSeo::find(1);
        $blogs = DB::table('blogs as b')
        ->select('b.id', 'b.title', 'bc.bcname', 'b.description', 'b.file', 'b.slug', 'bc.bcslug')
        ->join('blogs_categories as bc', 'b.category', '=', 'bc.id')
        ->orderBy('b.id', 'desc')
        ->get();
        return view('front.home', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo,'blogs'=>$blogs, 'homepage'=>$homepage]);
    }

    function about(){
        $pageseo = PageSeo::where('pagename', 'about')->get();
        $homepageseo = PageSeo::where('pagename', 'about')->get();
        $gseo = GlobalSeo::find(1);
        return view('front.about', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function blogs(){
        $pageseo = PageSeo::where('pagename', 'blog')->get();
        $homepageseo = PageSeo::where('pagename', 'blog')->first();
        $gseo = GlobalSeo::find(1);
        $blog = Blog::latest()->paginate(9);
        return view('front.blogs', ['blog'=>$blog, 'pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function contact(){
        $pageseo = PageSeo::where('pagename', 'contact-us')->get();
        $homepageseo = PageSeo::where('pagename', 'contact-us')->first();
        $gseo = GlobalSeo::find(1);
        return view('front.contact', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function termsConditions(){
        $pageseo = PageSeo::where('pagename', 'terms-and-conditions')->get();
        $homepageseo = PageSeo::where('pagename', 'terms-and-conditions')->first();
        $gseo = GlobalSeo::find(1);
        return view('front.terms-conditions', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }
  
    
    function privacypolicy(){
        $pageseo = PageSeo::where('pagename', 'privacy-policy')->get();
        $homepageseo = PageSeo::where('pagename', 'privacy-policy')->first();
        $gseo = GlobalSeo::find(1);
        return view('front.privacy-policy', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function career(){
        $pageseo = PageSeo::where('pagename', 'career')->get();
        $homepageseo = PageSeo::where('pagename', 'career')->first();
        $gseo = GlobalSeo::find(1);
        return view('front.career', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function casestudies(){
        $pageseo = PageSeo::where('pagename', 'case-studies')->get();
        $homepageseo = PageSeo::where('pagename', 'case-studies')->first();
        $gseo = GlobalSeo::find(1);
        $allblog = Blog::latest()->paginate(6);
        return view('front.case-studies', ['allblog'=>$allblog, 'pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function singleblog($slug){
        $gseo = GlobalSeo::find(1);
        $blog = Blog::where('slug', $slug)->get();
        $allblog = Blog::latest()->paginate(9);
        $pageseo = PageSeo::where('pagename', $slug)->get();
        $homepageseo = PageSeo::where('pagename', $slug)->get();
        return view('front.single-blog', ['allblog'=>$allblog, 'blog'=>$blog, 'pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function gallery(){
        $pageseo = PageSeo::where('pagename', 'gallery')->get();
        $homepageseo = PageSeo::where('pagename', 'gallery')->get();
        $gseo = GlobalSeo::find(1);
        return view('front.gallery', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }

    function thankyou(){
        $pageseo = PageSeo::where('pagename', 'thank-you')->get();
        $homepageseo = PageSeo::where('pagename', 'thank-you')->first();
        $gseo = GlobalSeo::find(1);
        return view('front.thank-you', ['pageseo'=>$pageseo,'gseo'=>$gseo,'homepageseo'=>$homepageseo]);
    }
    
    function submitcareer(Request $req)
    {
        $dbs = new Career();
        $name = $req->name;
        $email = $req->email;
        $phone = $req->phone;
        $designation = $req->designation;
        $dbs->name = $name;
        $dbs->email = $email;
        $dbs->phone = $phone;
        $dbs->designation = $designation;
        $origname = '';
        $originalFileName = '';

        if ($req->hasFile('cv')) {
            $file = $req->file('cv');
            $allowedExtensions = ['pdf', 'doc', 'docx'];
            $extension = strtolower($file->getClientOriginalExtension());
            if (!in_array($extension, $allowedExtensions)) {
                return back()->with('error', 'Only PDF, DOC and DOCX files are allowed.');
            }
    
            $t = time();
            $d = date('Y-m-d', $t);
    
            $originalFileName = $file->getClientOriginalName();
    
            $origname = $d . '-' . $t . '-' . $originalFileName;
    
            $customFolderPath = public_path('cv');
    
            if (!file_exists($customFolderPath)) {
                mkdir($customFolderPath, 0755, true);
            }
    
            $file->move($customFolderPath, $origname);
    
            $dbs->cv = $origname;
        }
    
        $dbs->save();
    
        $mailData = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'designation' => $designation,
            'origname' => $origname,
        ];
    
      

        if (function_exists('fastcgi_finish_request')) {

        // Browser ko response bhej do
        echo true;

        if (ob_get_level() > 0) {
            ob_end_flush();
        }

        flush();

        fastcgi_finish_request();

        // Ab mail send hoga
        $mail = Mail::to('web.thakurdeva@gmail.com');

        if (!empty($origname)) {

            $mail->send(
                (new CareerMail($mailData))
                    ->attach(public_path('cv/' . $origname), [
                        'as' => $originalFileName,
                        'mime' => mime_content_type(
                            public_path('cv/' . $origname)
                        ),
                    ])
            );

        } else {

            $mail->send(
                new CareerMail($mailData)
            );
        }

        return;
        }

    

        $mail = Mail::to('web.thakurdeva@gmail.com');

        if (!empty($origname)) {

        $mail->send(
            (new CareerMail($mailData))
                ->attach(public_path('cv/' . $origname), [
                    'as' => $originalFileName,
                    'mime' => mime_content_type(
                        public_path('cv/' . $origname)
                    ),
                ])
        );

        } else {

        $mail->send(
            new CareerMail($mailData)
        );
        }

        return true;
    }

}