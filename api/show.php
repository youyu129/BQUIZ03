<?php
include_once "db.php";

$row=$Movie->find($_POST['id']);

// if 的原本寫法
// if($row['sh']==1){
//     $row['sh']=0;
// }else{
//     $row['sh']=1;
// }



// 三元運算 (還是判斷式)
// $row['sh']=($row['sh']==1)?0:1;



// 運算式 自己的值 + 1 再取餘數
$row['sh']=($row['sh']+1)%2;


$Movie->save($row);

?>