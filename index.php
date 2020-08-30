<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">
  
	<title></title>
</head>
<body>
	
 <?php include 'menu.php';?>
 <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/cc1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/cc2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/cc3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
	  <div class="row">
		  <div class="col-lg-6 col-md-6 col-12">
			 <img src="img/cc5.jpg" class="img-fluid aboutimg">
			
		  </div>
		  <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">I M THAPA TECHNICAL</h2>	
            <p class="py-3">Do you want a career with a future? You should add regular updates to your skills and knowledge. Unless, you have already decided that your current skills and job are good enough for your future.
            Knowledge is power, especially in the current job market. Documentation of your skills enables you to move upwards in your organization.
            Getting a certificate proves your commitment to upgrade your skills, gives you the credibility needed for more responsibilities, larger projects, and a higher salary.
          </p>		
          <a href="about.php" class="btn btn-success"> Check More</a>
		  </div>
		
	  </div>

</div>

</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">OUR SURVICES</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">

			<div class="card" >
           <img class="card-img-top" src="img/cc2.jpg" alt="Card image">
           <div class="card-body">
             <h4 class="card-title">Beautiful Nature :)</h4>
             <p class="card-text">Some example text.</p>
             <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-12">

			<div class="card" >
           <img class="card-img-top" src="img/cc1.jpg" alt="Card image">
           <div class="card-body">
             <h4 class="card-title">Beautiful Nature :)</h4>
             <p class="card-text">Some example text.</p>
             <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
				
			</div>
			<div class="col-lg-4 col-md-4 col-12">

			<div class="card" >
           <img class="card-img-top" src="img/cc1.jpg" alt="Card image">
           <div class="card-body">
             <h4 class="card-title">Beautiful Nature :)</h4>
             <p class="card-text">Some example text.</p>
             <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
				
			</div>
			
		</div>
		
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">GALLERY</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-d col-md-4 col-12">
				<img src="img/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-d col-md-4 col-12">
				<img src="img/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-d col-md-4 col-12">
				<img src="img/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-d col-md-4 col-12">
				<img src="img/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-d col-md-4 col-12">
				<img src="img/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-d col-md-4 col-12">
				<img src="img/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-d col-md-4 col-12">
				<img src="img/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-d col-md-4 col-12">
				<img src="img/cc1.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-d col-md-4 col-12">
				<img src="img/cc1.jpg" class="img-fluid pb-4">
			</div>
			
		</div>
		
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">GALLERY</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="email" autocomplete="off"  class="form-control">
				</div>
				<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="comments" ></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			
		</form>
	</div>



</section>
<footer>
	<p class="p-3 bg-dark text-white text-center">@KaranGaria</p>
</footer>





     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>