<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
      $title = 'This is the Index Page';
      return view('nikosapp.index')->with('title',$title);
    }

    public function home() {
      $title = 'Welcome to the Site Home Page';
      return view('nikosapp.home')->with('title',$title);
    }

    public function about() {
        $title = 'Welcome to the Site About Page';
      return view('nikosapp.about')->with('title',$title);
    }

    public function services() {
      $data = array(
        'title' => 'Welcome to the Site Services Page',
        'services' => ['Web Design','Mobile Apps','Managed Hosting','Web Development']
      );
      return view('nikosapp.services')->with($data);
    }
    
}
