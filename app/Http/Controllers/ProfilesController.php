<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;

class ProfilesController extends Controller
{
    public function index($slug){
        $user = User::where('slug', $slug) ->first();
        return view('profiles.profile') -> with('user', $user);            
    }



    public function update(Request $r){        
        $this->validate($r, [
            'location' => 'max:50',
            'about' => 'max:50'

        ]);

        Auth::user()->profile()->update([
            'location' => $r->location,
            'about' => $r->about,
        ]);

        Session::flash('sucess', 'Profile Updated');
        return redirect()->back();
    }

    
}
