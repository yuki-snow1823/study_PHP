<?php
$numbers = array(1,3,5,4,2);
// 選択ソート

// 出力
var_dump(selection_sort($numbers));

function selection_sort($array)
{
  for($i = 0; $i < count($array); $i++)
  {
    $temp_minimum_number = $array[$i-1];
    $first_number_position = $i;
    
    for($j = 0; $j < count($array); $j++)
    {
      if($temp_minimum_number > $array[$j])
      {
        $temp_minimum_number = $array[$j];
        $first_number_position = $j;
      }
    }
    $temp_number = $array[$first_number_position];
    $array[$first_number_position] = $array[$j];
    $array[$j] = $temp_number;
    }
    return $array;
}
