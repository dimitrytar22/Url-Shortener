<?php

namespace App\Http\Controllers;

use App\Services\ShortenedURLService;

class ShortenedURLController extends Controller{

    public function show($shortenedURL, ShortenedURLService $service){
        $url= $service->show($shortenedURL);

        return redirect($url->origin);
    }
}
