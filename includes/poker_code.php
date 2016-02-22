<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rib
 * Date: 2/21/2016
 * Time: 9:26 PM
 */

function make_deck()
{
    $deck = [];
    for($rank = 0; $rank < RANK_COUNT; $rank++){
        for($suit = 0; $suit < SUIT_COUNT; $suit++){
            $deck[] = [$rank, $suit];
        }
    }
    shuffle($deck);
    return($deck);
}

function deal(&$deck)
{
    $hand = array_slice($deck, 0, HAND_CARDS);
    $deck = array_slice($deck, HAND_CARDS);
    return $hand;
}

function card_name($card)
{
    return IMAGES . RANK_NAMES[$card[RANK_FIELD]] . '_of_' . SUIT_NAMES[$card[SUIT_FIELD]] . '.png';
}

function show_card($card)
{
    echo '        <div class="card">' . "\n";
    echo '           <img class="card_img" src="' . card_name($card) . '">' ."\n";
    echo '        </div>';
}

function show_hand($hand)
{
    echo '    <div id="hand">' . "\n";
    foreach($hand as $card){
        show_card($card);
    }
    echo '    </div>' . "\n";
}

function show_content($hand)
{
    echo '<div id="content">' . "\n";
    show_hand($hand);
    echo '</div>' . "\n";
}