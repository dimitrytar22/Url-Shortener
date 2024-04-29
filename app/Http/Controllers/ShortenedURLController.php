<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortenedURL\StoreRequest;
use App\Services\ShortenedURLService;

class ShortenedURLController extends Controller{

    public function store(StoreRequest $request, ShortenedURLService $service){
        $url = $service->store($request->validated());
        return $url;
    }
    public function show($shortenedURL, ShortenedURLService $service){
        $url= $service->show($shortenedURL);

        return redirect($url->origin);
    }

}
