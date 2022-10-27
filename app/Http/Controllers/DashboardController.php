<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\POstLiked;
use Illuminate\Support\Facades\Mail;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {

        return view('posts.dashboard');

    }
}

