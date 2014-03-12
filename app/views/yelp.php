<?php
/**
 * Created by PhpStorm.
 * User: kalynnakano
 * Date: 3/11/14
 * Time: 6:00 PM
 */ ?>


<!doctype html>
<html>
<head>
    <title>Yelp</title>
    <link rel="stylesheet" href="<?php echo asset('css/foundation.css')?>" type="text/css">
</head>
<body>
<div class="row" style="padding-top:50px">
    <h1>Yelp</h1>
    <div class="small-12 large-12 small-centered large-centered columns" style="padding-top:50px">
        <?php foreach ($restaurants as $restaurant): ?>
            <div class="restaurant" style="border-bottom: 1px #ccc solid; margin-bottom:20px;">
                <h3><?php echo $restaurant->restaurant_name; ?> (<?php echo $restaurant->city; ?>)</h3>
                <p><?php echo $restaurant->type; ?></p>
                <?php if ($restaurant->facebook_page) : ?>
                    <p>Facebook page: <a href="http://www.facebook.com/<?php echo $restaurant->facebook_page; ?>" target="_new">here</a></p>
                <?php else: ?>
                    <p>Not on Facebook</p>
                <?php endif; ?>
                <p><a href="restaurants/<?php echo $restaurant->id; ?>/reviews">View Reviews</a></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>