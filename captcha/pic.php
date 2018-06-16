<?php
session_start();
header('Cache-Control: no-cache, no-store, must-revalidate');

			//Session stuff
			$_SESSION["captcha"]=rand(100,999);
			
			//Captcha Quality stuff
			
			//Background picture
			$rand3=rand(0,8);
			$im=imagecreatefromjpeg("fonts/b".$rand3.".jpg");
	
			//Text Color
			$rand=rand(0,5);
			if($rand==0){$font_color = imagecolorallocate($im, 255, 225, 0);}		
			if($rand==1){$font_color = imagecolorallocate($im, 255, 0, 0);}
			if($rand==2){$font_color = imagecolorallocate($im, 0, 225, 225);}
			if($rand==3){$font_color = imagecolorallocate($im, 0, 0, 0);}
			if($rand==4){$font_color = imagecolorallocate($im, 140, 10, 140);}
			if($rand==5){$font_color = imagecolorallocate($im, 255, 255, 255);}

			//Font
			$fontrand=rand(0,20);
			if($fontrand==0){$font="Night.TTF";}
			if($fontrand==1){$font="BARBAPA.TTF";}
			if($fontrand==2){$font="KGKissMeSlowly.ttf";}	
			if($fontrand==3){$font="FearlessVampireKillers.ttf";}	
			if($fontrand==4){$font="FEASFBRG.TTF";}	
			if($fontrand==5){$font="TRLCD.TTF";}	
			if($fontrand==6){$font="K22Eclair.ttf";}	
			if($fontrand==7){$font="FuckAutority.ttf";}	
			if($fontrand==8){$font="HARD_ROCK.ttf";}	
			if($fontrand==9){$font="JFRingmaster.ttf";}	
			if($fontrand==10){$font="Shadowed_Black_Wide.ttf";}	
			if($fontrand==11){$font="JumboParade.ttf";}	
			if($fontrand==12){$font="hearts.ttf";}				
			if($fontrand==13){$font="PWSavane.ttf";}	
			if($fontrand==14){$font="KingthingsFrontwards.ttf";}
			if($fontrand==15){$font="sketchy.ttf";}			
			if($fontrand==16){$font="edosz.ttf";}		
			if($fontrand==17){$font="Oak-Marsquake.ttf";}				
			if($fontrand==18){$font="BULLET.ttf";}			
			if($fontrand==19){$font="Gretoon.ttf";}
			if($fontrand==20){$font="ring.ttf";}

			// Obliqueness
			$rand2=rand(0,1);
			if($rand2==0){imagettftext($im,rand(30,40),5,40, 60, $font_color,"fonts/".$font."",$_SESSION["captcha"]);}
			if($rand2==1){imagettftext($im,rand(30,40),-5,30, 55, $font_color,"fonts/".$font."",$_SESSION["captcha"]);}
			
		header('Expires: Sat, 17 May 3000 05:00:00 GMT'); 
		header('Cache-Control: no-store, no-cache, must-revalidate'); 
		header('Cache-Control: post-check=0, pre-check=0', FALSE); 
		header('Pragma: no-cache');
		header("Content-Type: image/jpeg");
		imagejpeg($im, null, 90);
		


?>