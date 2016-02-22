<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rib
 * Date: 2/21/2016
 * Time: 9:25 PM
 */

header('Content-type: text/javascript');
require_once('poker_constants.php');
?>

function centerContent(){
    var content = document.getElementById('content');
    var windowHeight = window.innerHeight;
    var contentHeight = parseInt(window.getComputedStyle(content).height);
    var offset = (windowHeight - contentHeight) / 2;
    var spacer = document.getElementById('spacer');
    spacer.style.height = offset + 'px';
}

function init() {
    window.addEventListener('resize', function() {
        centerContent();
    });
    centerContent();
}
