<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('portfolio.index');
    }

    public function index()
    {
        return view('portfolio.index');
    }

    public function about()
    {
        return view('portfolio.about');
    }

    public function blog()
    {
        return view('portfolio.blog');
    }

    public function blogDetails()
    {
        return view('portfolio.blog-details');
    }

    public function contact()
    {
        return view('portfolio.contact');
    }

    public function portfolio()
    {
        return view('portfolio.index');
    }

    public function portfolioDetails()
    {
        return view('portfolio.portfolio-details');
    }

    public function servicesDetails()
    {
        return view('portfolio.services-details');
    }
}
