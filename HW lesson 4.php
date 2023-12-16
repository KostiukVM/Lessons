<?php

class Animals
{
    function Nickname()
    {
        echo "I have nickname" . PHP_EOL;
    }

    function say()
    {
        echo "I can say" . PHP_EOL;
    }
}

class Lion extends Animals
{
    function property()
    {
        echo "I can hunt" . PHP_EOL;
    }

    function say()
    {
        echo 'I say \'roar\'' . PHP_EOL;
        echo PHP_EOL;
    }
}
class monkey extends Animals
{
    function property()
    {
        echo "I eat banana" . PHP_EOL;
    }
    function say()
    {
        echo 'I say \'Aa a a\'' . PHP_EOL;
        echo PHP_EOL;
    }
}

class Mammoth extends Animals
{
    function property()
    {
        echo "I have a trunk" . PHP_EOL;
    }

    function say()
    {
        echo 'I say \'fzfzfz\'' . PHP_EOL;
        echo PHP_EOL;
    }
}
class Shark extends Animals
{
  function property()
  {
      echo "I can swim" . PHP_EOL;
  }

    function say()
    {
        echo 'I can not speak' . PHP_EOL;
        echo PHP_EOL;
    }
}

$Lion    = new Lion;
$monkey  = new monkey;
$mammoth = new mammoth;
$shark   = new Shark;

$Lion -> Nickname();
$Lion -> property();
$Lion -> say();

$monkey -> Nickname();
$monkey -> property();
$monkey -> say();

$mammoth -> Nickname();
$mammoth -> property();
$mammoth -> say();

$shark -> Nickname();
$shark -> property();
$shark -> say();
