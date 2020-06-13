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


// 定数
define('NAME', 'taguchi');
// define('NAME', 'dotinstall');
echo NAME . PHP_EOL;

// もしくは
const MAME = "azuki";
echo MAME;

echo var_dump(MAME);
echo (string)MAME;
echo var_dump(MAME);

if (MAME == "azuki") {
  echo "if文";
} elseif (MAME !== "koshian") {
  "null";
} else {
  "null";
}

switch (MAME) {
  case  "azuki":
    echo "小豆！！";
    break;
  default: "wrong";
}

// jsと同じ
for ($i = 1; $i <= 5; $i++) {
  // echo 'Hello' . PHP_EOL;
  echo "$i - Hello" . PHP_EOL;
}

// while ($hp > 0) {
//   echo "Your HP: $hp" . PHP_EOL;
//   $hp -= 15;
// }

$hp = 2000;
do {
  echo "Your HP: $hp" . PHP_EOL;
  $hp -= 15;
} while ($hp > 0);

for ($i = 1; $i <= 10; $i++) {
  // if ($i === 4) {
  // if ($i % 3 === 0) {
  //   continue;
  // }
  if ($i === 4) {
    break;
    
  }
  echo $i . PHP_EOL;
}


function showAd() {
  echo "---------";
  echo "---------";
}

showAd();
