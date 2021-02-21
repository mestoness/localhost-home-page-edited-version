<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <link rel="stylesheet" type="text/css" href="https://gistcdn.githack.com/AhmetBakiMms/f93c7c8f12b3f9e22a8e53153f10a93d/raw/f14d3beeb555b10340cb0ee4630977cb0a74d2c7/font-awesome.css">
      <style type="text/css">
         body::-webkit-scrollbar-track {
         background-color: #2C2D2D;
         }
         body::-webkit-scrollbar {
         width: 8px;
         background-color: #6E7070
         }
         body::-webkit-scrollbar-thumb {
         background-color: #A5A5A5;
         }
         body::-webkit-scrollbar-corner {
         background-color: #6E7070
         }
         body {margin: 0;
         font-family: sans-serif;
         font-size: 17px;
         padding: 1rem;         background: black;
         color: white
         }
         .file-a{
         color: white;
         text-decoration: none;
         display: block;
         padding: 1.2rem;
         border-bottom: 1px solid grey;font-weight: 500
         }
      </style>
   </head>
   <body>
      <h2 style="color: white;text-align: center;font-weight: 300">
         <a href="" style="color: white;text-decoration: underline;">MestOness</a>
      </h2>
      <?php
         $dosyalar = glob("*");
         foreach ($dosyalar as $dosya) {
         
         ?>
      <?php 
         if(is_dir($dosya)){
         
         ?>
      <a href="<?= $dosya ?>" class="file-a"><i class="fa fa-file" style="margin-right: 5px"></i>    <?= $dosya ?>  </a>
      <?php 
         }
         else{
         ?>
      <a href="<?= $dosya ?>" class="file-a"><i class="fa fa-file-text" style="margin-right: 5px"></i><?= $dosya ?>   
      <span style="float: right;"> 
      <?php $boyut=filesize($dosya);   
         $boyut = $boyut / (1024*1024);   
         echo  substr($boyut, 0,7) . "... MB";  ?></span>
      </a>
      <?php 
         }
                   ?>
      <?php 
         }
         
         ?>
   </body>
</html>
