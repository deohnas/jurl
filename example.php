<?php

require 'src/jurl.php';

$response = jurl_post('http://localhost/jurl/helloworld.php');

var_dump($response);

$response = jurl_get('http://localhost/jurl/helloworld.php');

var_dump($response);