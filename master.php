<?php

$navbar = '<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>1 Col Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="signupPage.php">Create Account</a>
                    </li>
                </ul>
			<form role="form" class="navbar-form navbar-right" action="login.php" method="POST">
				<div class="form-group">
					<input type="text" class="form-control" name="username" id="username" placeholder="username" required>
					<input type="password" class="form-control" name="password" id="password" placeholder="password" required>
					<button type="submit" class="btn btn-default navbar-btn" name="submit" id="submit">Login</button>
				</div>	
			</form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>';
	
$navbarLogged = '<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>1 Col Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">
	
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="newsale.php">Add Sale</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
			<form role="form" class="navbar-form navbar-right" action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" class="form-control" name="username" id="username" placeholder="username" required>
					<input type="password" class="form-control" name="password" id="password" placeholder="password" required>
					<button type="submit" class="btn btn-default navbar-btn" name="submit" id="submit">Login</button>
				</div>	
			</form>
			<?php echo $username; ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>';	
	
$containerStart = '<div class="container">';

$containerEnd = '</div>';

$signupForm ='	<div class="col-xs-12 col-xs-offset-1 col-sm-12 col-sm-offset-1 col-md-12 col-md-offset-1 col-lg-12 col-lg-offset-1 text-center" id="form">
                    <form role="form" action="signup.php" method="POST" enctype="multipart/form-data">
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" id="username" required>
                            </div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Re-type password</label>
                                <input type="password" class="form-control" name="password1" id="password1" required>
                            </div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
							<div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>ZIP Code</label>
                                <input type="number" class="form-control" name="zip" id="zip" min="00000" max="99999" required>
                            </div>
							<div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10 text-left">
                                <input type="checkbox" class="checkbox-circle" name="maillist" id="maillist" required> I would like to be notified when there is a sale near me.
                            </div>
							<div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <button type="submit" id="submit1" name="signupsubmit" class="btn btn-default">Create Account</button>
                            </div>
							<div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10" id="posted1">
								<p id="message1" style="font-size: 100%;">You can now login to your account.</p>
							</div>
                    </form>	
				</div>';
				
$newsaleForm = '	<div class="col-xs-12 col-xs-offset-1 col-sm-12 col-sm-offset-1 col-md-12 col-md-offset-1 col-lg-12 col-lg-offset-1 text-center" id="form1">
                    <form role="form" action="saleupload.php" method="POST" enctype="multipart/form-data">
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Sale Type</label>
                                <select class="form-control" name="saletype" id="saletype" required>
									<option name="garageSale" value="Garage Sale">Garage Sale</option>
									<option name="yardSale" value="Yard Sale">Yard Sale</option>
									<option name="estateSale" value="Estate Sale">Estate Sale</option>
								</select>
                            </div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Sale Address</label>
                                <input type="text" class="form-control" name="address" id="address" required>
                            </div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>ZIP Code</label>
                                <input type="text" class="form-control" name="zipcode" id="zipcode" required>
                            </div>							
                            <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Description</label>
                                <textarea class="form-control" name="description" id="description" required></textarea>
                            </div>
							<div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Upload Photo</label>
                                <input type="file" name="photo" id="photo">
                            </div>
							<div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <button type="submit" id="submit2" name="salesubmit" class="btn btn-default">Post</button>
                            </div>
							<div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10" id="posted1">
								<p id="message1" style="font-size: 100%;">You can now login to your account.</p>
							</div>
                    </form>	
				</div>';				

$contentHeader ='<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Page Heading
							<small>Secondary Text</small>
						</h1>
					</div>
				</div>';
				
$signupHeader = '<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Create Account</h1>
					</div>
				</div>';

$newsaleHeader = '<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">New Sale</h1>
					</div>
				</div>';				

$content ='        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project One</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
				</div>';	
	
$pagination = '<hr>
	<div class="container">
        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->';

$footer = '      <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	<script src="ajax.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>';



?>