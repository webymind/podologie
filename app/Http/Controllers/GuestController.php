<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function termsofuse () {
        return view('terms');
    }

    public function privacypolicy (){
        return view('privacy');
    }

    public function podiatryassess() {
        return view('BilanPodologie');
    }

    public function pedicuretreatment () {
        return view ('pedicurie');
    }

    public function semelleortho () {
        return view ("semelle");
    }

    public function aboutaglae() {
        return view("about");
    }

    public function df() {

        return view("diabeticfoot");
    }

    public function pms() {
        return view("pmspecificite");
    }

    public function plantarwart() {
        return view("plantar-wart");
    }

    public function orthonyonycho() {
        return view("orthony-onycho");
    }

    public function ps() {
        return view("bilanpodo-spec");
    }

    public function sportpodi(){
        return view("sportpodiatry");
    }

    public function Posturo() {
        return view("posturology");
    }


}
