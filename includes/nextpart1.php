<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Material Design Bootstrap</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">
        <style>
            
            
            
        </style>
    </head>
    
    <body>
        
        <header>
            
            <!-- Navbar -->
            
            
            
        
        <!--Main Navigation-->
        
        <!--Main Layout-->
        <main>
            
            <!--start statistics section-->
            <div class="container-fluid" style="background-color:#536dfe;" id="statics" >
                <div class="row col-md-12">
                    <div class="col-md-3">
                        <i class="fa fa-angle-down"></i>
                        <span class="big-text">50+ DESTINATIONS</span>
                        <br>
                        <span class="sm-text">some simple text</span>
                        
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-angle-down"></i>
                        <span class="big-text">BEST PRICE SERVICES</span>
                        <br>
                        <span class="sm-text">some simple text</span>
                        
                    </div>
                    <div class="col-md-3">
                        
                        
                        <i class="fa fa-angle-down"></i>  
                        
                        
                        <span class="big-text"> 100+ ACTIVITIES TO ENJOY</span>
                        <br>
                        <span class="sm-text">some simple text</span>
                        
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-angle-down"></i>
                        <span class="big-text">BEST CUSTOMER SUPPORT</span>
                        <br>
                        <span class="sm-text">some simple text</span>
                        
                    </div>
                </div>
            </div>
            <!-- end statistics section-->
            
            <!--section for featured destinations--> 
            <div class="container-fluid bg-images" style="background-image: url(img/bg_img1.jpg); padding-bottom: 50px; ">
                <div class="row" style="background-color: rgba(0,0,0,0.5); height: inherit; margin-bottom:50px">
                    <div class="col-md-12" style="background-color: rgba(0,0,0,0.5); padding-bottom:50px; padding-top:50px; padding-left: 10%;">
                        
                        <form role="form" class="form-inline">
                            
                            <div class="col-md-3">
                                <center>
                                    <label class="text-md">Key Words</label>
                                    <input type="text" class="form-control new-size" />
                                </center>
                            </div>
                            <div class="col-md-3">
                                <center>
                                    <label class="text-md">Activity</label>
                                    <select class="form-control new-size" id="">
                                        <option>Swimming</option>
                                        <option>Travelling</option>
					<option><a href = tours.php>Tours</a></option>
					<option>Boat racing</option>
                                    </select>
                                    <div class="dropdown">    <button type="button" class="btn dropdown-toggle" id="dropdownMenu1"        data-toggle="dropdown">       Topics       <span class="caret"></span>    </button>    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">       <li role="presentation" class="dropdown-header">Dropdown header</li>       <li role="presentation" >          <a role="menuitem" tabindex="-1" href="#">Java</a>       </li>       <li role="presentation">          <a role="menuitem" tabindex="-1" href="#">Data Mining</a>       </li>        <li role="presentation">          <a role="menuitem" tabindex="-1" href="#">             Data Communication/Networking          </a>       </li>       <li role="presentation" class="divider"></li>       <li role="presentation" class="dropdown-header">Dropdown header</li>       <li role="presentation">          <a role="menuitem" tabindex="-1" href="#">Separated link</a>       </li>    </ul> </div>  
 
                                </center>
                            </div>
                            <div class="col-md-3">
                                <center>
                                    <label class="text-md">Destination</label>
                                    <select class="form-control new-size" id="">
                                        <option>Pearl Of Africa</option>
                                        <option>Sheraton</option>
					<option>Serena</option>
					<option>Imperial Grand Hotel</option>
                                    </select>
                                </center>
                            </div>
                            
                            <div class="col-md-3">
                                <center>
                                    <label></label>
                                    <input type="submit" class="btn btn-primary form-control new-size2 text-center" value="SEARCH" />
                                </center>
                            </div>
                        </form>
                        
                    </div> 
                    
                    <div class="col-md-12" style="margin-left:2%; margin-right:2%; margin-top:2% ;margin-bottom:20%; padding: 30px; height: 800px">
                        <div class="col-md-12">
                            <h3 style="color: white;">Popular Tour Sites</h3>
                            <br>
                            <!--Carousel Wrapper-->
                            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                                
                                <!--Controls-->
                                <center>
                                    <div class="controls-top">
                                        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </center>
                                <!--/.Controls-->
                                
                                <!--Indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                                    <li data-target="#multi-item-example" data-slide-to="2"></li>
                                </ol>
                                <!--/.Indicators-->
                                
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    
                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        
                                        <div class="col-md-4">
                                            <div class="card">
                                                <img class="img-fluid" src="img/sample/img2.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">      Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a class="btn btn-primary">Button</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 clearfix d-none d-md-block">
                                            <div class="card">
                                                <img class="img-fluid" src="img/sample/img3.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text" >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a class="btn btn-primary">Button</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 clearfix d-none d-md-block">
                                            <div class="card">
                                                <img class="img-fluid" src="img/sample/img6.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a class="btn btn-primary">Button</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!--/.First slide-->
                                    
                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        
                                        <div class="col-md-4">
                                            <div class="card">
                                                <img class="img-fluid" src="img/sample/img3.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a class="btn btn-primary">Button</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 clearfix d-none d-md-block">
                                            <div class="card">
                                                <img class="img-fluid" src="img/sample/img2.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a class="btn btn-primary">Button</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 clearfix d-none d-md-block">
                                            <div class="card">
                                                <img class="img-fluid" src="img/sample/img5.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a class="btn btn-primary">Button</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!--/.Second slide-->
                                    
                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        
                                        <div class="col-md-4">
                                            <div class="card">
                                                <img class="img-fluid" src="img/sample/img4.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a class="btn btn-primary">Button</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 clearfix d-none d-md-block">
                                            <div class="card">
                                                <img class="img-fluid" src="img/sample/img2.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a class="btn btn-primary">Button</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 clearfix d-none d-md-block">
                                            <div class="card">
                                                <img class="img-fluid" src="img/sample/img4.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">Card title</h4>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a class="btn btn-primary">Button</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!--/.Third slide-->
                                    
                                </div>
                                <!--/.Slides-->
                                
                            </div>
                            <!--/.Carousel Wrapper-->
                            
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div><!-- end container-->
            <!--end section for featured destinations--> 
            
            <!--start statistics section-->
            <div class="container-fluid" id="statics" >
                <div class="row">
                    <div class="col-md-12">
                        <i class="fa fa-angle-down"></i>Popular destinations
                        <p>
                            Carousels require the use of an id on the outermost container (the .carousel) for carousel controls to function properly. When adding multiple carousels, 
                            or when changing a carousel’s id, be sure to update the relevant controls.
                        </p>
                    </div>
                    
                </div>
            </div>
            <!-- end statistics section-->
            
            
        
            
            <div class="container-fluid">
                <div class="row ">
                        <div class="col-md-4">
                            <div class="card">
                                <img class="img-fluid" src="img/sample/img4.jpg" alt="Card image cap">
                                
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="card">
                                <img class="img-fluid" src="img/sample/img4.jpg" alt="Card image cap">
                                
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="card">
                                <img class="img-fluid" src="img/sample/img4.jpg" alt="Card image cap">
                                
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="card">
                                <img class="img-fluid" src="img/sample/img4.jpg" alt="Card image cap">
                                
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="card">
                                <img class="img-fluid" src="img/sample/img4.jpg" alt="Card image cap">
                                
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="card">
                                <img class="img-fluid" src="img/sample/img4.jpg" alt="Card image cap">
                                
                            </div>
                        </div>
                </div>
            </div>
            
            
            
            
        </main>
        <!--Main Layout-->
        
        
        
        
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- SCRIPTS -->
        <script type="text/javascript" src="js/compiled.min.js"></script>
        <script type="text/javascript" src="js/jarallax.js"></script>
        <script>
            new WOW().init();
            
            // MDB Lightbox Init
            $(function () {
                $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
            });

        </script>
    </body>
    
</html>
