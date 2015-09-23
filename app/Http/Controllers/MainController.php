<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Lipsum;

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

    public function login($type = 0, $reference = "")
    {
        $data = [];
        // Use reference to determine redirect
        switch ($reference)
        {
        case "attraction":
            $data['r_name'] = "Attractions";
            $data['r_url'] = url('/attractions', 'attraction');
            break;
        case "accommodation":
            $data['r_name'] = "Accommodations";
            $data['r_url'] = url('/accommodations', 'accommodation');
            break;
        case "details":
            $data['r_name'] = "Accommodations";
            $data['r_url'] = url('/details');
            break;
        default:
            abort(404);
        }
        // Determine login type
        if ($type == 0)
        {
            $data['title'] = "Login with Facebook";
            return view('login.facebook', $data);
        }
        else if ($type == 1)
        {
            $data['title'] = "Login using registration token";
            return view('login.token', $data);
        }
        else
            return abort(404);
    }

    public function register()
    {
        $data = [];
        $data['title'] = "Conference Registration";
        $data['text'] = $this->register_text;
        return view('register', $data);
    }

    public function details()
    {
        $data = [];
        $data['title'] = "Conference Registration";
        $data['r_name'] = "Accommodations";
        $data['r_url'] = url('/accommodations', 'details');
        return view('details', $data);
    }

    public function accommodation()
    {
        $data = [];
        $data['title'] = "Book Accommodation";
        $data['text'] = $this->accommodation_text;
        return view('accommodation', $data);
    }

    public function accommodations($reference = "")
    {
        $data = [];
        $data['title'] = "Select Accommodations";
        // Create accommodations
        $accommodations = [];
        $text = Lipsum::short()->text(1);
        $text_long = Lipsum::text();
        for ($i = 0; $i < 10; $i++)
        {
            $accommodation = [];
            $accommodation['id'] = $i;
            $accommodation['name'] = "Hotel X Room " . $i;
            $accommodation['text'] = $text;
            $accommodation['text_long'] = $text_long;
            $accommodation['photo'] = 'https://images.duckduckgo.com/iu/?u=http%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.M03f9aaba8059ed15450a06b76467eaeao0%26pid%3D15.1&f=1';
            $accommodations[] = $accommodation;
        }
        $data['accommodations'] = $accommodations;
        // Use reference to determine redirect
        switch ($reference)
        {
        case "accommodation":
            $data['r_name'] = "payment.";
            $data['r_url'] = url('/pay');
            break;
        case "details":
            $data['r_name'] = "Attractions";
            $data['r_url'] = url('/attractions', 'details');
            break;
        default:
            abort(404);
        }
        return view('accommodations', $data);
    }

    public function attraction()
    {
        $data = [];
        $data['title'] = "Book Attraction";
        $data['text'] = $this->attraction_text;
        return view('attraction', $data);
    }

    public function attractions($reference = "")
    {
        $data = [];
        $data['title'] = "Select Attractions";
        // Create attractions
        $attractions = [];
        $text = Lipsum::short()->text(1);
        $text_long = Lipsum::text();
        for ($i = 0; $i < 10; $i++)
        {
            $attraction = [];
            $attraction['id'] = $i;
            $attraction['name'] = "Attraction " . $i;
            $attraction['text'] = $text;
            $attraction['text_long'] = $text_long;
            $attraction['photo'] = 'https://images.duckduckgo.com/iu/?u=http%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.M06f7555a8e3af33ef143041e7c6d4435o0%26pid%3D15.1&f=1';
            $attractions[] = $attraction;
        }
        $data['attractions'] = $attractions;
        // Use reference to determine redirect
        switch ($reference)
        {
        case "attraction":
            $data['r_name'] = "payment.";
            $data['r_url'] = url('/pay');
            break;
        case "details":
            $data['r_name'] = "payment.";
            $data['r_url'] = url('/pay');
            break;
        default:
            abort(404);
        }
        return view('attractions', $data);
    }

    public function pay()
    {
        $data = [];
        $data['title'] = "Make Payment";
        return view('pay', $data);
    }

}
