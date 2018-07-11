<?php 
URL.'index/clase/PaginaMaestra';
$maestra = new paginaMaestra();
 $maestra->setTitulo("Index | Master Chef");
 echo $maestra->head();
 echo $maestra->header();
 echo $maestra->body();
?>