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
        $data['img_register'] = "http://sarawak.attractionsinmalaysia.com/img/photoState/sarawak/1.jpg";
        $data['img_accommodation'] = "http://www.globotours.net/wp-content/uploads/2014/06/Hilton-Hotel-Kuching-Standard-Room-Web.jpg";
        $data['img_attraction'] = "http://1.bp.blogspot.com/-_cxGC-UIsIE/VeR3HQjGdSI/AAAAAAAAQGo/W5lxykm0fOg/s640/Kuching%2BWaterfront.jpg";
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

        $accommodation = [];
        $accommodation['id'] = 0;
        $accommodation['name'] = "Pullman Kuching";
        $accommodation['text'] = "Pullman Kuching is qualified as a 4 stars hotel, and is located in Kuching. The hotel consists of 389 rooms in total. High temperatures are kept outside thanks to the good quality air conditioning available. As a 4 stars accommodation, an outdoor pool is also available for you to take a swim. Furthermore, there is a gym where you can have the option to get into some training with our professional trainer, as well as a spa, a whirlpool bath and sauna for you to relax and enjoy your stay. Moreover, you can also indulge yourself with a massage treatment. There is no need to go out for dinner as an onsite restaurant with great food and great price. A lounge bar is also available for visitors to have a drink anytime at our lobby. You will also able to enjoy an international breakfast each morning in order to offer you a good start to a new day!";
        $accommodation['photo'] = "http://www.pullmankuching.com/wp-content/gallery/the-hotel/exterior-Panoramic.jpg";
        $accommodation['url'] = "http://www.pullmankuching.com";
        $accommodations[] = $accommodation;

        $accommodation = [];
        $accommodation['id'] = 1;
        $accommodation['name'] = "Hilton Kuching Hotel";
        $accommodation['text'] = "Of a Luxury category, the Riverside Inn has all the comforts such as: Non Smoking Rooms, Business Center, Television, Air conditioning. Located north-east, 5 minutes by car distance from the city center, this hotel located at 1 Jalan Tunku ABdul Rahman is the ideal accommodation to take the advantage of all the wonders of Kuching, whether for a few days or for a longer stay.This hotel offers a unique service, and wheelchairs are also accessible.This hotel offers high speed internet as well.The Kuching airport is about 17 minutes by car from the hotel (5 miles).This hotel is part of the IR chain.Take advantage of the outdoor pool which is available at the hotel.";
        $accommodation['photo'] = "http://www3.hilton.com/resources/media/hi/KUCHITW/en_US/img/shared/full_page_image_gallery/main/HL_exterior001_675x359_FitToBoxSmallDimension_Center.jpg";
        $accommodation['url'] = "http://www3.hilton.com/en/hotels/malaysia/hilton-kuching-KUCHITW/index.html";
        $accommodations[] = $accommodation;

        $accommodation = [];
        $accommodation['id'] = 2;
        $accommodation['name'] = "Ariva Gateway Kuching";
        $accommodation['text'] = "Ariva Gateway Kuching. \"Ariva Gateway Kuching\" is a 4-star hotel. This hotel is situated in Kuching. The nearby airport makes it easy to reach the hotel. A total of 68 bedrooms is featured. Inside, it is never too warm thanks to the air conditioning. Don't forget to bring your swimsuit since this hotel offers the luxury of an outdoor swimming pool. There is a gymnasium where guests can work out by themselves. For your well-being, there is an onsite spa available. Give your health a boost in the sauna. The accommodation has its own restaurant. After a good night's sleep, guests have the option to have a continental breakfast. If you would like to share your experiences instantly, there is free Internet access available.";
        $accommodation['photo'] = "http://pix5.agoda.net/hotelimages/651/65189/65189_14041416140019069846.jpg?s=800x600";
        $accommodation['url'] = "http://www.stayariva.com/en/";
        $accommodations[] = $accommodation;

        $accommodation = [];
        $accommodation['id'] = 3;
        $accommodation['name'] = "Grand Margherita Hotel";
        $accommodation['text'] = "Offering riverfront accommodation in central Kuching, Grand Margherita is situated beside Sarawak Plaza Shopping Complex. Boasting an outdoor pool and 4 dining options, it also offers a spa. Free Wi-Fi and free wired internet are provided in all rooms. Grand Margherita Hotel is a 2-minute walk from the Kuching Waterfront and a 5-minute boat ride from Fort Margherita. Kuching International Airport is a 20-minute drive away. The modern rooms at Grand Margherita come with air conditioning and a satellite TV. In addition to tea/coffee making facilities and a minibar, 24-hour room service is available. Guests of Grand Margherita Hotel can visit the library or exercise in the fitness room. The hotel has a tour desk and provides shuttle services to Damai and Santubong. Orchid Garden Coffee House serves local and European dishes, while Meisan Szechuan Restaurant offers Chinese specialities. Rajang Lobby Lounge features drinks, accompanied with music.";
        $accommodation['photo'] = "https://media-cdn.tripadvisor.com/media/photo-o/01/b0/4c/ee/hotel-exterior.jpg";
        $accommodation['url'] = "http://www.grandmargherita.com/";
        $accommodations[] = $accommodation;

        $accommodation = [];
        $accommodation['id'] = 4;
        $accommodation['name'] = "Abell Hotel";
        $accommodation['text'] = "Boasting its superb location in the heart of the historical city of Kuching, guests of Abell Hotel are within easy reach of some of the city’s most popular shopping areas, tourist attractions, and eateries. Brilliantly reflecting Malaysia’s vibrant culture and culinary heritage, this 3- star property fuses chic, fresh, and contemporary interiors with comfort and style for utmost luxury. On-site facilities include a 24-hour front desk, laundry service, and safety deposit box. Wi-Fi Internet access is available in all rooms and in public areas as well. A short stroll away from the property will take guests to the Bing Coffee and the Hawker Centre. Please enter your preferred dates of stay and submit our online booking form to make a reservation at Abell Hotel.";
        $accommodation['photo'] = "http://cote-dazur-hotels.com/hotelphotos/1226824_1_sml.jpg";
        $accommodation['url'] = "http://abellhotel.com/v3/";
        $accommodations[] = $accommodation;

        $accommodation = [];
        $accommodation['id'] = 5;
        $accommodation['name'] = "Batik Boutique Hotel";
        $accommodation['text'] = "This modern boutique hotel caters to the needs of today's travelers, providing a luxurious and comfortable stay whether visiting for business or leisure. Nestled in the hub of Kuching's tourist, dining, business, and entertainment area, Batik Boutique Hotel is strategically placed for those looking forward to exploring the city. The property offers a range of guestrooms coming in four different configurations and fully-equipped with all the basic comforts. Whatever the reason for your stay, Batik Boutique Hotel will make it a good one.";
        $accommodation['photo'] = "https://media-cdn.tripadvisor.com/media/photo-s/01/e2/91/65/front-view-of-the-hotel.jpg";
        $accommodation['url'] = "http://www.batikboutiquehotel.com/";
        $accommodations[] = $accommodation;

        $accommodation = [];
        $accommodation['id'] = 6;
        $accommodation['name'] = "Riverside Majestic Hotel";
        $accommodation['text'] = "Overlooking the Sarawak River, Riverside Majestic Hotel offers views of Kuching Waterfront. Offering rooms with free Wi-Fi, the hotel has an outdoor pool and 4 dining options. The hotel is located beside the Riverside Shopping Complex and is a 20-minute drive from Kuching International Airport. Bako and Kubah National Parks are an hour's drive away. Offering Sarawak River or Kuching City views, contemporary rooms at the Riverside Majestic feature 24-hour room service. They come with a private bathroom and a TV with satellite channels. Tea/coffee making facilities and a minibar are included. Guests can exercise in the fitness centre or play a game of tennis or squash. Alternatively, they can go for a massage or visit the business centre. Café Majestic offers international and local cuisines. River Palace Restaurant & Coca Restaurant serves Chinese dishes and Thai hot pot. Other options include The Club Lobby Lounge and poolside dining at Blue Lagoon.";
        $accommodation['photo'] = "https://media-cdn.tripadvisor.com/media/photo-s/01/b0/4c/6d/hotel-exterior.jpg";
        $accommodation['url'] = "http://www.riversidemajestic.com/";
        $accommodations[] = $accommodation;

        $accommodation = [];
        $accommodation['id'] = 7;
        $accommodation['name'] = "Kuching Waterfront Lodge";
        $accommodation['text'] = "Ideally located on one of the busiest, oldest, and liveliest streets, Main Bazaar, Kuching Waterfront Lodge makes for an ideal place of stay. With the waterfront right at the doorstep, Tua Pek Kong Temple, shopping malls, entertainment districts, and the business hub are right around the corner. The beautifully decorated and comfortably furnished rooms feature air conditioning, a bathroom with a hot and cold shower, TV, and a telephone. With its location in the center of Kuching, Kuching Waterfront Lodge is the place where the old meets the new.";
        $accommodation['photo'] = "http://pix5.agoda.net/hotelimages/248/248220/248220_15072210500032756366.jpg?s=800x600";
        $accommodation['url'] = "http://www.kuchingwaterfrontlodge.com/";
        $accommodations[] = $accommodation;

        $accommodation = [];
        $accommodation['id'] = 8;
        $accommodation['name'] = "Four Points by Sheraton Kuching";
        $accommodation['text'] = "Four Points by Sheraton Kuching is excellently located as they are only 2 km from Kuching International Airport, 15 minutes' drive south of Kuching's city centre, and 5 minutes away from a shopping mall, The Spring. A 100% smoke-free property, all rooms spots contemporary design. All rooms are spacious, clean, comfortable and well equipped with basic amenities to meet every traveller's needs, including high speed Internet access. Facilities available in the hotel include 3 food and beverage outlets, large function rooms, 24 hours business centre, 24 hours fitness centre and an outdoor swimming pool. Four Points by Sheraton Kuching offers free Wi-Fi in all public areas as well as 2 free shuttle services daily.";
        $accommodation['photo'] = "https://www.starwoodhotels.com/pub/media/3277/fpt3277ex.74826_md.jpg";
        $accommodation['url'] = "https://www.starwoodhotels.com/fourpoints/property/overview/index.html?propertyID=3277&language=en_US";
        $accommodations[] = $accommodation;

        $accommodation = [];
        $accommodation['id'] = 9;
        $accommodation['name'] = "Basaga Holiday Residences";
        $accommodation['text'] = "Conveniently located in Kuching on the island of Borneo, this place is famous for their history, culture, and ecotourism. A unique and beautiful property, they feature a tropical ambience unlike any other properties on Kuching. The property sits on a secluded landscape and features 33 well-furnished rooms and suites that have up-to-date amenities. With exclusive room products and a range of services, this is an ideal place of stay for all types of travelers visiting Kuching. Basaga Holiday Residences guarantees a great stay.";
        $accommodation['photo'] = "https://media-cdn.tripadvisor.com/media/photo-s/03/30/6a/20/basaga-holiday-residences.jpg";
        $accommodation['url'] = "http://www.basaga.com/";
        $accommodations[] = $accommodation;

        $text = Lipsum::short()->text(1);
        $text = Lipsum::text();

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
        $attraction['name'] = "Semenggoh Nature Reserve";
        $attraction['text'] = "The Semenggoh Wildlife Centre was established in 1975 to care for wild animals which have either been found injured in the forest, orphaned, or were previously kept as illegal pets. The centre is situated within the boundaries of the Semenggoh Nature Reserve, approximately 24 km from Kuching.The Centre has been a resounding success, caring for almost 1,000 endangered mammals, birds and reptiles from dozens of different species. However it is the orang utan rehabilitation programme that has made the Centre famous. In one respect, Semenggoh has been too successful – so many orang utan have been successfully reintroduced into the surrounding forest reserve that the forest’s carrying capacity has been reached, and rehabilitation activities have been transferred to the Matang Wildlife Centre, part of Kubah National Park";
        $attraction['photo'] = "http://packages.asiatravel.com/packageImage/Tour/AddtlImages/900/Semenggoh%20Orang%20Utan%20Rehabilitation%20Centre%202.jpg";
        $attarction['url'] = "http://www.sarawakforestry.com/htm/snp-nr-semenggoh.html";
        $attractions[] = $attraction;

        $attraction['id'] = 1;
        $attraction['name'] = "Bako National Park";
        $attraction['text'] = "With its rainforest, abundant wildlife, jungle streams, waterfalls, interesting plant life, secluded beaches, panoramic rocky shoreline, bizarre rock formations and extensive network of trekking trails, Bako National Park offers visitors an excellent introduction to the rainforest and coastline of Borneo. Gazetted in 1957, Bako is Sarawak’s oldest national park, covering an area of 2,727 hectares at the tip of the Muara Tebas peninsula. It is one of the smallest national parks in Sarawak, yet one of the most interesting, as it contains almost every type of vegetation found in Borneo. The well-maintained network of nature trails - from easy forest strolls to full-day jungle treks – allows visitors to get the most out of this unique environment.";
        $attraction['photo'] = "http://sarawak.attractionsinmalaysia.com/img/photoState/sarawak/BakoNationalPark/1.jpg";
        $attarction['url'] = "http://www.sarawakforestry.com/htm/snp-np-bako.html";
        $attractions[] = $attraction;

        $attraction['id'] = 2;
        $attraction['name'] = "Sarawak Cultural Village";
        $attraction['text'] = "Known as the 'Living Museum', the Cultural Village was set up to preserve and showcase Sarawak's cultural heritage. Located at Pantai Damai, Santubong, just 32km from the state capital, Kuching, it is the perfect place to get introduced to local culture and lifestyle. Sprawled across 17 acres, there are about 150 people living in the village, demonstrating traditional daily activities from Sarawak's diverse tribes like the processing of sago and the making of handicrafts. They wear traditional costumes and also put on dances for visitors. The village residents provide information on their various traditional cultures and lifestyles. You can see replicas of buildings that represent every major ethnic group in Sarawak; longhouses of the Iban, Bidayuh and Orang Ulu, a Melanau tall-house and a Chinese farm house among others.";
        $attraction['photo'] = "http://www.tourism.gov.my/-/media/Images/Tourism%20Malaysia/Assets/Places/States/sarawak/sarawak-cultural-village/gallery-xlarge-600x400/sarawak-cultural-village-05.ashx";
        $attarction['url'] = "http://www.scv.com.my/main.asp";
        $attractions[] = $attraction;

        $attraction['id'] = 3;
        $attraction['name'] = "Fairy Caves";
        $attraction['text'] = "Fairy Cave and Wind Cave are about 50 min drives from Kuching City. The Fairy Cave is about 3-storey high. After a quick climb through the cave with torchlight, the cave opens up into a main chamber. Sunlight streams into the chamber, enabling you to view the limestone formation of several types. View the beautiful and some eerie shape of nature creations, the stalactites and stalagmites. There is a formation that has been likened to the Goddess of Mercy which at about 3 meters in height resembles a woman dressed in classical Chinese robes, complete with hat, look down benignly upon worshippers";
        $attraction['photo'] = "https://media-cdn.tripadvisor.com/media/photo-s/02/1b/ce/21/fairy-caves.jpg";
        $attarction['url'] = "http://www.visit-malaysia.com/sarawak-tours/fairy-wind-cave.htm";
        $attractions[] = $attraction;

        $attraction['id'] = 4;
        $attraction['name'] = "Mount Santubong";
        $attraction['text'] = "Only 35 minutes drive from Kuching, the Santubong area has a great deal to offer the visitor. It has some superb natural attractions centred on the rainforested slopes of Mount Santubong, its mangrove forests, rivers, near shore waters and mudflats. These different habitats are home to variety of wildlife making Santubong one of the best sites in Sarawak to see a range of wildlife in a natural setting. The Santubong area is one of the best places in Sarawak to see the rare Irrawaddy dolphin, which inhabits rivers, estuaries and shallow coastal areas. On rare occasions finless porpoises and Indo-pacific humpback dolphins are sighted in the waters off Santubong. There are a few interesting coastal villages (kampungs) in the Santubong Peninsula. The most accessible from Damai is Kampung Santubong, a well-kept Malay village at the foot of Mount Santubong.";
        $attraction['photo'] = "http://www.globespots.com/pictures/asia/malaysia/santubong_8081.jpg";
        $attarction['url'] = "http://sarawak.attractionsinmalaysia.com/Santubong.php";
        $attractions[] = $attraction;

        $attraction['id'] = 5;
        $attraction['name'] = "Sarawak Museum";
        $attraction['text'] = "Established in 1891, the excellent Sarawak Museum has a first-rate collection of cultural artefacts and is a must-visit for anyone interested in Borneo's peoples and habitats.";
        $attraction['photo'] = "https://upload.wikimedia.org/wikipedia/commons/4/4c/The_Sarawak_State_Museum,_Kuching,_Malaysia.JPG";
        $attarction['url'] = "http://www.museum.sarawak.gov.my/index.php/en/";
        $attractions[] = $attraction;

        $attraction['id'] = 6;
        $attraction['name'] = "Top Spot Food Court";
        $attraction['text'] = "Rooftop dining is not uncommon for fine dining restaurants and bars. But what about seafood in a hawker setting? Well, in Kuching there’s this place called Top Spot Food Court where half a dozen of restaurants – mostly serving seafood(halal options available) operate on the roof of a 6 storey car park.";
        $attraction['photo'] = "https://farm8.staticflickr.com/7320/10759461094_1bbedacdc1_o.jpg";
        $attarction['url'] = "http://www.tripadvisor.com.my/Restaurant_Review-g298309-d1156781-Reviews-Top_Spot_Food_Court-Kuching_Sarawak.html";
        $attractions[] = $attraction;

        $attraction['id'] = 7;
        $attraction['name'] = "Chong Choon Cafe";
        $attraction['text'] = "At place that you’d never guess it from the picnic tables cooled by a fleet of overhead helicopter fans, but this unassuming, tile-floored cafe serves some of Kuching’s most famously excellent Sarawak laksa.";
        $attraction['photo'] = "https://farm2.static.flickr.com/1378/1475794491_156dfbb9ec_o.jpg";
        $attarction['url'] = "http://www.tripadvisor.com.my/Restaurant_Review-g298309-d1156780-Reviews-Chong_Choon_Cafe-Kuching_Sarawak.html";
        $attractions[] = $attraction;

        $attraction['id'] = 8;
        $attraction['name'] = "Bla Bla Bla";
        $attraction['text'] = "Innovative, chic and stylish, Bla Bla Bla serves Chinese-inspired fusion dishes that – like the decor, the koi ponds and the Balinese Buddha – range from traditional to far-out. Specialities include midin (jungle fern) salad, cashew-nut prawns, ostrich meat stuffed with mozzarella, ‘coffee chicken’ and homemade cheesecake. The generous portions are designed to be shared.";
        $attraction['photo'] = "https://lh4.ggpht.com/-5chWmo4fWvM/UqwXQhR9mEI/AAAAAAAAKQ8/FduaLOwfdLY/DSCF2143%252520%252528Medium%252529_thumb%25255B1%25255D.jpg?imgmax=800";
        $attarction['url'] = "http://www.tripadvisor.com.my/Restaurant_Review-g298309-d1166396-Reviews-Bla_Bla_Bla-Kuching_Sarawak.htm";
        $attractions[] = $attraction;

        $attraction['id'] = 9;
        $attraction['name'] = "Jambu Restaurant and Lounge";
        $attraction['text'] = "Jambu is a unique “one-off” boutique restaurant, housed in one of the “Rajah Brooke” era colonial bungalows. Surrounded by lush gardens, ambient lighting, water features and a private parking area.";
        $attraction['photo'] = "https://media-cdn.tripadvisor.com/media/photo-s/02/4e/ba/16/jambu-bar.jpg";
        $attarction['url'] = "http://www.tripadvisor.com.my/Restaurant_Review-g298309-d1488884-Reviews-Jambu_Restaurant_and_Lounge-Kuching_Sarawak.html";
        $attractions[] = $attraction;

        $text = Lipsum::short()->text(1);
        $text = Lipsum::text();

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
