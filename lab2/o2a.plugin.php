<?php

function o2a_autochange($text) {
    // If we'll use regular expressions we are able to use preg_replace function
    return str_replace("o", "a", $text);
}