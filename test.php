<?php
require "Debugger.php";

$myarray = array(

    // Default key for each will
    // start from 0
    array("Ankit", "Ram", "Shyam"),
    array("Unnao", "Trichy", "Kanpur")
);

\LexSystems\Debugger::var_dump($myarray,'My Array');