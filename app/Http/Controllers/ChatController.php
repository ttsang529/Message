<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Auth;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function __construct()
	{
		//$this->middleware('guest');
        $this->middleware('auth');
	}

	public function sendMessage(Request $request){
     
     
        $user=\Auth::user();
        //Log::info("Showing ChatController test $user");
        //  return "$request->message";

		$data = ['message' =>$request->message, 'user' => $user->name];
		Redis::publish('message', json_encode($data));
		return response()->json([]);
	}
}
