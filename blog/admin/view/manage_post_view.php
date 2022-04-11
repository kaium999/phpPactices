Manage Post View Page
<?php
	$postData=$object->displayPost();

?>
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>Post ID</th>
				<th>Post Title</th>
				<th>Post Content</th>
				<th>Post Catagory</th>
				<th>Post Author</th>
				<th>Post Date</th>
				<th>Post Comment Count</th>
				<th>Post Summary</th>
				<th>Post Tag</th>
				<th>Post Status</th>
				<th>Action</th>
				
			
			</tr>
		
		</thead>
		<tbody>
			<?php while($data=mysqli_fetch_assoc($postData)){?>
			<tr>
				<td><?php echo $data['post_id']?></td>
				<td><?php echo $data['post_title']?></td>
				<td><?php echo $data['post_content']?></td>
				<td><?php echo $data['cat_name']?></td>
				<td><?php echo $data['post_author']?></td>
				<td><?php echo $data['post_date']?></td>
				<td><?php echo $data['post_comment_count']?></td>
				<td><?php echo $data['post_summary']?></td>
				<td><?php echo $data['post_tag']?></td>
				<td><?php echo $data['post_status']?></td>
				<td>
					<a class="btn btn-primary" href="manage_post_edit.php?status=edit&&id=<?php echo $data['post_id'];?>">edit</a>
					<a class="btn btn-danger" href="#">Delete</a>
				</td>
			</tr>
			<?php }?>
		</tbody>
	
	</table>


</div>