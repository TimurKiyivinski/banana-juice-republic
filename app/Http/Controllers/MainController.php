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
    public $main_text = "Organized yearly for a week in August, the Society for Design and Innovation Technology International Conference is... ";
    public $register_text = "<p>Are you convinced yet? Join the conference today! Our registration includes accommodation and attraction <b>bookings at discounted prices</b>! Our easy registration process allows you to sign in through Facebook to ease the registration process. Our staff will work out a personalized schedule for you. You can come back for bookings at any time as our system will generate a <b>personalized token</b> for you. Please be assured that your privacy is our number one priority. For more information, contact us.</p>";
    public $accommodation_text = "<p>Book your accommodation through one of our sponsored hotels at a discounted price. All accommodations include <b>provided transport</b> to and from the hotel throughout the conference. All hotel partners provide <b>free breakfast and dinner</b> throughout the conderence too, although guests are invited to try local delicacies and food attractions.";
    public $attraction_text = "<p>Sarawak is a land of wonders. Sign up for one of our tours. All tours will be organized during non-conference hours and are appropriate for everyone of all ages. Bringing children along? Great, our pick of attractions are guaranteed safe and fun! Also, <b>minors</b> under the age of 12 get <b>free entrance</b>.</p>";
    public $eateries_text = "<p>Food glorious food! -and we have lots of it here! Visit one of our various eateries around Kuching and experience our local delicacies. Post your food pictures to Twitter and Instagram throughout the conference with the hasthtag <b>#SDICMakan</b> to stand a chance to win on the final day!</b>";
    public $transport_text = "<p>Need a ride throughout the conference? <b>Not a fan of taxis?</b> Rent a car at a cheap daily rate for all your transportation needs. Our cars come in both manual and automatic and are fully equuipped with <b>GPS</b> and <b>pre-programmed attractions and routes</b>.</p>";

    public function index()
    {
        $data = [];
        $data['title'] = "SDIT International Conference";
        $data['main_text'] = $this->main_text;
        $data['register_text'] = $this->register_text;
        $data['accommodation_text'] = $this->accommodation_text;
        $data['attraction_text'] = $this->attraction_text;
        $data['eateries_text'] = $this->eateries_text;
        $data['transport_text'] = $this->transport_text;
        $data['img_register'] = asset('images/registration.jpg');
        $data['img_accommodation'] = asset('images/accommodation.jpg');
        $data['img_attraction'] = asset('images/attraction.jpg');
        $data['img_eateries'] = asset('images/topspot3.jpg');
        $data['img_transport'] = asset('images/myvi0.jpg');
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

        $attraction['id'] = 1;
        $attraction['name'] = "Semenggoh Wildlife Centre";
        $attraction['text'] = "<p>The Semenggoh Wildlife Centre was established in 1975 to care for wild animals which have either been found injured in the forest, orphaned, or were previously kept as illegal pets.</p> <p>The centre is situated within the boundaries of the Semenggoh Nature Reserve, approximately 24 km from Kuching.</p> <p>The Centre has been a resounding success, caring for almost 1,000 endangered mammals, birds and reptiles from dozens of different species.</p> <p>However it is the orang utan rehabilitation programme that has made the Centre famous.</p> <p>In one respect, Semenggoh has been too successful &ndash; so many orang utan have been successfully reintroduced into the surrounding forest reserve that the forest&rsquo;s carrying capacity has been reached, and rehabilitation activities have been transferred to the Matang Wildlife Centre, part of Kubah National Park.</p> <p>As a result of its success, Semenggoh's role has changed and it is nowadays a centre for the study of orang utan biology and behaviour, as well as a safe and natural haven for dozens of semi-wild orang utan, graduates of the rehabilitation programme.</p> <p>It is also home to numerous baby orang utan, born in the wild to rehabilitated mothers, a further testament to the success of the programme.</p>";
        $attraction['cost'] = "3";
        $attraction['photo'] = asset('images/swc0.jpg');
        $attraction['photos'] = [0 => asset('images/swc0.jpg'), 1 => asset('images/swc1.jpg'), 2 => asset('images/swc2.jpg')];
        $attraction['url'] = "http://www.sarawakforestry.com/htm/snp-nr-semenggoh.html";
        $attractions[] = $attraction;

        $attraction['id'] = 2;
        $attraction['name'] = "Fairy Cave";
        $attraction['text'] = "<p>Entrance to Fairy Cave(also known as Gua Pari) is an impressive show cave near the former gold mining settlement of Bau and about 40km from Kuching, Sarawak.</p> <p>It is just a few minutes drive from another show cave, Wind Cave, and most tourists would combine both on a half-day trip from Kuching.</p> <p>Access to the cave is via a four storey concrete staircase which brings you to the cave entrance.</p> <p>The cave is criss-crossed with concrete footpaths and steps and it is best to stick to the paths for safety and to avoid damaging the fragile eco-system.</p> <p>The combination of light, water and thin, guano-enriched soil allows plants to survive here, mostly ferns.</p>";
        $attraction['cost'] = "0";
        $attraction['photo'] = asset('images/fc0.jpg');
        $attraction['photos'] = [0 => asset('images/fc0.jpg'), 1 => asset('images/fc1.jpg'), 2 => asset('images/fc2.jpg'), 3 => asset('images/fc3.jpg')];
        $attraction['url'] = "http://www.malaysia-traveller.com/fairy-cave.html";
        $attractions[] = $attraction;

        $attraction['id'] = 3;
        $attraction['name'] = "Bako National Park";
        $attraction['text'] = "<p>With its rainforest, abundant wildlife, jungle streams, waterfalls, interesting plant life, secluded beaches, panoramic rocky shoreline, bizarre rock formations and extensive network of trekking trails, Bako National Park offers visitors an excellent introduction to the rainforest and coastline of Borneo.</p> <p>Bako may not have an instantly recognisable star attraction, but there can be very few places in the world that pack so much natural beauty into such a limited area, all just 37 km from Kuching.</p> <p>Its accessibility - and its sheer range of attractions and activities - have made Bako one of the most popular parks in Sarawak.</p> <p>Gazetted in 1957, Bako is Sarawak’s oldest national park, covering an area of 2,727 hectares at the tip of the Muara Tebas peninsula.</p> <p>It is one of the smallest national parks in Sarawak, yet one of the most interesting, as it contains almost every type of vegetation found in Borneo.</p> <p>The well-maintained network of nature trails - from easy forest strolls to full-day jungle treks – allows visitors to get the most out of this unique environment.</p>";
        $attraction['cost'] = "10";
        $attraction['photo'] = asset('images/bnp0.jpg');
        $attraction['photos'] = [0 => asset('images/bnp0.jpg'), 1 => asset('images/bnp1.jpg'), 2 => asset('images/bnp2.jpg'), 3 => asset('images/bnp3.jpg')];
        $attraction['url'] = "http://www.sarawakforestry.com/htm/snp-np-bako.html";
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

        $transport['id'] = 1;
        $transport['name'] = "Perodua Myvi (Automatic)";
        $transport['text'] = "The Perodua Myvi is a B-segment car produced by Malaysian manufacturer Perodua since 2005. Based on the Daihatsu Boon, the Myvi is the result of Perodua's collaboration with both Toyota and Daihatsu. The Perodua Myvi has been the best-selling car in Malaysia for 8 consecutive years, between 2006 and 2013 respectively.";
        $transport['cost'] = "20";
        $transport['photo'] = asset('images/myvi3.jpg');
        $transport['photos'] = [0 => asset('images/myvi3.jpg'), 1 => asset('images/myvi1.jpg'), 2 => asset('images/myvi2.jpg')];
        $transport['url'] = "http://www.perodua.com.my/ourcars/myvi";
        $transports[] = $transport;

        $data['transports'] = $transports;

        $data['r_name'] = "payment";
        $data['r_url'] = url('/pay');

        return view('transports', $data);
    }

    public function food()
    {
        $data = [];
        $data['title'] = "Local Delicacies";
        $data['text'] = $this->eateries_text;

        // Create eateries
        $food['id'] = 0;
        $food['name'] = "Top Spot Food Court";
        $food['text'] = "Rooftop dining is not uncommon for fine dining restaurants and bars. But what about seafood in a hawker setting? Well, in Kuching there’s this place called Top Spot Food Court where half a dozen of restaurants – mostly serving seafood (halal options available) operate on the roof of a 6 storey car park.";
        $food['cost_min'] = "15";
        $food['cost_max'] = "45";
        $food['photo'] = asset('images/topspot0.jpg');
        $food['photos'] = [0 => asset('images/topspot0.jpg'), 1 => asset('images/topspot1.jpg'), 2 => asset('images/topspot2.jpg'), 3 => asset('images/topspot3.jpg')];
        $food['url'] = "https://www.google.com.my/maps/place/Topspot+Food+Court/@1.556247,110.3499354,17z/data=!3m1!4b1!4m2!3m1!1s0x31fba7ea4e7e9457:0x8b50b07ca672010f";
        $foods[] = $food;

        $data['foods'] = $foods;
        return view('food', $data);
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
