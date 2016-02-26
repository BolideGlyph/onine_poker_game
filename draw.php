<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sai
 * Date: 2/22/2016
 * Time: 11:24 PM
 */

require_once ('includes/poker_constants.php');
require_once ('includes/poker_code.php');
require_once ('includes/hand_type.php');

$deck = json_decode(urldecode($_POST[DECK_KEY]));
$hand = json_decode(urldecode($_POST[HAND_KEY]));

draw_cards($hand, $deck);

//$hand = [[0, 0], [1,0], [2, 0], [3, 0], [4, 0]];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Video Poker</title>
    <link rel="stylesheet" type="text/css" href="includes/poker.css.php">
    <script src="includes/poker.js.php"></script>
</head>
<body onload="javascript:init(true);">
<div id="spacer"></div>
<?php show_content($hand, TRUE); ?>

</body>
</html>
