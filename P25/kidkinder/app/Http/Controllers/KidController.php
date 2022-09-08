<?php

namespace App\Http\Controllers;
use App\Models\Kid;
use App\Models\Kelas;
use App\Models\Picture;

use Illuminate\Http\Request;

class KidController extends Controller
{
    public function index(){
        return view('index', ['kids' => Kid::kids(), 'pictures' => Picture::index(), 'kelas' => Kelas::index('image')]);

    }

    public function about(){
        return view('about');
    }

    public function blog(){
        return view('blog');
    }

    public function class(){
        return view('class');
    }

    public function contact(){
        return view('contact');
    }

    public function gallery(){
        return view('gallery');
    }

    public function single(){
        return view('single');
    }

    public function team(){
        return view('team');
    }
}
