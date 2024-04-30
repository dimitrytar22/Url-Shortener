<?php
namespace App\Services;

use App\Models\ShortenedURL;
use Illuminate\Support\Facades\Auth;

class ShortenedURLService{


    public function store(array $data):array{
        
        $data['user_id'] = Auth::user()->id;
        $data['shortened'] = ShortenedURL::generateShortURL($data['origin']);
        $checkIfExists = ShortenedURL::query()->where('shortened', '=', $data['shortened'])->where('user_id', '=', $data['user_id'])->first();
        if($checkIfExists){
            $response = $checkIfExists;
        }else{
            $response =  ShortenedURL::create($data);
        }
        $response['shortened'] = route('shortenedurl.show', ['shortenedURL' => $response->shortened]);
        return $response->toArray();
    }

    public function show($shortenedURL){
        $originRow = ShortenedURL::where('shortened', '=', $shortenedURL)->first();
        $this->addClick($originRow);
        return $originRow;
    }
    private function addClick(ShortenedURL $shortenedURL){
        $oldClicks = intval($shortenedURL->clicks);
        $shortenedURL->update(['clicks' => ++$oldClicks]);
    }
}