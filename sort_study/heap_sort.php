<?php
// ヒープの作成のアルゴリズム（ソートするたびに呼び出される）
// ※元の値が書き変わる参照渡しを使用(&$array)
 function make_heap(&$array, $parent_node_index, $max_index){
   // 親のノードの数字と子のインデックスを定義
  $parent_number = $array[$parent_node_index];
  $left_children_node_index = $parent_node_index * 2 + 1;

  // 左の子のインデックスが配列の最大のインデックス以下の場合
  // 以下の処理を繰り返す（まだ並び替える余地がある場合）
  while ($left_children_node_index <= $max_index)  {
    // かつ、同じではなく大きい場合
   if($left_children_node_index < $max_index) {
   // 左右の子を比較した時、右の子の方が大きな数字だった場合
    if($array[$left_children_node_index] < $array[$left_children_node_index + 1]) {
      // 左右のインデックスを入れ替える
      // なんで数字を入れ替えなくていいかは不明
      // 多分、親になったときに下の処理で入れ替わるから。
     $left_children_node_index = $left_children_node_index + 1; 
    }
   }
    // 親のノードの数字より、左の子のノードの数字が大きい場合
   if($parent_number < $array[$left_children_node_index]) {
     // 親子を数字、インデックス共に入れ替える
    $array[$parent_node_index] = $array[$left_children_node_index];
    $parent_node_index = $left_children_node_index;
    $left_children_node_index = 2 * $parent_node_index + 1;
    // ??
   } else {
    $left_children_node_index = $max_index + 1;
   }
  }
  // 配列の親のインデックスの位置に、親の数字を入れる
  $array[$parent_node_index] = $parent_number;
 }


 // ヒープソート
 function heap_sort(&$array) {
  // 親ノードのインデックスは(配列の総数-1)/2で定義することができる
  $parent_node_index = (int)floor((count($array) - 1) / 2);
  // 全ての親の場合を行うため、$parent_node_indexを減らしていく
  for($parent_node_index; $parent_node_index >= 0; $parent_node_index--){
    // 配列の最大のインデックスを第3引数として渡す
    // 理由：make_heapで、最大のインデックスが子ノードのインデックスより小さくなるまで繰り返すから
   $max_index = count($array) - 1;
   make_heap($array, $parent_node_index, $max_index);
  }

  // ノードの入れ替えのアルゴリズム
  for ($last_node_index = (count($array) - 1); $last_node_index >= 1; $last_node_index--) {
   // ??
   $parent_number = $array[0];
   // 配列の先頭は、一番下のノードの数字（根ノード）
   $array[0] = $array[$last_node_index];
   // 配列の最後尾は一番上のノードの数字
   $array[$last_node_index] = $parent_number;
   make_heap($array, 0, $last_node_index - 1);
  }
 }

$array = array(9,8,11,6,4,5,3,2,1);
// 並び替え
heap_sort($array);
// 参照渡しをしているので同じものを出力
print_r($array);
?>
