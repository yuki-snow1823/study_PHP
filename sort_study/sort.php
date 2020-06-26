<?php
$numbers = array(1,3,5,4,2);
// バブルソート

// 出力
var_dump(bubble_sort($numbers));

function bubble_sort($array)
{
  // 配列の要素以下の回数繰り返し処理を行う
    for($i = 0; $i < count($array); $i++)
    {
      // 一列分行うから1個目のfor文の中へ
        for($n = 1; $n < count($array); $n++)
        {
          // 1つ目の要素と、その次の要素を比較して、1つめが大きい場合
            if($array[$n-1] > $array[$n])
            {
              // $temp_numberに小さい方の数字を保存
                $temp_number = $array[$n];
              // 大きかった位置に、正しい小さな数字を挿入
                $array[$n] = $array[$n-1];
              // 大きい方の数字を、本来正しい位置に挿入
                $array[$n-1] = $temp_number;
            }
        }
    }
    return $array;
}
