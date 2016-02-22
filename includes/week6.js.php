<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rib
 * Date: 2/21/2016
 * Time: 12:59 AM
 */

header('Content-Type: text/javascript');
require_once 'constants.php';
?>

function init() {
    var MY_STRING = '<?php echo HELLO_STRING; ?>';
    document.getElementById('my_div').innerText = MY_STRING;
}
