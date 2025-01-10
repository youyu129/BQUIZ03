<?php
include_once "db.php";

// 原本寫法
$table=$_POST['table'];
$$table->del($_POST['id']);

// 一行解決
${$_POST['table']}->del($_POST['id']);

?>