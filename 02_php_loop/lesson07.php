﻿<?php
// 以下をfor文を使用して表示してください。
// ヒント: forの中でforを３回使用

// ***1
// **121
// *12321
// 1234321
for($a = 1 ; $a <= 4  ; $a ++){
    for($b = 3 ; $b >= $a ; $b --){
        echo "*";
      }
      for($c = 1 ; $c <=$a ; $c++){
        echo $c;
      }
      for($d = 3 ; $d >=6-$c ; $d--){
        echo $d-(4-$a);
      }
      echo "<br />";
  }