<?php

function y2e_autochange($text) {
    // If we'll use regular expressions we are able to use preg_replace function
    return str_replace("y", "e", $text);
}