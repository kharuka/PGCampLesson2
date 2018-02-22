<?php

$name=$_POST["name"];
$kana=$_POST["kana"];
$email=$_POST["email"];
$chance=$_POST["chance"];
$rfa="";
if(isset($_POST["rfa1"])){$rfa.=$_POST["rfa1"]."。";}
if(isset($_POST["rfa2"])){$rfa.=$_POST["rfa2"]."。";}
if(isset($_POST["rfa3"])){$rfa.=$_POST["rfa3"]."。";}
if(isset($_POST["rfa4"])){$rfa.=$_POST["rfa4"]."。";}
$textarea=$_POST["textarea"];

 ?>

 <!DOCTYPE html>
 <html lang="ja">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="author" content="Kuranami Haruka">
   <title>Cheese Academy</title>
   <link rel="stylesheet" href="css/style2.css">
   <!-- <link rel="stylesheet" href="css/reset.css"> -->
 </head>

 <body>
   <div class="table-box">
     <table>
       <tr>
         <td>名前</td>
         <td>
           <?=$name?>
         </td>
       </tr>
       <tr>
         <td>カナ</td>
         <td>
           <?=$kana?>
         </td>
       </tr>
       <tr>
         <td>メールアドレス</td>
         <td>
           <?=$email?>
         </td>
       </tr>
       <tr>
         <td>チーズアカデミーを知ったきっかけ</td>
         <td>
           <?=$chance?>
         </td>
       </tr>
       <tr>
         <td>志望動機</td>
         <td>
           <?=$rfa?>
         </td>
       </tr>
       <tr>
         <td>詳細</td>
         <td>
           <?=$textarea?>
         </td>
       </tr>
     </table>
   </div>

 </body>

 </html>
