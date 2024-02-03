<?php

require_once "../Model/todolist.php";
require_once "../Helper/input.php";
require_once "../BusinessLogic/addtodolist.php";

function viewaddtodolist(){
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") echo "batal menambah todo" . PHP_EOL;
    else addtodolist($todo);

}