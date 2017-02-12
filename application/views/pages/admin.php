<form action="<?php echo base_url();?>index.php/admin/enter_job" method="post">
	<fieldset class="form-group">
		<label for="formGroupExampleInput">City</label>
		<input type="text" class="form-control" name="city_input" id="city_input" placeholder="City ...">
	</fieldset>
	<fieldset class="form-group">
		<label for="formGroupExampleInput2">Company</label>
		<input type="text" class="form-control" name="company_input" id="company_input" placeholder="Company ...">
	</fieldset>
	<fieldset class="form-group">
		<label for="formGroupExampleInput2">Job Description</label>
		<textarea type="text" class="form-control" name="description_input" id="description_input" placeholder="Description"></textarea>
	</fieldset>
	<button name="add_button" id="add_button" class="btn btn-success btn-block" type="submit">Add Job!</button>
</form>