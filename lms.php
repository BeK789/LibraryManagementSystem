

<?php 
session_start();
 


if( isset($_COOKIE['loglms']) && isset($_SESSION['loglms']) )
	
	
 header('location:dashboard.php');


if( isset($_COOKIE['logstd']) && isset($_SESSION['logstd']) )
	
	 header('location:dashboard_std.php');



?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
		
		<style type="text/css">
		.links a:hover{ text-decoration:none;  }
		
		</style>
		
    </head>
	
	
    <body class="bg-secondary">
	
	
	
	
	
	
	
	
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow border-0 rounded-lg mt-5">
                                     <div class="card-header bg-light"><h3 class="text-center font-weight-light my-4"><p class="h6">Before you log in</p> <b>Who are you?</b></h3></div>
                                    <div class="card-body">
									
                                        <form class="" method="post">
										
                                            <div class="links mt-4 form-group bg-dark w-100">
											<a href="student/login.php" class="bg-dark text-center d-block py-2 text-light">I'm a Student</a>  </div>
														
											
                                            <div class="links mt-4  form-group w-100">
											<a href="librarian/login.php" class="bg-dark text-center d-block py-2 text-light">I'm a Librarian</a>  </div>											
										
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
