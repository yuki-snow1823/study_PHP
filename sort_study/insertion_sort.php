<?php
$numbers = array(1,3,5,4,2,6);
// 挿入ソート

// 出力
var_dump(insertion_sort($numbers));

function insertion_sort($array)
{
    // 配列の要素の数だけ繰り返し処理を行う
    for ($i = 1; $i < count($array); $i++) {
        // 比較する数字【$new_number】とその1個前の数字（比較される数字）の場所を保存する【$old_number_position】を作成
        $new_number = $array[$i];
        $old_number_position = $i - 1;

        // 一番左端に$old_number_positionが行くまで繰り返す
        while ($old_number_position > 0) {
            // 比較する数字が、される数字より小さかった場合、入れ替える
            if ($new_number < $array[$old_number_position]) {
                // 多重代入の方法がよくわからなかったため、一時保管するための$temp_numberを使用
                // https://scrapbox.io/php/%E5%A4%9A%E9%87%8D%E4%BB%A3%E5%85%A5 これでできるらしいですが…。
                $temp_number = $array[$old_number_position];
                $array[$old_number_position] = $array[$old_number_position + 1];
                $array[$old_number_position + 1] = $temp_number;
            }
            // 比較される数字を一個左にずらす
            $old_number_position -= 1;
            // ※数字が動く様子を見ることができます。
            print_r($array);
        }
    }
    return $array;
}
