<!DOCTYPE html>
<html lang="en-US">

	<?php
    include_once("imports.php");
  ?>

	<body>

		<?php
    	include_once("header.php");
  	?>

		<div class="subheader">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="subheader-info">
							<h1 class="overflow-hidden">Contact</h1>
						</div>
		    	</div>
	    	</div>
    	</div>
		</div>
		
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9">
						<form method="POST" onsubmit="validate()"action="">
							<div class="row mt-5">            
								<div class="col-md-4 my-2">
									<label for="fullname">Full Name *</label>
									<input type="text" value="" id="fullname" name="name" class="form-control" required>
								</div>
								<div class="col-md-4 my-2">
									<label for="email">Email *</label>
									<input type="email" value="" name="email" id="email" class="form-control" required>
								</div>
								<div class="col-md-4 my-2">
									<label for="phone">Phone Number</label>
                  					<input type="tel" value="" id="phone" name="phone" pattern="[0-9]{10}" class="form-control">
								</div>
								<div class="col-md-12 my-2">
									<label for="message">Message *</label>
									<textarea name="message" rows="6" class="form-control" id="message" required></textarea>
								</div>
							</div>

								<div class="text-center">
									<button type="submit" class="bg-success bg-gradient text-white border-0 rounded mt-3 py-2 w-50">Send</button>
								</div>
						</form>
				</div>
			</div>
		</div>

		<?php
			include_once("footer.php");
		?>
	</body>
</html>