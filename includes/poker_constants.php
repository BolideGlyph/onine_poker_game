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

const HAND_CARDS = 5;
