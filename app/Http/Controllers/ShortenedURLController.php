<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortenedUrl\StoreRequest;
use App\Http\Requests\ShortenedUrl\UpdateRequest;
use App\Http\Resources\ShortenedURLResource;
use App\Models\ShortenedURL;
use App\Services\ShortenedURLService;

class ShortenedURLController extends Controller
{
    public function __construct(private ShortenedURLService $service)
    {
    }

    public function show($shortenedURL)
    {
        $url = $this->service->show($shortenedURL);
        return redirect($url->origin);
    }

    public function store(StoreRequest $request)
    {
        $url = $this->service->store($request->validated());
        return new ShortenedURLResource($url);
    }

    public function update(UpdateRequest $request, ShortenedURL $shortenedUrl)
    {
        $this->service->update($request, $shortenedUrl);
        return new ShortenedURLResource($shortenedUrl);
    }

    public function destroy(ShortenedURL $shortenedUrl)
    {
        $this->service->destroy($shortenedUrl);
        return response('', 204);
    }

}
