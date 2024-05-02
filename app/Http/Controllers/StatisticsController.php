<?php

namespace App\Http\Controllers;

use App\Models\ShortenedURL;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index(){
        return view('statistics.index', ['shortenedURLs' => ShortenedURL::orderBy('clicks', 'desc')->paginate(10)]);
    }
}
