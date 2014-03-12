<?php
/**
 * Created by PhpStorm.
 * User: kalynnakano
 * Date: 3/11/14
 * Time: 6:07 PM
 */

class YelpController extends BaseController {

    public function listRestaurants() {
        $query = DB::table('restaurants')
            ->select('id', 'restaurant_name', 'type', 'city', 'facebook_page');
        $restaurants = $query->get();
        return View::make('yelp', [
            'restaurants' => $restaurants
        ]);
    }

}