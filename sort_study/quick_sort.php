<?php
$numbers = array(6,3,5,1,4,2);
// クイックソート

// 出力
var_dump(quick_sort($numbers));

function quick_sort($array)
{
    if (count($array) < 2) {
        return $array ;
    };
    // 先頭の番号を基準にする
    $pivot_number = array_shift($array);

    // 先頭より小さいもの、大きいものを入れる配列
    $small_numbers = [];
    $large_numbers = [];

    // $pivot_numberを基準に各要素を仕分ける
    foreach ($array as $number) {
        if ($number < $pivot_number) {
            array_push($small_numbers, $number);
        } else {
            array_push($large_numbers, $number);
        }
    }

    // 再帰的に呼び出すことで、全ての順番を揃える
    return array_merge(quick_sort($small_numbers),[$pivot_number],quick_sort($large_numbers));
}
