<div class="social">
 <div class="container">
     <div class="col-md-12">
      <p><b>Follow us:</b> 
          <a><i class="fa fa-facebook"></i> Facebook</a>
          <a><i class="fa fa-twitter"></i> Twitter</a>
          <a><i class="fa fa-tripadvisor"></i> Tripadvisor</a>
          <a><i class="fa fa-instagram"></i> instagram</a>
         </p>
         
     </div>
    </div>
</div>
<footer>
 <div class="container">
     <div class="row">
      <div class="col-md-3">
<!--          <h4>About Tambula</h4>-->
          
          <p>We are tour agency that is excited to give you your journey of a life time.</p>
          <a class="btn btn-primary btn-sm text-white"> Learn More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
         </div>
         
         <div class="col-md-3 menu">
          <h4>Menu</h4>
          <a>About</a>
          <a>Tour Sites</a>
          <a>Destinations</a>
          <a>Special Offers</a>
          <a>Contacts</a>
         </div>
         
         <div class="col-md-3">
          <h4>Contacts</h4>
<!--          <img src="img/logo-dark.png" width="100px"/>-->
          <p><i class="fa fa-map-marker"></i> Makerere, Kampala, Uganda</p>
          <p><i class="fa fa-phone"></i> +256 751 32134</p>
          <p><i class="fa fa-phone"></i> +256 023 45211</p>
          <p><i class="fa fa-envelope"></i> Makerere, Kampala, Uganda</p>
          
         </div>
         
         <div class="col-md-3">
          <h4>Tour By Category</h4>
            
             <a>Outdoor Activites</a>
             <a>Relaxation Tours</a>
             <a>Family Friendly Tours</a>
             <a>Wild & Adventure Tours</a>
             <a>Cultural & Thematic Tours</a>
             <a>City Tours</a>
             
         </div>
      <div class="col-md-3"></div>
      <div class="col-md-3"></div>
     </div>
    </div>
</footer>
<div class="text-center copyright">&copy;<?php echo date('Y') ?> All rights reserved. safariCAMP</div>
<!-- jQuery first, then Tether, then Bootstrap JS. -->

<script src="js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validate.js?v=449990"></script>
<script src="js/moment.min.js?v=449"></script>
<script src="datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="js/custom.js?v=32"></script>
<script src="sweetalerts/sweetalert.min.js"></script>
<script src="js/sticky.js"></script>

</body>

</html>
<script>
	$(document).ready(function(){
       
		$(".navbar-nav li:eq(<?php echo $p;?>)").addClass('active');
	});

</script>