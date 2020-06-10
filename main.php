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
