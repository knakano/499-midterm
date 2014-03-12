<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//
//Route::get('/', function()
//{
//	return View::make('yelp');
//});

Route::get('/', 'YelpController@listRestaurants');

Route::get('restaurants/{id}/reviews', function($id){
    $reviews = Review::getReviewsForRestaurant($id);
    $restaurant = Restaurant::find($id);
    if ($restaurant->facebook_page) {
        $fb = Restaurant::getFacebookInfo($restaurant->facebook_page);
    }
    else {
        $fb = NULL;
    }

    return View::make('reviews', [
        'reviews' => $reviews,
        'restaurant' => $restaurant,
        'fb' => $fb
    ]);

});
