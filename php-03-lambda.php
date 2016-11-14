<?php

/*

	PHP Challenge 03

	Create a lambda to recursively remove empty elements from the array $raw

*/

$raw = array(
    'firstname' => 'Joe',
    'lastname'  => 'Bloggs',
    'nickname' => '',
    'birthdate' => array(
        'day'   => '',
        'month' => '',
        'year'  => '1990',
    ),
    'likes' => array(
        'cars'  => array(
        	'Subaru Impreza WRX STi',
        	'Mitsubishi Evo', 'Nissan GTR'
        ),
        'bikes' => array(),
    ),
);

$lambda = function ($v) use (&$lambda) {
  if (is_array($v)) return array_filter($v, $lambda);
  if (!empty($v)) return true;
  return false;
};

$filtered = array_filter($raw, $lambda);
var_dump($filtered);
