<?php
$numbers = array(1,3,5,4,2);
// 選択ソート

// 出力
var_dump(selection_sort($numbers));

function selection_sort($array)
{
  // 最後に残る一個は比較するものがないから、総数-1回数行う
  for($i = 0; $i < count($array)-1; $i++)
  {
    // 一時的に先頭を暫定の最小値と設定
    $temp_minimum_number = $array[$i];
    // 先頭の位置を保存
    $temp_minimum_number_position = $i;
    
    // 【最小値比較のアルゴリズム】
    // 残っている要素と現在の数字を比較
    for($j = $i+1; $j < count($array); $j++)
    {
      if($temp_minimum_number > $array[$j])
      {
        // 暫定の最小値とその位置を更新
        $temp_minimum_number = $array[$j];
        $temp_minimum_number_position = $j;
      }
    }
    // 【本当の最小値と暫定の最小値を入れ替えるアルゴリズム】
    $temp_number = $array[$temp_minimum_number_position];
    $array[$temp_minimum_number_position] = $array[$i];
    $array[$i] = $temp_number;
    }
    return $array;
}
