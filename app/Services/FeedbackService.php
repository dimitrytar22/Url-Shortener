<?php
namespace App\Services;

use App\Http\Requests\FeedbackRequest;
use App\Jobs\ContactFormJob;

class FeedbackService{


    public function send(FeedbackRequest $request)
    {
        $data = $request->validated();
        ContactFormJob::dispatch($data);
    }
}
