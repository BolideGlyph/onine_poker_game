<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rib
 * Date: 2/21/2016
 * Time: 9:23 PM
 */

header('Content-Type: text/css');
require_once('poker_constants.php');


 ?>

.card_img {
    max-width: <?php echo CARD_IMAGE_PERCENT ?>;
    max-height: <?php echo CARD_IMAGE_PERCENT ?>;
    cursor: pointer;
}

.card {
    text-align: center;
    display: inline-block;
    max-width: <?php echo 100 / HAND_CARDS; ?>%;
    max-height: 100%;
}

#hand {
    font-size: 0px;
    padding: <?php echo HAND_PADDING; ?>
}
#info {
    text-align: center;
    padding: <?php echo HAND_PADDING; ?>
}
#draw_button {
    background-color: darkorange;
    color: #c8ff8d;
    font-family: Bell MT, Calibri, sans-serif;
    padding: 10px 15px 10px 15px ;
    font-size: 3em;
    border-radius: 10px;
    cursor: pointer;
}
