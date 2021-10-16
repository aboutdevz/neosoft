<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index() {
        $respond = Http::get('https://jsonplaceholder.typicode.com/posts');
        $posts = $respond->json();
        
        return view('dashboard',compact('posts'));
    }
}
