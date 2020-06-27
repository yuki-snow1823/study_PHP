<?php
$numbers = array(1,3,5,4,2,6);
// 挿入ソート

// 出力
var_dump(insertion_sort($numbers));

function insertion_sort($array)
{
    for($i = 1; $i < count($array); $i++)
    {
      $new_number = $array[$i];
      $old_number_position = $i - 1;

      while($old_number_position > 0){
        if($new_number < $array[$old_number_position]) {
          $temp_number = $array[$old_number_position];
          $array[$old_number_position] = $array[$old_number_position + 1];
          $array[$old_number_position + 1] = $temp_number;
        }
        $old_number_position -= 1;
        print_r($array);
      }
    }
    return $array;
}
