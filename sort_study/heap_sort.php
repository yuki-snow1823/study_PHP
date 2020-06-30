<?php
// １回だけヒープを作成するアルゴリズム（ソートするたびに呼び出される）
// ※元の値が書き変わる参照渡しを使用(&$array)
function make_heap(&$array, $parent_node_index, $last_node_index){
  // 親のノードの数字と子のインデックスを定義
  $parent_number = $array[$parent_node_index];
  $left_children_node_index = $parent_node_index * 2 + 1;

  // 左の子のインデックスが配列の最大のインデックス以下の場合
  // 以下の処理を繰り返す（まだ並び替える余地がある場合）
  while ($left_children_node_index <= $last_node_index)  {
    // かつ、同じではなく大きい場合
   if($left_children_node_index < $last_node_index) {
   // 左右の子を比較した時、右の子の方が大きな数字だった場合
    if($array[$left_children_node_index] < $array[$left_children_node_index + 1]) {
      // 左右のインデックスを入れ替える
      // 多分、親になったときに下の処理で入れ替わるから、数字の入れ替えは不要。
     $left_children_node_index = $left_children_node_index + 1; 
    }
   }
    // 親のノードの数字より、左の子のノードの数字が大きい場合
   if($parent_number < $array[$left_children_node_index]) {
    // 親子を数字、インデックス共に入れ替える
    $array[$parent_node_index] = $array[$left_children_node_index];
    $parent_node_index = $left_children_node_index;
    $left_children_node_index = 2 * $parent_node_index + 1;
    // 親のノードの数字が子のノードの数字より大きい場合（正しい場合）
   } else {
    // ★子ノードのインデックスに、-1した分を足している
    // 例えば、最後の繰り返しで$last_node_indexが-1の時に、ちゃんとインデックスが0になってくれる
    $left_children_node_index = $last_node_index + 1;
   }
  }
  // 配列の親のインデックスの位置に、親の数字を入れる
  // これで元の配列の値が変わる（後ろから数字が入っていく）
  $array[$parent_node_index] = $parent_number;
 }


 // ヒープソート
 function heap_sort(&$array) {
  // 親ノードのインデックスは(配列の総数-1)/2で定義することができる
  $parent_node_index = (int)floor((count($array) - 1) / 2);
  // 全ての親の場合を行うため、$parent_node_indexを減らしていく
  // まず、ヒープを作る！
  for($parent_node_index; $parent_node_index >= 0; $parent_node_index--){
   // 配列の最大のインデックスを第3引数として渡す
   // 理由：make_heapで、最大のインデックスが子ノードのインデックスより小さくなるまで繰り返せばヒープができるから
   $max_index = count($array) - 1;
   make_heap($array, $parent_node_index, $max_index);
  }

  // ノードの入れ替えのアルゴリズム（ここでの$arrayはヒープ）
  for($max_node_index = (count($array) - 1); $max_node_index >= 1; $max_node_index--) {
   // 一時避難
   $temp_number = $array[0];
   // ヒープの先頭に一番下のノードの数字（根ノード）を一旦入れる
   $array[0] = $array[$max_node_index];
   // ヒープの最後尾に一番上のノードの数字を一旦入れる
   $array[$max_node_index] = $temp_number;
   // ヒープを動かしたので、それに応じてヒープを再構築させる
   // -1は根ノードが1個減らすことを表している。★の部分の処理に必要。
   make_heap($array, 0, $max_node_index - 1);
  }
 }

$array = array(9,8,11,6,4,5,3,2,1);
// 並び替え
heap_sort($array);
// 参照渡しをしているので同じものを出力
print_r($array);
?>
