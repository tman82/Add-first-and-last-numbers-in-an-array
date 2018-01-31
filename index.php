<?
// reusable

$numbers = [2, 9, 4, 3];

function getNumbers($list) {
  return count($list);
}

function getFirstNumber($arr) {
  $firstItem = $arr[0];
  return $firstItem;
}

function getLastNumber($arr) {
  $lastItem = array_slice($arr, -1)[0];
  return $lastItem;
}

function addFirstAndLast($arr, $first, $last) {
  $getFirst = $first($arr);
  $getLast = $last($arr);
  return $getFirst + $getLast;
}

addFirstAndLast($numbers, getFirstNumber, getLastNumber);
