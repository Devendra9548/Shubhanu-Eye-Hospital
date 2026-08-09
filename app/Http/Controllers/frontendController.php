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
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\ContactMail;
use App\Mail\EnquireLeadMail;
use App\Models\ClientReview;
use Intervention\Image\Facades\Image;


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
}
