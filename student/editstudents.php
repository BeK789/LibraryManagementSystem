 
 <h1 class="text-center bg-light my-5">Edit Student</h1>
 
 
 
 <?php   
 	include "database.php";
	
 if(isset($_GET['id'])){
	
	$id=$_GET['id'];
	
	
	//$up=" delete from category where ID='$id' ";
	
	$sel="select * from students where ID='$id'";
	$run=$connect->query($sel);
	$row=$run->fetch_assoc();
	
	
	//$_SESSION['del']="Deleted Successfully !";
	
}




 
 ?>
 
 
 
 
 
 
 
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data" >
			
			
			<div class="row">
				<div class="col-sm-9">
				
		    	<div class="row form-group">
		    		<div class="col-sm-2"><label for="name"><strong>Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" value="<?php echo $row['Name'];?>" placeholder="Enter Name"  /> 
					
					</div>
					
		    	</div>
				
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="id"><strong>Roll No</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="id" id="id" placeholder="Enter ID "value="<?php echo $row['ID'];?> " readonly /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="author"><strong>Email</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="email" id="author" placeholder="Enter author name"  value="<?php echo $row['Email'];?>" /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="phone"><strong>Gender</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<select  class="form-control" name="gender" >
					<option value="Male"> Male </option>
					<option value="Female"> Female </option>
					</select>
					
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="phone"><strong>DOB</strong></label></div>
					
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="date" name="dob" id="phone" placeholder="Enter phone"  value="<?php echo $row['dob'];?>" /> 
					
					</div>
					
		    	</div>
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="phone"><strong>Phone</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="phone" id="phone" placeholder="Enter phone"  value="<?php echo $row['Phone'];?>" /> 
					
					</div>
					
		    	</div>
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="phone"><strong>Class</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<select  class="form-control" name="class" >
					<option value="11"> 11 </option>
					<option value="12"> 12 </option>
					</select>
					
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-3"><label for="phone"><strong>Marks</strong></label></div>
					
		    		<div class="col-sm-5"> 
					<b> Physics:</b> <input class="form-control form-group" type="text" name="physics" id="physics" placeholder="physics"  value="<?php echo $row['physics'];?>" /> 
					 <b>Chemistry:</b> <input class="form-control form-group" type="text" name="chemistry" id="phone" placeholder="chemistry"  value="<?php echo $row['chemistry'];?>" /> 
					 <b>Maths:</b> <input class="form-control form-group" type="text" name="maths" id="phone" placeholder="maths"  value="<?php echo $row['maths'];?>" /> 
					 <b>English:</b> <input class="form-control form-group" type="text" name="english" id="phone" placeholder="english"  value="<?php echo $row['english'];?>" /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="phone"><strong>Library Details</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="library_details" id="phone" placeholder="library_details"  value="<?php echo $row['library_details'];?>" /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="phone"><strong>Attendance</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="attendance" id="phone" placeholder="Enter attendance"  value="<?php echo $row['attendance'];?>" /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="phone"><strong>Hostel</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="scholar" id="phone" placeholder="Enter scholar"  value="<?php echo $row['scholar'];?>" /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="phone"><strong>Health Details</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="health_details" id="phone" placeholder="Enter health_details"  value="<?php echo $row['health_details'];?>" /> 
					
					</div>
					
		    	</div>
				
				</div>
			
				
				
				<div class="col-sm-3 mt-5">
		    		<div class="col-sm-2 my-2"><label for=""><strong class="font-italic bg-info px-5 py-1" >Photo</strong></label></div>
					
					<div class=" mb-3 bg-dark col-sm-7 text-center text-light"> 
					<img style="width:250px"src="images/<?php echo $row['Photo']; ?>" alt="" />
					</div>
					
									<input type="file" name="file" />  

					
		    	</div>
				
				</div>
			
				
				
			
				
				
				
				
				
				
				
				
				
				<input type="submit" name="save_std" value="Save" class="px-5 py-2 btn btn-dark text-primary font-weight-bold font-italic" />
				
		    </form>
			
			<div class="clearfix my-5"></div>