<meta charset="UTF-8">
<?php 
include("config.php");
session_start();
		$ben = $_SESSION["suye_id"];
	if($_POST){
		$arama = strip_tags(rtrim($_POST['value']));
		if(!$arama){
			echo 'bos';
		}else{
//Burada like ile veritabanında istediğimiz şeyi arıyoruz.
$araquery = $db->prepare("SELECT * FROM  `sinava_giren_kisiler` WHERE  like '%$arama%' or like '%$arama%'");
$araquery->execute(); 
if($araquery->rowCount() ){
    foreach( $araquery as $ararow ){ 
	$arauyeid = $ararow[" `sinava_giren_kisiler`"];?>
<?php 

//Eğer bulduysak buradan çekiyoruz ve yazdırıyoruz.
    $prquery = $db->query("SELECT * FROM uyeler  where uye_id ='$arauyeid'", PDO::FETCH_ASSOC);
if($prquery->rowCount() ){
    foreach( $prquery as $prrow ){
    $uyepr = $prrow["uye_pr"];
	$uyekuladi = $prrow["uye_kuladi"];       
     }
};
?>
           <a href="<?php echo $sitelinki; ?>/<?php echo $uyekuladi;?>"> 
		   <div class="aranankisi">
		   <li class="arakisi">
		   <img src="<?php echo $sitelinki; ?>/profilresmi/<?php echo $uyepr ?>" width="40px" height="40px" align="absmiddle">
		   <?php echo $ararow["uye_adi"]; ?> <?php echo $ararow["uye_soyadi"]; ?> 
		   </div>
		   </li>
		   </a>
  <?php }				
		}else{
		echo 'yok';
		}
		}
	}else{
		echo "hata";
	}