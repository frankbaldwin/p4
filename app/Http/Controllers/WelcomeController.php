<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller {

    #Responds to requests to GET welcome/index
    public function getIndex() {
        if(\Auth::check()) {
            return redirect()->to('/handicap');
        }
        return view('welcome.index');
    }
}
