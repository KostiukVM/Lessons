<?php

class Animals
{
    function Nickname()
    {
        echo "I have nickname".PHP_EOL;
    }
    function say()
    {
        echo "I can say".PHP_EOL;
    }
}

class Lion extends Animals
{
    function property()
    {
        echo "I can hunt".PHP_EOL;
    }
    function say()
    {
        echo 'I say \'roar\''.PHP_EOL;
    }
}