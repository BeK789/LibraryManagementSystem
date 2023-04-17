<h3 class="py-5  display-3 font-weight-bold text-center">Books Issue Requests</h3>

<h3 class="text-center font-weight-bold bg-light">

<?php if(isset($_SESSION['del'])){ echo $_SESSION['del']; $_SESSION['del']=""; }?>
<?php if(isset($_SESSION['up'])){ echo $_SESSION['up']; $_SESSION['up']=""; }?>


</h3>



<?php    
include "database.php";

// getting active / inactive:
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
	
		$sel=" select * from category where ID = '$id' ";
		$run=$connect->query($sel);
		$row=$run->fetch_assoc();
		print_r($row);
		
		if($row['Status']==1){
			$up= "UPDATE `category` SET `Status`= '0' WHERE `ID`= '$id' ";
			$res=$connect->query($up);
			
		}
		else{
			$up= "UPDATE `category` SET `Status`= '1' WHERE `ID`= '$id' ";
			$res=$connect->query($up);
			
		}
		
		}

?>




<table class="display table table-bordered " id="myTable">
	<thead>
		<tr>
			<th>Book Name <i class="fa fa-book"></i></th>
			<th>Book ID</th>
			<th>Student Name</th>
			<th>Publication</th>

			<th>Librarian</th>
			<th>Actions</th>
		
		</tr>
	</thead>
	
	<tbody>
	
	
	<?php  
	
		
		$sel="SELECT *
FROM issue_books
INNER JOIN books
ON issue_books.Book_id = books.ID;";
		
		$res=$connect->query($sel);
		
		
		while($row=$res->fetch_assoc()){ ?>
			
			<tr>
			
			<td><?php echo $row['Book_Name'];?></td>
			<td><?php echo $row['Book_id'];?></td>
			<td><?php echo $row['Student_name'];?></td>
			<td><?php echo $row['Publication'];?></td>
			
			<td><?php echo $row['Librarian'];?></td>
			
			<td> 
			<?php 
         if($row['status']==1) { ?>
			<a  class=" disabled btn bg-info"> Approved</a> <?php }  else { ?>
			
			<a href="approve.php?id=<?php echo $row['id'];?>" class="btn bg-info"> Approve</a> <?php } ?>
			
			</td>
		</tr>
			
		<?php	
		}
		?>
		
	</tbody>
	
	
</table>


