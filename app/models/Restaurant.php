<?php
/**
 * Created by PhpStorm.
 * User: kalynnakano
 * Date: 3/11/14
 * Time: 6:10 PM
 */

class Restaurant extends Eloquent{
    protected $table = 'restaurants';

    public function review(){
        return $this->hasMany('Review');
    }

    public static function getFacebookInfo($id) {

        $fbpage = new \Yelp\Facebook\FacebookPage();
        //$id = Restaurant::get('id');
        $json = $fbpage->get($id);

        return $json;

    }



}