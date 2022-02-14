<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CaptchaServiceController extends Controller
{
    public function reloadCaptcha(): JsonResponse
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
