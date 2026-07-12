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
}
