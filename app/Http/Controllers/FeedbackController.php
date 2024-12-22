<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Jobs\ContactFormJob;
use App\Mail\Contact;
use App\Services\FeedbackService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function __construct(private FeedbackService $service)
    {
    }

    public function  contact()
    {
        return view('feedback');
    }

    public function send(FeedbackRequest $request)
    {
        $this->service->send($request);
        return redirect()->route('feedback')->with('success', 'Your feedback was successfully sent!');
    }
}
