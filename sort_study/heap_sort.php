<?php
// ヒープの作成
// 元の値が書き変わる参照渡しを使用(&$array)
 function make_heap(&$array, $i, $t){
  $tmp_var = $array[$i];
  // ? iは多分親のノードの番号jは子
  $j = $i * 2 + 1;

  while ($j <= $t)  {
   if($j < $t)
    if($array[$j] < $array[$j + 1]) {
     $j = $j + 1; 
    }
   if($tmp_var < $array[$j]) {
    $array[$i] = $array[$j];
    $i = $j;
    $j = 2 * $i + 1;
   } else {
    $j = $t + 1;
   }
  }
  $array[$i] = $tmp_var;
 }

 function heap_sort(&$array) {
  //This will heapify the array
  // 整数に変換
  $init = (int)floor((count($array) - 1) / 2);
  // $iの初期値は、arrayの-1して/2した整数回数
  // make_heapを繰り返すことで?
  for($i=$init; $i >= 0; $i--){
   $count = count($array) - 1;
   make_heap($array, $i, $count);
  }

  // ノードの入れ替え
  for ($i = (count($array) - 1); $i >= 1; $i--)  {
   $tmp_var = $array[0];
   $array [0] = $array [$i];
   $array [$i] = $tmp_var;
   make_heap($array, 0, $i - 1);
  }
 }

$array = array(9,8,7,6,4,5,3,2,1);
heap_sort($array);
print_r($array);
?>
