<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>


 <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		
		
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">

        
		<style type="text/css">
		
.area{ width:955px; height:1050px; 		
	.profile {
    background: url(images/'' ) no-repeat;
    width: 226px;
    height: 35px;
    background-size: 50px 40px;
    background-position: center left;
		}		
		
		</style>

 </head>
		
		
<body onload="window.print()">




<?php    
//include "database.php";

function head(){
	
	$data=' 
	<div class="area m-auto">
	
	<div class="text-center head">
  
  <h1 class="h2 font-weight-bold">Mawlana Bhashani Science and Technology University</h1>
  <h2 class="h4 font-weight-bold ">Department of Computer Science And Engineering</h2>

<p class="h6 font-italic  pb-4 ">The Reusult of 1st Year 1st Semester Final Examination</p>
  
  </div>

	
	<table class="display table table-bordered " id="">
	<thead>
		<tr>
			<th class="text-center">Student Name</th>
			<th class="text-center">ID</th>
			<th class="text-center">Department</th>
			<th class="text-center">GPA</th>
			
		
		</tr>
	</thead>
	
	<tbody>

	
	 ';
	return $data;
	
	
}


function foot(){
	
	
	$data=' 
   
   </tbody>
	
	
</table>
</div> 
	';
	return $data;
	
	
}


?>




  

  



	
	<?php  include '../database.php';
	
	$sel="select * from print_students";
		
		$res=$connect->query($sel);
		$total=$res->num_rows;
		$per=17;
		$rowno=1;
		$endpage=0;
		
		
	while($row=$res->fetch_assoc()){ 
	
	if(($rowno%$per) == 1) echo head(); ?>
			
			
			<tr>
			
			<td class="text-center " ><?php echo  $row['Name'];?></td>
			<td class="text-center"><?php echo  $row['ID'];?></td>
			<td class="text-center"><?php echo  $row['Department'];?></td>
			<td class="text-center"><?php echo  $row['GPA'];?></td>
			
		</tr>
			
       <?php if(($rowno%$per) == 0 || ($rowno) == $total){ $endpage++; echo foot(); 
	   echo '<p class="font-weight-bold font-italic mb-5 text-center">Page ->'.$endpage;'</p>'; }
		$rowno++;  
		
	      } ?>
		
	





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		
		</body> </html>
