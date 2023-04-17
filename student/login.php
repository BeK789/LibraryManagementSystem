
<?php  session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
	
	
    <body class="bg-light">
	
	
	
	<?php  
	
     include "../database.php"; 
	
	
	if(isset($_POST['login'])){

		
		$email=$_POST['email'];
		$password=$_POST['password'];
		//$password=password_hash($password, PASSWORD_DEFAULT);
		
		$sel="select * from students where Email='$email'";
		$run=$connect->query($sel);
		$row=$run->fetch_assoc();
		
		//print_r($row);
		
		if($run->num_rows >0){
			
			if($password==$row['Password']){
				
				
				
				$_SESSION['student_id']=$row['ID'];
				$_SESSION['student_name']=$row['Name'];
				$_SESSION['student_photo']=$row['Photo'];
				$_SESSION['logstd']="logged in";
				
				setcookie('logstd','logged',time()+(86400),'/');
				setcookie('student_name',$row['Name'],time()+(86400),'/');
				setcookie('student_id',$row['ID'],time()+(86400),'/');
				setcookie('student_photo',$row['Photo'],time()+(86400),'/');
				
				header('location:../dashboard_std.php'); exit;
			}
			else $_SESSION['p']="Wrong Password";
		}
		else
		$_SESSION['e']="Invalid Email or Password";
		
	}	
	
	
	?>
	
	
	
	
	
	
	
	
	
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow border-0 rounded-lg mt-5">
                                    <div class="card-header bg-light"><h3 class="text-center font-weight-light my-4"><b>Library Management System <br />(Students)</b></h3></div>
                                    <div class="card-body">
									
                                        <form class="" method="post">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label>
											
											<input placeholder="Enter Email" class=" ml-5 pr-5 my-2" name="email" id="inputEmailAddress" type="email" value="<?php if(isset($email)) echo $email; ?>" /></div>
																	<p class="text-danger font-weight-bold font-italic"><?php  if(isset($_SESSION['e'])){ echo $_SESSION['e'];  unset ($_SESSION['e']);}?></p>					

																						
																						
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
											
											<input class=" ml-4 my-2 pr-5" name="password" id="inputPassword" type="password" placeholder="Enter password" /></div>
											<p class="text-danger font-weight-bold font-italic"><?php  if(isset($_SESSION['p'])) {echo $_SESSION['p']; $_SESSION['p']="";}?></p>
                                            
											<div class="form-group">
                                                <div class="custom-control custom-checkbox">
												
                                            
											
											</div>
											
											<input type="submit"class="btn btn-primary text-dark font-weight-bold" href="" name="login" value="Login" /></div>
                                        </form>
										
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
