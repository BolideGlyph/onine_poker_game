<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rib
 * Date: 2/22/2016
 * Time: 11:24 PM
 */

require_once ('includes/poker_constants.php');
require_once ('includes/poker_code.php');

$deck = json_decode(urldecode($_POST[DECK_KEY]));
$hand = json_decode(urldecode($_POST[HAND_KEY]));

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Video Poker</title>
    <link rel="stylesheet" type="text/css" href="includes/poker.css.php">
    <script src="includes/poker.js.php"></script>
</head>
<body onload="javascript:init();">
<div id="spacer"></div>
<?php show_content($hand); ?>

</body>
</html>
