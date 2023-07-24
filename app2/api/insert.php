<?php
//處理新增資料的請求
$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=ajax_student','root','');
$keys= array_keys($_POST); //把key值做成陣列
// $keys=array_keys($_POST);
echo $pdo->exec("insert into students (`".join("`,`",$keys)."`) 
                        value('".join("','",$_POST)."')");  // exec>>影響幾筆資料
                     
//$pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=s1120226','s1120226','s1120226');


// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
//不需要導向頁面 傳值就好

?>