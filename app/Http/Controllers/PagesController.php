<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function index() {
    	$title = 'Laravel and MaterializeCSS';
    	return view('pages.index', compact('title'));
    }

    public function about() {
    	$title = 'About Us';
    	return view('pages.about', compact('title'));
    }

    public function services() {
    	$title = 'Services';
    	return view('pages.services', compact('title'));
    }
}