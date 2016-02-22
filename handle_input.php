<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rib
 * Date: 2/20/2016
 * Time: 3:33 AM
 */
require_once 'includes/constants.php';

echo htmlentities($GLOBALS['_' . METHOD][USER_INPUT_KEY]);
$my_array = json_decode(urldecode($GLOBALS['_' . METHOD][USER_INPUT_KEY]), TRUE);
echo '<pre>';
echo $GLOBALS['_' . METHOD][USER_INPUT_KEY] . '<br>';
print_r($my_array);
echo '</pre>';