<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sai
 * Date: 2/23/2016
 * Time: 9:26 PM
 */

header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");

require_once('includes/poker_constants.php');
require_once('includes/poker_code.php');

$deck = make_deck();
$hand = deal($deck);

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
<?php output_form($hand, $deck); ?>
</body>
</html>
