<section class="container">
	<div class="row" style="margin: 20px;">
		<div class="col-md-12">
			<button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal"> Add New Url </button>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<?php if($this->session->success){ ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <?php echo $this->session->success; ?>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
			<?php } ?>
			<?php if($this->session->error){ ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <?php echo $this->session->error; ?>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
			<?php } ?>
		</div>
	</div>

	<div class="table-responsive" style="margin: 20px;">
		<table class="table table-striped table-sm">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Short Url</th>
		      <th scope="col">Full Url</th>
		      <th scope="col">Views</th>
		      <th scope="col">Date</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  		if(!empty($list))
		  			foreach ($list as $key => $value) {
		  	?>
			    <tr>
			      <th scope="row"><?php echo $key+1; ?></th>
			      <td><a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['shorturl']; ?></a></td>
			      <td><?php echo $value['url']; ?></td>
			      <td><?php echo $value['views']; ?></td>
			      <td><?php echo $value['timestamp']; ?></td>
			      <td><button class="btn btn-outline-primary btn-sm">EDIT</button> <button class="btn btn-outline-danger btn-sm">Delete</button> <button class="btn btn-outline-info btn-sm">View</button></td>
			    </tr>
			<?php } ?>
		  </tbody>
		</table>
	</div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="" method="post">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add New Url</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="form-group">
			    <label for="exampleInputEmail1">Full Url</label>
			    <input name="url" type="url" class="form-control" id="exampleInputEmail1" aria-describedby="urlHelp" placeholder="http://example.com">
			    <small id="urlHelp" class="form-text text-muted">We'll record all activity of this url.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Short Url</label>
			    <input name="shorturl" type="text" class="form-control" id="exampleInputPassword1" placeholder="my-custom-url">
			    <small id="emailHelp" class="form-text text-muted">Fill this if you want your custom Url.</small>
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
	  </form>
    </div>
  </div>
</div>