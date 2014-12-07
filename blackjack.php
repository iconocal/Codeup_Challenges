<?php

// complete all "todo"s to build a blackjack game

// create an array for suits
$suits = ['C', 'H', 'S', 'D'];

// create an array for cards
$cards = [1 => 'A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];



// Defined Function: buildDeck()
// build a deck (array) of cards
// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it
function buildDeck($suits, $cards) {
	$deck = array();
	foreach ($suits as $suit) {
		foreach ($cards as $card) {
			$deck[] = $card . " " . $suit;
		}
	}
	shuffle($deck);
	return $deck;
}



// //  Defined Function: cardIsAce() //
// //  determine if a card is a ace //
// //  return BOOL true or false   //
function cardIsAce($card) {
	if (strstr($card, "A")) {
   		return true;
	} else {
   		return false;
	}
}

// Defined Function: getCardValue()
// determine the value of an individual card (string)
function getCardValue($card) {
  $value = 0;
  $valueArray = explode(" ", $card);
  $face = array_shift($valueArray);
  switch ($face) {
  	case 'A':
  		$value = 11;
  		break;
	case '2':
		$value = 2;
		break;
  	case '3':
		$value = 3;
		break;
	case '4':
		$value = 4;
		break;
	case '5':
		$value = 5;
		break;
	case '6':
		$value = 6;
		break;
	case '7':
		$value = 7;
		break;
	case '8':
		$value = 8;
		break;
	case '9':
		$value = 9;
		break;
	case '10':
		$value = 10;
		break;
  	default:
  		$value = 10;
  		break;
  }
 
  return $value;
}

// // get total value for a hand of cards
// // don't forget to factor in aces
// // aces can be 1 or 11 (make them 1 if total value is over 21)
// function getHandTotal($hand) {
//   // todo
// }

// // draw a card from the deck into a hand
// // pass by reference (both hand and deck passed in are modified)
// function drawCard(&$hand, &$deck) {
//   // todo
// }
// // print out a hand of cards
// // name is the name of the player
// // hidden is to initially show only first card of hand (for dealer)
// // output should look like this:
// // Dealer: [4 C] [???] Total: ???
// // or:
// // Player: [J D] [2 D] Total: 12
// function echoHand($hand, $name, $hidden = false) {
//   // todo
// }

// build the deck of cards
$deck = buildDeck($suits, $cards);

// print_r($deck);


$testcard = array_shift($deck);

echo $testcard . PHP_EOL;

echo (getCardValue($testcard)) . PHP_EOL;

// echo var_dump(cardIsAce($testcard)) . PHP_EOL;



// // initialize a dealer and player hand
// $dealer = [];
// $player = [];

// // dealer and player each draw two cards
// // todo
// // echo the dealer hand, only showing the first card
// // todo
// // echo the player hand
// // todo
// // allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay
// while (todo) {
//   // todo
// }

// // show the dealer's hand (all cards)
// // todo
// // todo (all comments below)
// // at this point, if the player has more than 21, tell them they busted
// // otherwise, if they have 21, tell them they won (regardless of dealer hand)
// // if neither of the above are true, then the dealer needs to draw more cards
// // dealer draws until their hand has a value of at least 17
// // show the dealer hand each time they draw a card
// // finally, we can check and see who won
// // by this point, if dealer has busted, then player automatically wins
// // if player and dealer tie, it is a "push"
// // if dealer has more than player, dealer wins, otherwise, player wins