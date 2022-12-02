<?php

function removeSpaces(string $stringWithSpaces) : string {
    return str_replace(" ", "", $stringWithSpaces);
}

function splitOnNewLine(string $inputString) : array {
    return preg_split("/\r\n|\n|\r/", $inputString);
}
