<?php 

include "../include/db.php";

include "./include/admin_header_nav.php";

include "./include/add_ons.php";

?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<div>
				<h2>Add User</h2>
			</div>

			<form method="POST" action="add_post.php" enctype="multipart/form-data">
	           <div class="form-group">
	              <label for="name">Name</label>
	              <input type="text" class="form-control">
	            </div>
	            <div class="form-group">
	              <label for="email">Email</label>
	              <input type="email" class="form-control">
	            </div>
	            <div class="form-group">
	              <label for="password">Password</label>
	              <input type="password" class="form-control">
	            </div>
	            <div class="form-group">
	              <label for="password2">Confirm Password</label>
	              <input type="password" class="form-control">
	            </div>

	             <div class="modal-footer">
			          <button class="btn btn-success">Add User</button>
			      </div>
	           
	         </form>


		</div>
	</div>
</div>


<!-- FOOTER -->
   <?php include "./include/admin_footer.php"; ?>

