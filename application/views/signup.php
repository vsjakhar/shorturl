<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1>Signup</h1>
			<form class="signup" method="post" action="<?php echo base_url(); ?>home/logedin">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="abc@example.com">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <!-- <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div> -->
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>