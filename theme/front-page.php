<?php
/* Template Name: Homepage */


$events = get_posts(array('post_type' => 'event', 'numberposts' => 5, 'order' => 'ASC'));

view(['events' => $events]);
