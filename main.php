<?php
echo 'こんにちは' . PHP_EOL; // 改行 EndOfLine

/*
echo 'hello';
*/

$name = "yuki";
echo 'he\'llo' . "$name". PHP_EOL;;

  $text = <<<EOT
  hello! $name
    this is looooong（字下げ）
  text! 
  # EOTの文字はなんでもいい
  
  EOT;

echo $text;
// ダブルクォートだと変数展開できる　＝＝ヒアドキュメント

echo 13 * (3 + 5) + "3" . PHP_EOL ;; // スペースは必須 数字ではないものも、なるべく数字にしようとする

$price = 500;
echo $price += 100 ;// 改行がうまくいかない 
