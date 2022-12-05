<?php

function removeSpaces(string $stringWithSpaces) : string {
    return str_replace(" ", "", $stringWithSpaces);
}

function splitOnNewLine(string $inputString) : array {
    return preg_split("/\r\n|\n|\r/", $inputString);
}

function validateData(string $inputString) : string {
  $inputString = trim($inputString);
  $inputString = stripslashes($inputString);
  $inputString = htmlspecialchars($inputString);
  return $inputString;
}
