<?php
// This creates a case-sensitive constant
define("OCEAN", 'Ocean', true);
echo OCEAN, "\n";

// This creates a case-insensitive constant
define("hello", "love", false);
echo hello;

// Use Constant
define("WELCOME", "Hello World!!!");
echo WELCOME, "\n";
echo constant("WELCOME");


// Use func GLOBAL CONSTANT
define("NICE", "GLOBAL");

function testGlobal(): void
{
    echo NICE;
}

testGlobal();