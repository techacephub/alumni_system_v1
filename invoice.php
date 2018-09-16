<!DOCTYPE html>
<html lang="en">
<head>
	<title>Invoice Generation </title>

	
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
 	<div class="container">

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
 		
	

	<menu role="menu">
		
		<div class="row">
			<div class="col-1 col-sm-3 col-md-3"></div>
		<div class="col-10 col-sm-6 col-md-6 has-bg">

		<form class="has-top-pad">	
			<br>
			<h5 style="font-family: Helvetica;" class="text-white text-center">INVOICE </h5>
			<br><br>
		<div class="form-group form-group-lg">

		<input type="text" placeholder="Name" name="name" class="form-control cd-input" required />
		</div>	


		<div class="form-group form-group-lg">

		<input type="email" placeholder="Email" name="email" class="form-control cd-input" required />
		</div>	


		<div class="form-group form-group-lg">

		<input type="text" placeholder="Phone Number" name="Phone Number" class="form-control cd-input" required />
		</div>


		<div class="text-center">
			<button class="btn btn-cd-white btn-block btn-lg">Generate</button>
			<br>
		</div>
	</form>
		</div>
		<div class="col-1 col-sm-3 col-md-3"></div>
		</div>
	</menu>	
</div>
 	</div>
</body>
</html>