<?php


$name = ['cat', 'dog', 'fox', 'goat', 'chicken'];

//$nametest = 'butterfly';

function greeting($nametest) {
    echo '<p>Hello, my name is'.$nametest.'</p>';

}

greeting();
greeting();
greeting();
// <p>Hello, my name is cat.</p>
// <p>Hello, my name is dog.</p>
// <p>Hello, my name is fox.</p>
// <p>Hello, my name is goat.</p>
// <p>Hello, my name is cat.</p>
// <p>Hello, my name is chicken.</p>
