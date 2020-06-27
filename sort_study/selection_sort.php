<?php
$numbers = array(1,3,5,4,2);
// 選択ソート

// 出力
var_dump(selection_sort($numbers));

function selection_sort($array)
{
  $temp_minimum_number = min($array);
    for($i = 0; $i <= count($array); $i++)
    {
      if($array[$i-1] > $minimum_number)
      {
        $array[$i] = $minimum_number;
      }
    }    // return $array;
}
