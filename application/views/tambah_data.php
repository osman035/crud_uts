html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://localhost/ci-crud/stylesheets/styles.css">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
</head>    
<body>
	<?php include('header.php');?>

	<h2 class="createTitle">Tambah User</h2>
	<?php echo form_open('crud/create_user');?>
	<div class="addForm container">

	    <form role="form" style="width:400px; margin: 0 auto;">
	        

	        <div class="required-field-block">
	            <input type="text" placeholder="Name" name='name' id='name' class="form-control">
	            <div class="required-icon">
	                <div class="text">*</div>
	            </div>
	        </div>


	        <div class="required-field-block">
	            <input type="text" placeholder="Nim" name='nim' id='nim' class="form-control">
	            <div class="required-icon">
	                <div class="text">*</div>
	            </div>
	        </div>
	        
	        <div class="required-field-block">
	            <input type="text" placeholder="Email" name='email' id='email' class="form-control">
	            <div class="required-icon">
	                <div class="text">*</div>
	            </div>
	        </div>

	         <div class="required-field-block">
	            <input type="text" placeholder="Jenis Kelamin" name='jenis_kelamin' id='jenis_kelamin' class="form-control">
	            <div class="required-icon">
	                <div class="text">*</div>
	            </div>
	        </div>

	        <div class="required-field-block">
	            <input type="text" placeholder="Phone Number" name='phone_number' id='phone_number' class="form-control">
	            <div class="required-icon">
	                <div class="text">*</div>
	            </div>
	        </div>

	        <div class="required-field-block">
	            <input type="text" placeholder="Alamat Lengkap" name='alamat' id='alamat' class="form-control">
	            <div class="required-icon">
	                <div class="text">*</div>
	            </div>
	        </div>

	        <div class="required-field-block">
	            <input type="text" placeholder="Roles" name='assoc_roles' id='assoc_roles' class="form-control">
	            <div class="required-icon">
	                <div class="text">*</div>
	            </div>
	        </div>
	        
	        <button type="submit" value="submit" class="submit create btn btn-primary">add User</button>
	    </form>
	</div>

	<?php echo form_close(); ?>
