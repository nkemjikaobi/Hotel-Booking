<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subscriber;

use Illuminate\Support\Facades\Validator;

class SubscribersController extends Controller
{
    public function storeSubscribers(Request $request){
        $validator = Validator::make($request->only('email'), [
            'email' => 'email',
        ]);

        if($validator->fails()){
            return response()->json(['status' => 'validation failed', 'error' => 'Invalid Email']);
        }

        if(Subscriber::where('email', $request->email)->exists()){
            return response()->json(['status' => 'not ok', 'error' => 'Email already exists']);
        }
        else{
            $subscriber = new Subscriber();

            $subscriber->email = request('email');

            $subscriber->save();

            return response()->json(['status' => 'ok', 'message' => 'Thanks for subscribing']);

        }
    }
}
