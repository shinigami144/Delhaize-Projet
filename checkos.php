<script> 
 if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
 // document.write("Vous naviguez avec un navigateur sur mobile !");
 <?php $_SESSION["OS"]= "mobile"; ?>
 }else{
 // document.write("Vous naviguez avec un navigateur sur Desktop !");
 <?php $_SESSION["OS"]= "ordinateur"; ?>
 }
 </script>