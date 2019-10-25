<?php include("includes/head.php")?>

<style>
    .header-title{
        background: rgba(0,0,0,0.3);
        position: absolute;
        width: 100%;
        bottom: 0;
        color: white;
        padding: 10px 0;
    }
    
    .table-contact tr td{
        padding: 0;
       
    }
    .table-contact tr td h5{
        font-size: 12pt;
    }
    
    .table-contact tr td{
       font-size: 11.4pt;
        color: darkslategrey
       
    }
    
    .table-contact tr td i{
        height: 40px;
        width:40px;
        text-align: center;
        line-height: 40px;
        background-color: darkslategrey;
        color: #fff;
        border-radius: 40px;
    }
    
    
</style>
<div class="header img-bg" style="background-image:url('img/front/02.jpg')">
    <?php include("includes/navbar.php"); $p=6 ?>
    <div class="header-title">
     <div class="container">
        <h2>CONTACT</h2>
        </div>
    </div>
</div>

<section>
    <div class="container">
        
        <div class="row">
         <div class="col-xs-12 col-md-5 ">
             <br/>
             <table class="table table-contact">
              <tr><td rowspan="2"><i class="fa fa-map-marker"></i></td><td><h5>ADDRESS</h5></td></tr>
              <tr><td> Makerere, kampala, Uganda <br/> <a class="btn btn-sm btn-success text-white">see map</a><br/><br/><br/></td></tr>
                 
             <tr><td rowspan="2"><i class="fa fa-phone"></i></td><td><h5>PHONE CONTACT</h5></td></tr>
              <tr><td> +256 751 32134 <br/> +256 023 45211 <br/><br/></td></tr>
                 
                 
                 <tr><td rowspan="2"><i class="fa fa-envelope"></i></td><td><h5>EMAIL</h5></td></tr>
              <tr><td> anil@gmail.com</td></tr>
             </table>
            </div>
            <div class="col-xs-12 col-md-7  white-bg">
                <br/>
                <h5><i class="fa fa-comment text-primary"></i> Get In Touch</h5>
             <div class="row">
                 <div class="col-xs-6 col-md-6">
                     <input class="form-control" placeholder="first name">
                     <br/>
                     <input class="form-control" placeholder="last name">
                     <br/>
                     <input class="form-control" placeholder="email ">
                     <br/>
                     <input class="form-control" placeholder="phone">
                 </div>
                 <div class="col-xs-6 col-md-6">
                   <input class="form-control" placeholder="Subject">
                     <br/>
                     <textarea class="form-control" placeholder="Messages" rows="7"></textarea>
                 </div>
                 <br/>
                 <div class="col-md-12 text-right">
                     <br/>
                  <button class="btn btn-primary"><i class="fa fa-send"></i> Send</button>
                     <br/>
                     <br/>
                 </div>
                </div>
            </div>
        </div>
    
    </div>

</section>

<?php include("includes/foot.php")?>
<script>

</script>