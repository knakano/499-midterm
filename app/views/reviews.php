<?php
/**
 * Created by PhpStorm.
 * User: kalynnakano
 * Date: 3/11/14
 * Time: 6:43 PM
 */ ?>


<!doctype html>
<html>
<head>
    <title>Reviews</title>
    <link rel="stylesheet" href="<?php echo asset('css/foundation.css')?>" type="text/css">
</head>
<body>
<div class="row" style="padding-top:50px">
    <h1>Yelp</h1>
    <h2 style="padding-top:30px">Reviews for <?php echo $restaurant->restaurant_name; ?></h2>
    <?php if ($fb): ?>
    <div style="border-bottom: 1px #ccc solid;">
        <h3 style="padding-top:30px;">Facebook Activity</h3>
        <ul>
            <li>Likes: <?php echo $fb->likes; ?></li>
            <li>Checkins: <?php echo $fb->checkins; ?></li>
        </ul>
    </div>
    <?php endif ?>
    <div class="small-12 large-12 small-centered large-centered columns">
        <?php foreach ($reviews as $review): ?>
            <div class="review" style="border-bottom: 1px #ccc solid; padding-top: 20px;">

                <p><?php for ($i = 1; $i <= $review->rating; $i++) : ?>
                        <img src="<?php echo asset('images/star.png')?>" width="20px">
                   <?php endfor ?>
                </p>
                <p><?php echo $review->review_description; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>