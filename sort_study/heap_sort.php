<?php
// ヒープの作成？
// 元の値が書き変わる参照渡しを使用(&$array)
 function make_heap(&$array, $parent_node_index, $t){
   // 親のノードの数字と子のインデックスを定義
  $parent_number = $array[$parent_node_index];
  $left_children_node_index = $parent_node_index * 2 + 1;

  //
  while ($left_children_node_index <= $t)  {
    // 同じではなく大きい場合
   if($left_children_node_index < $t)
   // 左右の子を比較した時、右の子の方が大きな数字だった場合
    if($array[$left_children_node_index] < $array[$left_children_node_index + 1]) {
      // 左右を入れ替える
     $left_children_node_index = $left_children_node_index + 1; 
    }
    // 親のノードの数字より、左の子のノードの数字が大きい場合
   if($parent_number < $array[$left_children_node_index]) {
     // 親子を数字、インデックス共に入れ替える
    $array[$parent_node_index] = $array[$left_children_node_index];
    $parent_node_index = $left_children_node_index;
    $left_children_node_index = 2 * $parent_node_index + 1;
    // 
   } else {
    $left_children_node_index = $t + 1;
   }
  }
  // 配列の親のインデックスの位置に、親の数字を入れる
  $array[$parent_node_index] = $parent_number;
 }

 function heap_sort(&$array) {

  // 配列をヒープにするアルゴリズム？
  // 親ノードのインデックスは(配列の総数-1)/2で表すことができる
  $parent_node_index = (int)floor((count($array) - 1) / 2);
  // 全ての親の場合を行うため、$parent_node_indexを減らしていく
  for($parent_node_index; $parent_node_index >= 0; $parent_node_index--){
   $count = count($array) - 1;
   make_heap($array, $i, $count);
  }

  // ノードの入れ替え
  for ($i = (count($array) - 1); $i >= 1; $i--)  {
   $parent_number = $array[0];
   $array [0] = $array [$i];
   $array [$i] = $parent_number;
   make_heap($array, 0, $i - 1);
  }
 }

$array = array(9,8,7,6,4,5,3,2,1);
heap_sort($array);
print_r($array);
?>
