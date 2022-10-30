<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        return view('frontEnd.home.home');
    }
    public function blogDetails() {
        return view('frontEnd.blog.blog-details');
    }
    public function blogCategory() {
        return view('frontEnd.blog.category');
    }
    public function blogContact() {
        return view('frontEnd.contact');
    }
    public function blogAbout() {
        return view('frontEnd.about');
    }
    public function blogSearch() {
        return view('frontEnd.blog.search-blog');
    }
}
