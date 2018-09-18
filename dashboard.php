<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ismail Cradoe -  Dashboard</title>
    
    <script src="js/jquery.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.js"></script>
    <link rel="stylesheet" href="css/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/gif" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    
</head>
<body class="has-top-ad">
    <div class="container-fluid-cd">
    <div class="container-pad">

         <nav class="navbar navbar-expand-md">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="150px;" class="nav-brand"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa  fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="index.html#">Home <span class="sr-only">(current)</span></a>
          </li> -->
          
        </ul>
        
      </div>
    </nav>
   
    <div class="cd-white-line"></div>

        <div class="row">
            <div class="toggle-open">
                <div class="open" id="open"><i class="fa fa-chevron-left"></i></div>
                <div class="close"><i class="fa fa-chevron-right"></i></div>
            </div>
            <div class="col-md-3 profile top has-white-right-line has-bg-white has-toggle hidden-sm hidden-xs">
                <div class="profile-container">
                    <!-- Here goes the user profile picture -->
                    <div class="p-img">
                        <i class="fa fa-user"></i>
                    </div>
                    <!-- Here goes the profile menu list -->
                    <div class="profile-details">
                        <ul>

                            <li class="active"><a href="#">Profile</a></li>
                            <li><a href="#">Transaction Details</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-9 top text-center toggle-hidden">
            	<!-- Here is the search box -->
                <div class="search-box">
                    <div class="row">
                        <div class="col-sm-2 col-md-2 c1 col-lg-2"></div>
                        <div class="col-sm-8 col-md-8 col-12 col-lg-8">
                          <form method="post" action="">  
                        <div class="form-group">
                            <input type="text" name="com_number" placeholder="Confirmation Number" class="form-control input-lg">
                        </div>
                            <div class="row">
                                <div class="col-sm-4 col-md-4 col-12 col-lg-4">
                            <input type="submit" value="Confirm Payment" class="btn btn-cd-2 " name="confirm_payment">
                        </div>
                        <div class="col-sm-4 col-md-4 col-4 col-lg-4"></div>
                        <div class="col-sm-4 col-md-4 col-12 col-lg-4">
                            <a href="invoice.php" class="btn btn-cd-2">Generate Invoice</a>
                            
                        </div>
                        </div>
                          </form>
                        </div>
                        <div class="col-sm-2 col-md-2 c1 col-lg-2"></div>
                    </div>
                	
                </div>
                <!-- Here goes the Search Button -->
              <!--  <div class="search-btn">
               		 <a href="" class="search-box-btn">
                    	<span>Confirm Payment</span>
               		 </a>
                	<a href="" class="search-box-btn">
                    	<span>Generate Invoice</span>
                	</a>
               </div> -->
            </div>
        </div>
    </div>
    </div>

<!-- JavaScripts -->
<script type="text/javascript" src="bootstrap/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 <script>
      
        $(document).ready(function(){
            deviceWindow = $(window).height();
            
            open = $('#open');
            close = $('.close');
            toggleHidden = $('.toggle-hidden');
            hasToggle = $('.has-toggle');

            close.click(function(){
                toggleHidden.animate({
                    left:'100vw'
                },500, function(){

                   hasToggle.css('display', 'block')
                .animate({
                    left:'0'
                },500);

                close.css('display','none');
                 open.css('display','block');
             }); 
                  });


             open.click(function(){
                hasToggle.animate({
                                    left:'-100vw'
                                },500, function(){
                                hasToggle.css('display', 'none');
                                toggleHidden.css('display', 'block')
                        .animate({
                                left:'0'
                                },500);

                        close.css('display','block');
                        open.css('display','none');
             }); 
                  });
        });
    </script>
</body>
</html>
<!-- End of HTML Document-->	

