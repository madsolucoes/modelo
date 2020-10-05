<?php include "assets/configs/config.php"; 


?>

<!doctype html>
<html>
    <?php include "assets/incs/c/head.php"; ?>
    <body>
    	<div class="int_nav">

        <video loop="" muted="" autoplay="" poster="http://sandbox.thewikies.com/vfe-generator/images/big-buck-bunny_poster.jpg" class="fullscreen-bg__video">
            <source src="<?php echo url_base; ?>assets/incs/c/videos/bg_solucoes.mp4" type="video/mp4">
            <source src="<?php echo url_base; ?>assets/incs/c/videos/bg_solucoes.webm" type="video/webm">
            <source src="<?php echo url_base; ?>assets/incs/c/videos/bg_solucoes.ogv" type="video/ogg">
        </video>
    
    		<?php include "assets/incs/c/nav.php"; ?>	
    	</div>
        <div class="int_main">        
            <?php include "assets/incs/c/main.php"; ?>
        </div>
    </body>
    <?php include "assets/incs/c/js.php"; ?>
</html>