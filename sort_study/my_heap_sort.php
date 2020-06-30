<?php

 function make_heap($array,$parent_node_index,$max_index) {
   $parent_node_number = $array[$parent_node_index];
   while(true){
     $left_children_node_index = 2 * $parent_node_index + 1;
     // 左の子ノードのインデックスが配列の最大のインデックスより大きい場合
     // つまりヒープがもうない場合、処理を終える。
     if($left_children_node_index > $max_index) {
       break;
     }
     if($left_children_node_index != $max_index){
       // 左より右の子ノードの数字が大きい場合、入れ替える
       if($array[$left_children_node_index] > $array[$left_children_node_index + 1]){
         $left_children_node_index += 1;
       }
       // 親ノードの数字の方が左の子のノードの数字より大きい場合
       // つまり正しい状態の場合、処理を終える。
       if($array[$parent_node_index] > $array[$left_children_node_index]){
         break;
       }
       // 親子の数字、インデックスの入れ替えをまとめて行う。
       // 正しければbreakでここには来ないから、望ましくない場合だけ反応する。
       $array[$parent_node_index] = $array[$left_children_node_index];
       $parent_node_index = $left_children_node_index;
     }
   }
 }

 function change_number(){
   
 }
