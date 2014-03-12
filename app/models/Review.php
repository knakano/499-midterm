<?php
/**
 * Created by PhpStorm.
 * User: kalynnakano
 * Date: 3/11/14
 * Time: 6:33 PM
 */

class Review extends Eloquent{


    public function restaurant() {
        return $this->belongsTo('Restaurant');
    }

    public static function getReviewsForRestaurant($id) {
        $query = DB::table('reviews')
            ->select('restaurant_id', 'review_description', 'rating')
            ->where('restaurant_id', '=', $id);

        $reviews = $query->get();
        return $reviews;

    }

} 