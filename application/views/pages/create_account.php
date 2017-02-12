<form class="form-signin" method="post" action="<?php echo base_url();?>index.php/create/create_user" name="create-account-form" onsubmit="return validateForm()">
	<h2 class="form-signin-heading">Create an account</h2>
	<label for="inputFirstName" class="sr-only">First Name</label>
	<input type="text" name="new_firstname" id="new_firstname" class="form-control" placeholder="First Name" required>
	<label for="inputLastName" class="sr-only">Last Name</label>
	<input type="text" name="new_lastname" id="new_lastname" class="form-control" placeholder="Last Name" required>
	<label for="inputEmail" class="sr-only">Email</label>
	<input type="email" name="new_username" id="new_username" class="form-control" placeholder="Email" required>
	<label for="inputPassword" class="sr-only">Password</label>
	<input type="password" name="new_password1" id="new_password1" class="form-control" placeholder="Password" required>
	<label for="inputPassword2" class="sr-only">Re-type Password</label>
	<input type="password" name="new_password2"id="new_password2" class="form-control" placeholder="Re-type Password" required>
	Please choose a job category so employers in that respective field can see your resume.<br>
	<select name="jobCategoryDD" required>
		<option value="accounting">Accounting</option>
		<option value="admin">Admin & Clerical</option>
		<option value="automotive">Automotive</option>
		<option value="creative">Arts & Creative</option>
		<option value="banking">Banking</option>
		<option value="customer">Customer Service</option>
		<option value="engineering">Engineering</option>
		<option value="executive">Executive</option>
		<option value="labor">General Labor</option>
		<option value="government">Government</option>
		<option value="health">Health Care</option>
		<option value="hospitality">Hospitality</option>
		<option value="hr">Human Resources</option>
		<option value="it">Information Technology</option>
		<option value="manufacturing">Manufacturing</option>
		<option value="pt">Part Time</option>
		<option value="restaurant">Restaurant</option>
		<option value="retail">Retail</option>
		<option value="sales">Sales & Marketing</option>
		<option value="trades">Skilled Labor & Trades</option>
		<option value="transportation">Transportation</option>
	</select>
	<div class="checkbox">
		<label>
			<input type="checkbox" required><a href="privacy-policy.html">Have Read the Privacy Policy</a>
		</label>
	</div>
	<button id="login_button" class="btn btn-success btn-block" type="submit">Create Account</button>
</form>