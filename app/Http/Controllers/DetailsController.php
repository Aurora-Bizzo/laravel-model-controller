<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\comics;

class DetailsController extends Controller
{
    public function index(){

        $comics = comics::all();
    
        $menu = [
            'CHARACTERS' => '/characters',
            'COMICS' => '/comics',
            'MOVIES' => '/movies',
            'TV' => '/tv',
            'GAMES' => '/games',
            'COLLECTIBLES' => '/collectibles',
            'VIDEOS' => '/videos',
            'FANS' => '/fans',
            'NEWS' => '/news',
            'SHOP' => '/shop'
        ];
    
        $dc_comics_footer = [
            'Characters' => '/characters', 
            'Comics' => '/comics', 
            'Movies' => '/movies', 
            'TV' => '/tv', 
            'Games' => '/games', 
            'Videos' => '/videos', 
            'News' => '/news', 
        ];
    
        $shop_footer = [
            'Shop DC' => '/shop_dc', 
            'Shop DC Collectibles' => '/shop_dc_collectibles',
        ];
    
        $dc_footer = [
            'Terms Of Use' => '/terms_of_use',
            'Privacy policy (New)' => '/privacy_policy',
            'Ad Choices' => '/ad_choices', 
            'Advertising' => '/advetising', 
            'Jobs' => '/jobs', 
            'Subscription' => '/subscription', 
            'Talent Workshop' => '/talent_workshop', 
            'CPSC Certificates' => '/cpsc_certificates', 
            'Ratings' => '/ratings', 
            'Shop Help' => '/shop_help', 
            'Contact Us' => '/contact_us'
        ];
    
        $sites_footer = [
            'DC' => '/dc',
            'MAD Magazine' => '/mad_magazine',
            'DC Kids' => '/dc_kids',
            'DC Universe' => '/dc_universe',
            'DC Power Visa' => '/dc_power_visa',
        ];
    
        return view('details', compact('menu','dc_comics_footer','shop_footer','dc_footer','sites_footer', 'comics'));
        }
}
