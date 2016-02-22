<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rib
 * Date: 2/20/2016
 * Time: 3:25 AM
 */

function output_form($method, $action)
{
    echo "<form method='{$method}' action='{$action}'>\n";
//    echo "     <input type='text' name='" . USER_INPUT_KEY . "'>\n";
    echo "     <input type='hidden' name='" . USER_INPUT_KEY . "' value='" .
    urlencode(json_encode(MY_FRUITS)) . "'>\n";
    echo "     <input type='submit' value='SUBMIT'>\n";
    echo "</form>";
}