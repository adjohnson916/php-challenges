<?php

/*
  Write a routine to match individuals from the array people against each other 
  ala Secret Santa.

  Note that no person should be paired with someone they "dislike"
*/

$people = array(
  'Alfie' => array(
    'dislikes' => 'Hannah'
  ),
  'Bob' => array(
    'dislikes' => 'Dave'
  ),
  'Charlotte' => array(
    'dislikes' => 'Edwina'
  ),
  'Dave' => array(
    'dislikes' => 'Fred'
  ),
  'Edwina' => array(
    'dislikes' => 'Bob'
  ),
  'Fred' => array(
    'dislikes' => 'Georgie'
  ),
  'Georgie' => array(
    'dislikes' => 'Alfie'
  ),
  'Hannah' => array(
    'dislikes' => 'Charlotte'
  ),
);

