<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vehicle Tracking System</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	  <style>.logincnt{position:absolute; top:150px; right:-500px;}</style>
  </head>
  <body>
	  <div class="container">
      <div class="row">
        <div class="col-12">
            <h1 class="text-center">Welcome to Telangana State Police</h1>
			  <h3 class="text-center">Vehicle Tracking System</h3>
        </div>
      </div>
	  </div>
	<div class="container mt-2">  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">VTS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="found-vehicles.html">Found Vehicles</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="#">Lost Vehicles</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>	
        </ul>
        
      </div>
    </nav>
	</div>
    <div class="container mt-2">
      <div class="row">
        <div class="col-12">
             <h1 class="text-center">Lorem ipsum dolor sit amet, consectetur.</h1>
            <img src="images/banner-img.jpg" alt="" class="img-fluid">
			<div class="container login-container logincnt">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
							<input type="submit" class="btnSubmit" value="Register" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        </div>
      </div>
    </div>
    <hr>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © MyWebsite. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.3.1.js"></script>
  </body>
</html>