<?php
$numbers = array(1,3,5,4,2);
// 挿入ソート

// 出力
var_dump(bubble_sort($numbers));

function insertion_sort($array)
{
    for($i = 1; $i < count($array)-1; $i++)
    {
      $new_number = $array[$i];
      $old_number_position = $i - 1;

      while($old_number_position > 0){
        
      }
    }
    return $array;
}
