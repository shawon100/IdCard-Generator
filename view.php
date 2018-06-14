
<?php


session_name("jwmf"); 
session_start(); 
$title = isset($_POST['title']) ? htmlentities($_POST['title']) : "INTERNET ID CARD";

$fname = $_POST['fname'] ;
$ename = $_POST['ename'] ;
$faname = $_POST['faname'];
$mname = $_POST['mname'];
$dname = $_POST['dname'];
$nid = $_POST['nid'];
$si=$_POST['si'];
$save = 'images/'.str_replace(" ","_",$ename).'.jpg';
$_SESSION['card']=$save; 
$bgpic = imagecreatefrompng("nid.png");
$textcolor = imagecolorallocate($bgpic,255,255,255);
$infcolor = imagecolorallocate($bgpic,0,0,0);
$stscolor = imagecolorallocate($bgpic,0x00,0x55,0x00);
$ttscolor = imagecolorallocate($bgpic,255,0,0);
$font="fonts/verdana.ttf";
$f2="fonts/sm.ttf";
$f3="fonts/sign.ttf";
$f4="fonts/avro.ttf";
//imagestring($bgpic,7,30,5,$title,$textcolor);


imagettftext($bgpic,20, 0,242,150,$infcolor,$f4,$fname);
imagettftext($bgpic,18, 0,242,185,$infcolor,$font,$ename);
imagettftext($bgpic,20, 0,242,215,$infcolor,$f4,$faname);
imagettftext($bgpic,20, 0,242,245,$infcolor,$f4,$mname);
imagettftext($bgpic,18, 0,291,278,$ttscolor,$font,$dname);
imagettftext($bgpic,18, 0,254,311,$ttscolor,$font,$nid);
imagettftext($bgpic,15, 0,35,300,$infcolor,$f3,$si);

$avl = $_FILES['file']['tmp_name'];
if(trim($avl!=""))
{
  $imgi = getimagesize($avl);
  if($imgi[0]>0)
  {
      if($imgi[2]==1)
      {
        $av = imagecreatefromgif($avl);
        imagecopyresized($bgpic, $av,39,152,0,0,100,120,$imgi[0], $imgi[1]);
      }else if($imgi[2]==2)
      {
        $av = imagecreatefromjpeg($avl);
        imagecopyresized($bgpic, $av,39,152,0,0,100,120,$imgi[0], $imgi[1]);
      }else if($imgi[2]==3)
      {
        $av = imagecreatefrompng($avl);
        imagecopyresized($bgpic, $av,39,152,0,0,100,120,$imgi[0], $imgi[1]);
      }

  }
}
imagepng($bgpic,$save);
imagedestroy($bgpic);
header("Location: ".$save); 

?>

