<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $comics = config('db_comics.fumetti');

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

    return view('comics', compact('menu','dc_comics_footer','shop_footer','dc_footer','sites_footer', 'comics'));
});



Route::get('/comics/{param}', function ($param) {

    $comics = config('db_comics.fumetti');
    
    foreach($comics as $key => $item){
        if($key == $param){
            $comic_detail = $item;
        }
    }

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

    return view('details', compact('comic_detail','menu','dc_comics_footer','shop_footer','dc_footer','sites_footer', 'comics'));
});