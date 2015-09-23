<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public $main_text = "Main Text";
    public $register_text = "Register Text";
    public $accommodation_text = "Accommodation Text";
    public $attraction_text = "Attraction Text";

    public function index()
    {
        $data = [];
        $data['title'] = "SDIT International Conference";
        $data['main_text'] = $this->main_text;
        $data['register_text'] = $this->register_text;
        $data['accommodation_text'] = $this->accommodation_text;
        $data['attraction_text'] = $this->attraction_text;
        return view('index', $data);
    }

    public function login($type = 0)
    {
        $data = [];
        $data['title'] = "Registration method";
        if ($type == 0)
            return view('login.facebook', $data);
        else if ($type == 1)
            return view('login.token', $data);
        else
            return 404;
    }

    public function register()
    {
        $data = [];
        $data['title'] = "Conference Registration";
        $data['text'] = $this->register_text;
        return view('register', $data);
    }

    public function accommodation()
    {
        $data = [];
        $data['title'] = "Book Accommodation";
        $data['text'] = $this->accommodation_text;
        return view('accommodation', $data);
    }

    public function accommodations()
    {
        $data = [];
        $data['title'] = "Select Accommodations";
        return view('accommodations', $data);
    }

    public function attraction()
    {
        $data = [];
        $data['title'] = "Book Attraction";
        $data['text'] = $this->attraction_text;
        return view('attraction', $data);
    }

    public function attractions()
    {
        $data = [];
        $data['title'] = "Select Attractions";
        return view('attractions', $data);
    }

    public function pay()
    {
        $data = [];
        $data['title'] = "Make Payment";
        return view('pay', $data);
    }

}
