<?php

namespace App\Http\Controllers;

use App\Models\ShortenedURL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        $shortenedURLs = ShortenedURL::where('user_id', '=', $user->id)->get();
        return view('dashboard', ['shortenedURLs' => $shortenedURLs]);
    }
}
