<?php
$aramasorgusu = ($_GET['aramasorgusu']);
$sonucsorgu = ("SELECT * FROM konular WHERE baslik LIKE '%".$aramasorgusu."%'" );
if(($sonucsorgu)>0){
 while($sorguoku=($sonucsorgu)){
  echo $sorguoku['baslik'].'<br>';
 }
}
else{
 echo 'Aradığınız İçerik Bulunamadı';
}
?>
