<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online E-Voting System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  
  img{
  height: 200px;
	width:550px;
  }
  .container{
        max-width: 500px;
		
    }
   .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav-right {
  float: right;
}
.nav-link{
border: 2px solid black;
}
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Enter Your Aadhar Number to Cast Your Vote:</h1>
  
</div>

<div class="topnav">
  <a class="active" href="fir1.php">Home</a>
  <!--<a href="#news">About Us</a>-->
  
  <div class="topnav-right">
    <a href="sec.html">Login</a>
    
  </div>
</div>
<div class="container" style="margin-top:25px">
<form method="POST" action="ins_adhr.php">
        <div class="row">
            <div class="col-md-8">
			
                <label for="exampleInputEmail1"><h4>Enter Your Aadhar Number:</h4></label>
                <input type="text" name="aadhar" >
				<small id="Help" class="form-text text-muted">We'll never share your Aadhar with anyone else.</small>
                
            </div>
           
            <div class="col-md-8 text-center">
                <br/>
                <button class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="grey" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,186.7C384,149,480,107,576,122.7C672,139,768,213,864,229.3C960,245,1056,203,1152,170.7C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      
  
 

</body>
</html>