<?php
// ヒープの作成
// 元の値が書き変わる参照渡しを使用(&$array)
 function make_heap(&$array, $i, $t){
   // まずは適当に入れたものを並び替える
  $tmp_var = $array[$i];
  // ? iは多分親のノードの番号jは子、いや、iが子かも
  // イメージ：三角形を見て、比較する感じか
  // まず、親と子を比較、で、もし下が小さければ、次に子を見て左右の大きい方を親にする
  // https://www.youtube.com/watch?v=X0ESspSiLIc 2:31
  // で、数列に入れたら、ヒープの修正をする感じ
  $j = $i * 2 + 1;

  while ($j <= $t)  {
   if($j < $t)
   // 理解：二つの親を比較した時、右の親の方が大きな数字だった場合
    if($array[$j] < $array[$j + 1]) {
      // 左右を入れ替える？
     $j = $j + 1; 
    }
    // 子の要素の数字より、親要素の数字が大きかった場合(ダメなの？)
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
