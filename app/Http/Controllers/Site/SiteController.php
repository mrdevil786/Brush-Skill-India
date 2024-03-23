<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }
    public function about()
    {
        return view('site.about');
    }
    public function service()
    {
        return view('site.service');
    }
    public function contact()
    {
        return view('site.contact');
    }
    public function testimonial()
    {
        return view('site.testimonial');
    }
    public function blog()
    {
        return view('site.blog');
    }
    public function team()
    {
        return view('site.team');
    }
}
