<?php

namespace App\Http\Controllers;

use App\Http\Requests\QRCode\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function index(){
        return view('qrcodes.index');
    }

}
