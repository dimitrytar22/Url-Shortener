<?php

namespace App\Http\Controllers;

use App\Models\ShortenedURL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        $shortenedURLs = ShortenedURL::query()->where('user_id', '=', $user->id)->paginate(10);
        return view('dashboard', ['shortenedURLs' => $shortenedURLs]);
    }
}
