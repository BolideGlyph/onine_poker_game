<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rib
 * Date: 2/21/2016
 * Time: 9:23 PM
 */

/**
 *  Style info
 */

const CARD_IMAGE_PERCENT = '95%';
const HAND_PADDING = '9px';
const POKER_FONT = <<<POKER
    font-family: Bell MT, Calibri, sans-serif;
    padding: 10px 15px 10px 15px ;
    font-size: 3em;

POKER;

/**
 * path and filename consts
 */

const IMAGES = 'images/';
const INCLUDES = 'includes/';
const CARD_BACK = IMAGES . 'back.png';
const CARD_BLANK = IMAGES . 'blank.png';

/**
 *  ID constants
 */

const CARD_CLASS = 'card_img';
const CARD_ID = 'data-id';
const CARD_SRC = 'data-src';

/**
 * Form Constants
 */

const HAND_KEY = 'hand';
const DECK_KEY = 'deck';
const CARD_KEY = 'card';
const KEEP = 'keep';
const DRAW = 'draw';

/**
 * Card - [rank, suit]
 *      rank is a number from 0 - 12 (A, 2, 3,.... jack, queen, king)
 *      suit is a numbner 0 - 3 (clubs, diamonds, hearts, spades)
 *
 */

const RANK_FIELD = 0;
const SUIT_FIELD = 1;

const RANK_COUNT = 13;
const SUIT_COUNT = 4;

const RANK_NAMES = [
    'ace',
    '2',
    '3',
    '4',
    '5',
    '6',
    '7',
    '8',
    '9',
    '10',
    'jack',
    'queen',
    'king'
];

const SUIT_NAMES = [
    'clubs',
    'diamonds',
    'hearts',
    'spades'
];

/**
 * Hand constants
 */

const HAND_CARDS = 20;

const NOTHING = "No Pair";
const PAIR_JACKS = "One Pair, Jacks or Better";
const LOW_PAIR = "One Pair, Less than Jacks";
const TWO_PAIR = "Two Pairs";
const TRIPS = "Three of a kind";
const STRAIGHT = "Straight";
const FLUSH = "Flush";
const FULL_HOUSE = "Full House";
const QUADS = "Four of a Kind";
const STRAIGHT_FLUSH = "Straight Flush";
const ROYAL_FLUSH = "Royal Flush";

const PAYOFFS = [
    NOTHING => 0,
    PAIR_JACKS => 1,
    LOW_PAIR => 0,
    TWO_PAIR => 2,
    TRIPS => 3,
    STRAIGHT => 4,
    FLUSH => 6,
    FULL_HOUSE => 9,
    QUADS => 25,
    STRAIGHT_FLUSH => 50,
    ROYAL_FLUSH => 800
];
