<?php
namespace App\Services;

use App\Http\Requests\ShortenedUrl\UpdateRequest;
use App\Http\Resources\ShortenedURLResource;
use App\Models\ShortenedURL;
use Illuminate\Support\Facades\Auth;

class ShortenedURLService{


    public function store(array $data){
        if(!Auth::check())
            $data['user_id'] = 0;
        else
            $data['user_id'] = Auth::user()->id;
        $data['shortened'] = ShortenedURL::generateShortURL($data['origin']);
        $checkIfExists = ShortenedURL::query()->where('shortened', '=', $data['shortened'])->where('user_id', '=', $data['user_id'])->first();
        if($checkIfExists){
            $response = $checkIfExists;
        }else{
            $response = ShortenedURL::create($data);
            $response->refresh();
        }

        return $response;
    }

    public function show(string $shortenedURL){
        $originRow = ShortenedURL::query()->where('shortened', '=', $shortenedURL)->firstOrFail();
        $this->addClick($originRow);
        return $originRow;
    }
    private function addClick(ShortenedURL $shortenedURL){
        $oldClicks = intval($shortenedURL->clicks);
        $shortenedURL->update(['clicks' => ++$oldClicks]);
    }
    public function update(UpdateRequest $request, ShortenedURL $shortenedUrl)
    {
        $data = $request->validated();
        $shortenedUrl->update($data);
    }
    public function destroy(ShortenedURL $shortenedUrl)
    {
        $shortenedUrl->delete();
    }
}
