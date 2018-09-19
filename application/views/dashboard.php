<section class="container">
	<div class="table-responsive">
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