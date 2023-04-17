
<?php  session_start();




if(! isset($_COOKIE['loglms']) && !isset($_SESSION['loglms'])  && ! isset($_COOKIE['logstd']) && !isset($_SESSION['logstd']) )
	
	 header('location:lms.php');
	 
	






?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>XYZ College</title>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
</head>


<?php




?>









<body>
	
	<!-- Header -->
	
	<div class="container-fluid one">
		<div class="container">
		
			<div class="row py-3">
			
			<div class="col-sm-4"><img style="width:118px" src="logo.png" alt="" /></div>
			
			
				<div class="col-sm-8">
				
				<div class="navbar navbar-expand-sm menu mt-4 float-right">
				
					<ul class="navbar-nav "style="font-size:18px;">
						<li class="nav-item"><a href="blog.php" class="nav-link mx-2">Home</a></li>
						
						<li class="nav-item"><a href="index.php" class="current nav-link mx-2">Students Details</a></li>
						<li class="nav-item"><a href="Registration.php" class="nav-link mx-2">Register</a></li>
				<!--	<li class="nav-item"><a href="Dashboard.php?page=dash" class="nav-link mx-2">Dashboard</a></li> -->
					</ul>
				</div>
				
				</div>
				
			</div>
		
		
		
		</div>
	</div>
	
	<!-- Header -->
	
	
	
	
	
	<!-- Body -->
	
	
	
	
	
	<div class="container-fluid two">
		
		<div class="row">
					<div class="mb-5 bg-light w-100 text-center my-4"><strong class=" h3 m-auto font-italic" >All Student's Info:</strong></div>

			<div class="container mt-4" style="min-height:1000px">
			
			
			
			<!-- Form Design/Pagination info -->
			
			
			
			
			
			
			<?php  //Database

		$servername='localhost';
		$username='root';
		$password='';
		$db='Library';

	$connect= new mysqli($servername,$username,$password,$db);


//if($connect==true) echo "Connected"; else echo"Failed";


//Database
			
			
			
			
			
			if(isset($_GET['page'])) {
				
				$int=$_GET['page'];
			
			$select=" select * from students";
			$res=$connect->query($select);
			$page=ceil(($res->num_rows)/6);
			
			
			
			
								$perpage=6;
								$start=(($int*$perpage)-$perpage)+1;
								$lim=$start-1;
								
								
								$sel=" select * from students LIMIT $lim,$perpage ";
								$run=$connect->query($sel);
			
			while($row=$run->fetch_assoc()){
			
			?>
			
			<div class="my-5 ">
				<h2 class="h1 text-left d-inline bg-light px-4 ">Student ID : </h2> <h2 class="h1 d-inline"><?php echo "".$row['ID'];?></h2>
			</div>
			
		    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data">
			
		    	<div class="row form-group">
		    		<div class="col-sm-2"><label for="name"><strong>Name</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['Name'];?>
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="username"><strong>Roll No</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['ID'];?>
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Email</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['Email'];?>
					</div>
					
		    	</div>
				
				
					
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Marks</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['marks'];?>
					</div>
					
		    	</div>
				
				
					
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Attendance</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['attendance'];?>
					</div>
					
		    	</div>
				
				
					
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Library Details</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['library_details'];?>
					</div>
					
		    	</div>
				
				
					
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Helath Details</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['health_details'];?>
					</div>
					
		    	</div>
				
				
					
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Scholar</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['scholar'];?>
					</div>
					
		    	</div>
				
				
				
				
				<!--	<div class="row form-group">
		    		<div class="col-sm-2"><label for="password"><strong>Password</strong></label></div>
					
					<div class=" bg-light col-sm-7 text-success"> 
					<?php echo $row['Password'];?>
					</div>
					
		    	</div> -->
				
				
				
				
				
				
			
				
				<div class="clearfix"></div>
				
				
		    </form>
			
						<div class="merge" style="margin-top: 160px"></div>

			
			
			<?php  } }  
			
			

			else { 
			
			$select=" select * from students";
			$res=$connect->query($select);
			$page=ceil(($res->num_rows)/6); $int=1; 
			
			
			
			
			
								$perpage=6;
								$start=(($int*$perpage)-$perpage)+1;
								$lim=$start-1;
								
								
								$sel=" select * from students LIMIT $lim,$perpage ";
								$run=$connect->query($sel);
			
			while($row=$run->fetch_assoc()){
			
			?>
			
			
			
			<div class="my-5 ">
				<h2 class="h1 d-inline bg-light px-4 ">Student ID :</h2> <h2 class="h1 d-inline"><?php echo "".$row['ID'];?></h2>
			</div>
			
		    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data">
			
		    	<div class="row form-group">
		    		<div class="col-sm-2"><label for="name"><strong>Name</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['Name'];?>
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="username"><strong>Roll No</strong></label></div>
					
		    		<div class="bg-light col-sm-4 text-success"> 
					<?php echo $row['ID'];?>
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Email</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['Email'];?>
					</div>
					
		    	</div>
				
				
					
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Gender</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['gender'];?>
					</div>
					
		    	</div>
				
				
					
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Class</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['class'];?>
					</div>
					
		    	</div>
				
				
					
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Date of Birth</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['dob'];?>
					</div>
					
		    	</div>
				
						
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Marks</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php  echo '<b>'.'Physics = '.'</b>'. $row['physics'].'<br>';
		echo '<b>'.'Chem =   '.'</b>'. $row['chemistry'].'<br>';
		echo '<b>'.'Maths =   '.'</b>'. $row['maths'].'<br>';
		echo '<b>'.'English = '.'</b>'. $row['english'].'<br>';?>
		</td>
					</div>
					
		    	</div>
				
				
					
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Attendance</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['attendance'];?>
					</div>
					
		    	</div>
				
				
					
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Library Details</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['library_details'];?>
					</div>
					
		    	</div>
				
				
					
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Helath Details</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['health_details'];?>
					</div>
					
		    	</div>
				
				
					
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Hostel</strong></label></div>
					
		    		<div class=" bg-light col-sm-4 text-success"> 
					<?php echo $row['scholar'];?>
					</div>
					
		    	</div>
				
				
				<!-- <div class="row form-group">
		    		<div class="col-sm-2"><label for="password"><strong>Password</strong></label></div>
					
					<div class=" bg-light col-sm-7 text-success"> 
					<?php echo $row['Password'];?>
					</div>
					
		    	</div> -->
				
				
				
				
				
				
			
				
				<div class="clearfix"></div>
				
				
		    </form>
			
			<div class="merge" style="margin-top: 160px"></div>
			
			
			
			
			<?php  }
			
			
			
			}

			?>
			
		    <!-- Form Design -->
			
			
			
		    <!-- Pagination -->
			<div class="text-center py-5"> 
								<?php
								if($int>1) { ?>
								<a href="index.php?page=<?php echo $int-1;?>" class="ml-0 btn btn-dark text-light">Prev</a>
							
								<?php  }
								else { ?>
								<a href="" class="btn btn-dark text-light disabled ml-0">Prev</a>
								
								<?php }

								
								
								
								for($i=1;$i<=$page;$i++){ if($i==$int){ ?>
										
										
										
											<a href="index.php?page=<?php echo $i;?>" class=" d-inline ml-0 btn btn-light active " ><?php echo $i?></a>

																			
										
										<?php
								}
										else { ?>	<a href="index.php?page=<?php echo $i;?>" class=" d-inline ml-0 btn btn-light  " ><?php echo $i?></a>

										<?php	}}

								?>	
								
								<?php
								if($int<$i-1) { ?>
								<a href="index.php?page=<?php echo $int+1;?>" class="ml-0 btn btn-dark text-light">Next</a>
							
								<?php  }
								else { ?>
								<a href="" class="btn btn-dark text-light disabled ml-0">Next</a>
								
								<?php } ?>

			</div>	
		    <!-- Pagination -->
				
			

			
			
			
			</div>
		</div>
		
		
		
	</div>
	
	<div class="clearfix"></div>
	
	
	
	
	
	<!-- Body -->
	
	
	
	
	
	
	
	
	<!-- Section -->
	
	
	<!-- Section -->
	
	
	
	
	<!-- Footer -->
	
	<div class="container-fluid four">
		<div class="row foot">
			
			
			
		</div>
		
		
		
		<footer>
			<div class="row fix bg-dark  mt-5">
				<p class="m-auto font-italic text-secondary py-3">&copy; Copyright 2022. XYZ All Rights Reserved</p>
			</div>
		</footer>
		
	</div>
	
	<!-- Footer -->
	
	
	
	
	
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
</body>
</html>