 
 <h1 class="text-center bg-light my-5">Edit Blog Informations</h1>
 
 
 
 <?php   
 	include "database.php";
	
 if(isset($_GET['id'])){
	
	$id=$_GET['id'];
	include "database.php";
	
	//$up=" delete from category where ID='$id' ";
	
	$sel="select * from blog where ID='$id'";
	$run=$connect->query($sel);
	$row=$run->fetch_assoc();
	
	
	//$_SESSION['del']="Deleted Successfully !";
	
}




 
 ?>
 
 
 <?php  $cat=$object->getcat()?>
 
 
 
 
 
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data" >
			
		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Blog Title</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" value="<?php echo $row['Name'];?>" placeholder="Enter Name"  /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Category</strong></label></div>
					
		    		<div class="col-sm-7"> 
                    <select name="category" id="category" class="form-control">

					<option value=""  ></option>
					
					<?php  
					
					while($rows=$cat->fetch_assoc()){  ?>

					<option value="<?php echo $rows['ID']; ?>" <?php  if($row['Category_ID']==$rows['ID']){ ?> selected <?php } ?> >  <?php echo $rows['Name']; ?> </option>
					
					
					<?php } ?>

					</select>					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>ID</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group disabled" readonly type="text" name="id" value="<?php echo $row['ID'];?>" id="username" placeholder="Enter ID"  /> 
					* you cannot change ID.
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Content</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<textarea name="area" id="" cols="30" rows="10"><?php echo $row['Content'];?></textarea>
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="email"><strong>Status</strong></label></div>
					
		    		<div class="col-sm-7">
					
					<div class=" form-check"> 
						<input type="radio" class="form-check-input" name="status" <?php if ($row['Status']==1) {?> checked <?php } ?> value="1" /> Active 
					</div>
					
					<div class=" form-check"> 
						<input type="radio" class="form-check-input" name="status" <?php if ($row['Status']==0) {?> checked <?php } ?> value="0"  /> Inactive 
					</div>
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Image</strong></label></div>
					
		    		<div class="col-sm-5"> 
					<img style="width:200px;height:130px" src="<?php echo 'images/'.$row['Image'];?>" alt="" />
					</div>
					
					<div class="col-sm-2"> 
					Change: <input type="file" name="file" />
					</div>
					
		    	</div>
				
				
				
				
				
				<div class="clearfix"></div>
				
				<input type="submit" name="update" value="update" class="px-3 py-2 btn btn-secondary  font-italic" />
				
		    </form>