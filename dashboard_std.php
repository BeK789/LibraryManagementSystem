
<?php  session_start(); 

if(! isset($_COOKIE['logstd']) && !isset($_SESSION['logstd']) ){	
	header('location:lms.php');
}

?>





<?php 
include "database.php";


//Add Books";

if(isset($_GET['search_b'])){
	
	
	$_SESSION['search']=$_GET['search'];
	$_SESSION['book_search']="Serch Results:";
	header('location:dashboard_std.php?page=books/allbooks'); exit;
}

	//Add Books";
	
	
	


//Add Books";
	
	if(isset($_POST['save'])){
		
		
	
	$name=$_POST['name'];
	$id=$_POST['id'];
	
		$author=$_POST['author'];
		$publication=$_POST['publication'];
		$date=$_POST['date'];
		$price=$_POST['price'];
		$librarian=$_POST['librarian'];


	
	$in=" insert into books(Name,ID,Author,Publication,purchase_date,price,Librarian) 
	values('$name','$id','$author','$publication','$date','$price','$librarian') ";
	
	$run=$connect->query($in);
	if($run == true) {
		
		$_SESSION['insert']="Book Added Successfully !";
	
	header('location:dashboard.php?page=books/addbooks'); exit();
	}
	
	}
	
	//Add Books";
	



	

// Edit // do not write this isset($_POST['submit/save']) code on a inside page like index.php?page=edit.
 // write it on main page index.php otherwise wont work.
 		
			
			
			// Edit Books
			
			
			
	if(isset($_POST['update'])){
		   

	
	$name=$_POST['name'];
	$id=$_POST['id'];
	
		$author=$_POST['author'];
		$publication=$_POST['publication'];
		$date=$_POST['date'];
		$price=$_POST['price'];
		$librarian=$_POST['librarian'];

	 
	$up=" UPDATE `books` SET `Name`='$name',`Author`='$author',`Publication`='$publication',`purchase_date`='$date',`Librarian`='$librarian',`Price`='$price'  WHERE `ID`='$id' ";
	
	$run=$connect->query($up);
	
	if($run==true){
		
		$_SESSION['up']="Informations Updated Successfully !";
	    header('location:dashboard.php?page=books/manbooks'); exit;
	
	}
}


			// Edit Books
			
			
			
			
			// Issue Books
			
			if(isset($_POST['search'])){
				
				$id=$_POST['student_id'];
				$sel="select * from students where ID='$id'";
				$run=$connect->query($sel);
			    $row=$run->fetch_assoc();
				
				$_SESSION['std_name']=$row['Name'];
				$_SESSION['id']=$row['ID'];
				
				header('location:dashboard_std.php?page=books/issuebooks'); exit;
				
				
			}
			
			if(isset($_POST['issue'])){
				
				$id=$_POST['student_id'];
				$name=$_POST['name'];
				$book_id=$_POST['book_id'];
				$date=$_POST['date'];
				
				$in=" insert into issue_books(Student_name,Student_id,Book_id,Issue_date) 
	            values('$name','$id','$book_id','$date') ";
	
				$run=$connect->query($in);
				
			   if($run==true){
				$_SESSION['issue']="Book requested for librarian's approval!";
				
				header('location:dashboard_std.php?page=books/issuebooks'); exit;
			   }
				
				
			}
			
			
			// Issue Books
			
			
			
			
			// Edit Student Profile
			

			
	if(isset($_POST['save_std_profile'])){
		   

	$photo=$_FILES['file']['name'];
	$name=$_POST['name'];
	$id=$_POST['id'];
	
		$email=$_POST['email'];
		$password=$_POST['password'];
		

	 if($photo=='')
	$up=" UPDATE `students` SET `Name`='$name',`Email`='$email',`Password`='$password'  WHERE `ID`='$id' ";
    else{
	$up=" UPDATE `students` SET `Name`='$name',`Email`='$email',`Password`='$password',`Photo`='$photo'  WHERE `ID`='$id' ";
    move_uploaded_file($_FILES['file']['tmp_name'],'images/'.$photo);
	}
	
	$run=$connect->query($up);
	
	if($run==true){
		
		$_SESSION['up']="Informations Updated Successfully !";
    header('location:dashboard_std.php?page=student/profile'); exit;	
	}
}


			// Edit Student Profile
			
			
			?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - XYZ Admin</title>
		
		
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />

		<link rel="stylesheet" href="css/font-awesome.min.css" />
		
		
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">

		
		<style type="text/css">
		<?php $image=  $_COOKIE['student_photo']; ?>
		
	.profile {
    background: url(images/<?php echo $image; ?> ) no-repeat;
    width: 226px;
    height: 35px;
    background-size: 50px 40px;
    background-position: center left;
		}		
		
		</style>
		

   </head>
   
   
	
	
	
	
    <body class="sb-nav-fixed">
	
	
	
	
               <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Cpanel</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fa fa-bars"></i></button
            ><!-- User's Name-->
           
		   <div class="navbar ml-auto">
		   
		   <h4 class=" profile h5 text-primary font-weight-bold font-italic text-right" >Welcome, 
		   <?php list($name)=explode(' ',$_COOKIE['student_name']); echo $name; ?></h4>
		   
		   
            <!-- Navbar-->
            <ul class="navbar-nav  ml-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mb-1 fa-2x fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="dashboard_std.php?page=student/profile&id=<?php echo $_COOKIE['student_id'];?>"><b>Profile</b></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php"><b>Logout</b></a>
                    </div>
                </li>
            </ul>
		   
		   </div>
		   
		   
        </nav>
		
		
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a  href="dashboard_std.php?page=dash_std" class="<?php if($_GET['page']=='dash_std'){ ?> text-light <?php } ?>font-weight-bold nav-link"
                                ><div class=" text-light sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <div class="sb-sidenav-menu-heading">Interface</div>
                           
						   
						   
						   
                         
                           
                                   
								   <a href="" class=" text-info font-weight-bold nav-link collapsed"  data-toggle="collapse" data-target="#layout">
								   <div class="sb-nav-link-icon "><i class="fa fa-book"></i></div>
								   Books <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div></a>
								   
								   
								   <div id="layout" class=" collapse <?php if($_GET['page']=='books/returnbooks' || $_GET['page']=='books/allbooks' || $_GET['page']=='books/issuebooks'){ ?> show  <?php } ?>   text-secondary"  > 
								   
								   <a href="dashboard_std.php?page=books/issuebooks" class="text-dark font-weight-bold font-italic nav-link  bg-light "> <span class="pl-4">Issue Books</span></a>
								   <a href="dashboard_std.php?page=books/returnbooks" class="text-dark font-weight-bold font-italic nav-link  bg-light "> <span class="pl-4">Return Books</span></a>
								   <a href="dashboard_std.php?page=books/allbooks" class="text-dark font-weight-bold font-italic nav-link  bg-light "> <span class="pl-4">All Books</span></a>
								   
								   </div>
								   
								 
								   
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
					<div class="row">
					<div class="col-2"></div>
					
					<div class="col-10">
					
				
                       
					   <?php 
					   
					   
					   if(!isset($_GET['page'])) $page='dash_std';
					   else $page = $_GET['page']; 
					 
					   
					   include $page.'.php';
					   
					   ?>
					   
					   
                        </div>
                    </div>
					</div>
					
					
					
					
					
					
					
					
					
					
					
                </main>
				
				</div>
                <footer class="py-4 bg-light mt-auto <?php if($_GET['page']=='dash_std'){  ?> fixed-bottom <?php } ?> ">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-darka m-auto">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div></div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>

		
		<script type="text/javascript">
		
		$(document).ready(function() {
  $('#summernote').summernote();
});
		
		</script>
		
		<script type="text/javascript">
		
		
		$(document).ready( function () {
			
			$('.menucontainer').click(function(event){
  event.stopPropagation();
});
			
			
    $('#myTable').DataTable();
} );
		
		</script>
		
    </body>
</html>
