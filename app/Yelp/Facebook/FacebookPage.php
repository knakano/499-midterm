<?php
/**
 * Created by PhpStorm.
 * User: kalynnakano
 * Date: 3/11/14
 * Time: 6:55 PM
 */

namespace Yelp\Facebook;


class FacebookPage {
    public function get($page_id) {

        $endpoint = "http://graph.facebook.com/" . $page_id;
        $json = file_get_contents($endpoint);
        return json_decode($json);
    }
} 