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
    public $transport_text = "Transport Text";

    public function index()
    {
        $data = [];
        $data['title'] = "SDIT International Conference";
        $data['main_text'] = $this->main_text;
        $data['register_text'] = $this->register_text;
        $data['accommodation_text'] = $this->accommodation_text;
        $data['attraction_text'] = $this->attraction_text;
        $data['img_register'] = asset('images/registration.jpg');
        $data['img_accommodation'] = asset('images/accommodation.jpg');
        $data['img_attraction'] = asset('images/attraction.jpg');
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
        case "transport":
            $data['r_name'] = "Transportation";
            $data['r_url'] = url('/transports');
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

        $accommodation = [];
        $accommodation['id'] = 0;
        $accommodation['name'] = "Pullman Superior Suite";
        $accommodation['text'] = "With 38 sqm of space, the Superior Room is perfect for two adults and offer guests both comfort and privacy. Among the features are LCD TV, an efficient working desk for business guests, a high speed internet access, Bath Tub with Exclusive Bathroom Amenities and Separate Rain Forest Shower.";
        $accommodation['cost'] = "310";
        $accommodation['people'] = "2";
        $accommodation['photo'] = asset('images/pull0.jpg');
        $accommodation['photos'] = [0 => asset('images/pull0.jpg'), 1 => asset('images/pull1.jpg'), 2 => asset('images/pull2.jpg')];
        $accommodation['url'] = "http://www.pullmankuching.com/rooms-suites/superior/";
        $accommodations[] = $accommodation;

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

        $attraction['id'] = 0;
        $attraction['name'] = "Sarawak Cultural Village";
        $attraction['text'] = "<p>Tucked away at the foothills of legendary Mount Santubong, 35 km from Kuching is Sarawak's fascinating cultural showcase, the award winning &quot;Sarawak Cultural Village&quot; which is also the venue for the World Harvest Festival and the Rainforest World Music Festival, an internationally renowned festival.</p> <p>This living museum is wholly owned by the Sarawak Economic Development Corporation (SEDC) depicts the heritage of the major racial groups in Sarawak and conveniently portrays their respective lifestyle amidst 14 acres of tropical vegetation.</p> <p>Here, it is possible to see Sarawak's ethnic diversity at a glance. The handicraft is both bewildering and tempting, including the Kain Songket (Malay cloth with gold inlay), Pua Kumbu (Iban housewives textiles), Melanau Terendak (sunhat), Bidayuh tambok (basket), Iban parang (swords), Orang Ulu wood carving and Chinese ceramics.</p> <p>The 45-minute cultural performance of songs, dances and entertainment is something you will not want to miss during your visit to Sarawak.</p>";
        $attraction['cost'] = "25";
        $attraction['photo'] = asset('images/scv0.jpg');
        $attraction['photos'] = [0 => asset('images/scv0.jpg'), 1 => asset('images/scv1.jpg'), 2 => asset('images/scv2.jpg'), 3 => asset('images/scv3.jpg')];
        $attraction['url'] = "http://www.scv.com.my/main.asp";
        $attractions[] = $attraction;

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

    public function transport()
    {
        $data = [];
        $data['title'] = "Transport Accommodation";
        $data['text'] = $this->transport_text;
        return view('transport', $data);
    }

    public function transports($reference = "")
    {
        $data = [];
        $data['title'] = "Select Attractions";
        // Create transports
        $transports = [];

        $transport['id'] = 0;
        $transport['name'] = "Perodua Myvi (Manual)";
        $transport['text'] = "The Perodua Myvi is a B-segment car produced by Malaysian manufacturer Perodua since 2005. Based on the Daihatsu Boon, the Myvi is the result of Perodua's collaboration with both Toyota and Daihatsu. The Perodua Myvi has been the best-selling car in Malaysia for 8 consecutive years, between 2006 and 2013 respectively.";
        $transport['cost'] = "20";
        $transport['photo'] = asset('images/myvi0.jpg');
        $transport['photos'] = [0 => asset('images/myvi0.jpg'), 1 => asset('images/myvi1.jpg'), 2 => asset('images/myvi2.jpg')];
        $transport['url'] = "http://www.perodua.com.my/ourcars/myvi";
        $transports[] = $transport;

        $data['transports'] = $transports;

        $data['r_name'] = "payment";
        $data['r_url'] = url('/pay');

        return view('transports', $data);
    }

    public function pay()
    {
        $data = [];
        $data['title'] = "Make Payment";
        return view('pay', $data);
    }

    public function contact()
    {
        $data = [];
        $data['title'] = "Contact Us";
        return view('contact', $data);
    }

}
