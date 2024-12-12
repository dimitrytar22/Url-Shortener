<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\ShortenedUrl\StoreRequest;
use App\Http\Requests\Api\V1\ShortenedUrl\UpdateRequest;
use App\Http\Resources\ShortenedURLResource;
use App\Models\ShortenedURL;
use App\Services\ShortenedURLService;

class ShortenedURLController extends Controller
{
    public function store(StoreRequest $request, ShortenedURLService $service){
        $url = $service->store($request->validated());
        return new ShortenedURLResource($url);
    }
    public function update(UpdateRequest $request, ShortenedURL $shortenedUrl)
    {
        $data = $request->validated();
        $shortenedUrl->update($data);
        return new ShortenedURLResource($shortenedUrl);
    }
    public function  destroy(ShortenedURL $shortenedUrl)
    {
        $shortenedUrl->delete();
        return response('',204);
    }
}
