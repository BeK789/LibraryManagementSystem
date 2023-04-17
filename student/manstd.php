<h3 class="py-5  display-3 font-weight-bold">All Students</h3>

<h3 class="text-center font-weight-bold bg-light"><?php if(isset($_SESSION['del'])){ echo $_SESSION['del']; $_SESSION['del']=""; }?></h3>

<?php    
//include "database.php";

// geiing active / inactive:
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
	
		$sel=" select * from blog where ID = '$id' ";
		$run=$connect->query($sel);
		$row=$run->fetch_assoc();
		//print_r($row);
		}

		// geiing active / inactive:
?>

<div class=" float-right"></div>


<table class="display table table-bordered " id="myTable">
	<thead>
		<tr>
			<th>Student Name</th>
			<th>Roll No</th>
			<th>Username</th>
			<th>Email</th>
			<th>DOB</th>
			<th>Gender</th>
			<th>Phone</th>
			<th>Class</th>
			<th>Marks(GPA)</th>
			<th>Attendance</th>
			<th>Library Details</th>
			<th>Health Detials</th>
			<th>Hostel</th>
			<th>Actions</th>
		
		</tr>
	</thead>
	
	<tbody>
	
	
	<?php  
	
		
		$sel="select * from students";
		
		$res=$connect->query($sel);
		
		
		while($row=$res->fetch_assoc()){ ?>
			
			<tr>
			
			<td><?php echo '<b>'.$row['Name'].'</b>';?> <img class="my-1" style="width:100px;height:70px" src="<?php echo 'images/'.$row['Photo'];?>" alt="" /></td>
			<td><?php echo $row['ID'];?></td>
			<td><?php echo $row['Username'];?></td>
			<td><?php echo $row['Email'];?></td>
			<td><?php  echo $row['dob'];?></td>
			<td><?php  echo $row['gender'];?></td>
		<td><?php  echo $row['Phone'];?></td>
		<td><?php  echo $row['class'];?></td>
		
		<td>
		<?php  echo '<b>'.'Physics = '.'</b>'. $row['physics'].'<br>';
		echo '<b>'.'Chem =   '.'</b>'. $row['chemistry'].'<br>';
		echo '<b>'.'Maths =   '.'</b>'. $row['maths'].'<br>';
		echo '<b>'.'English = '.'</b>'. $row['english'].'<br>';?>
		</td>
		
		<td><?php  echo $row['attendance'];?></td>
		<td><?php  echo $row['library_details'];?></td>
		<td><?php  echo $row['health_details'];?></td>
		<td><?php  echo $row['scholar'];?></td>
			
			<td> 
			
		
	<a href="dashboard.php?page=student/editstudents&id=<?php echo $row['ID'];?>" class="btn text-light btn-success mb-1"> Edit</a>
	<a href="deleteblog.php?id=<?php echo $row['ID'];?>&filename=<?php echo $row['Photo'];?>" class="btn text-light btn-danger"> Delete</a>
			
			</td>
		</tr>
			
		<?php	
		}
		?>
		
	</tbody>
	
	
</table>


