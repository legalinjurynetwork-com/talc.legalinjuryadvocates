<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Session;
class AuthController extends Controller
{
  public function auth(Request $request)
  {
    return $request->user();
  }
}