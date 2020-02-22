<link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>




<h2>Article List</h2>



	<?php 
	if(!empty($_GET['msg'])) {
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value) {
			echo "<span style='color:blue; font-weight:bold'>".$value."</span>";
		}
	}

	?>


<table class="display" id="myTable" data-page-length='5'>
	<thead>
	<tr>
		<th width="5%">No</th>
		<th width="10%">Title</th>
		<th width="35%">Content</th>
		<th width="15%">Category</th>
		<th width="25%">Action</th>
	</tr>
	</thead>
	<tbody>
	<?php 
		$i =0;
		foreach ($listPost as $key => $value) {
			$i++;
		
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $value['title']; ?></td>
		<td>
		<?php
		 
		 	$text = $value['content'];
			if (strlen($text) > 40) {
				$text = substr($text, 0, 40);
				echo $text;
			} else {
				echo $text;
			}
			
		 
		 ?></td>
		<td>
			<?php 
			foreach ($catlist as $key => $cat) {
				if ($cat['id']== $value['cat']) {
					echo $cat['name']; 
				}
			}

			?>
				
		</td>
		<?php
			if (Session::get('level')==1) {
		?>
		<td>
			<a href="<?php echo BASE_URL;?>/Admin/editArticle/<?php echo $value['id']; ?>">Edit</a> ||
			<a onclick="return confirm('Are you sure to delete??');" href="<?php echo BASE_URL;?>/Admin/deleteArticle/<?php echo $value['id']; ?>">Delete</a>
		</td>
		<?php }else{ ?>
			<td>
				Not Permitted
			</td>

		<?php } ?>
	</tr>
<?php  } ?>
</tbody>
</table>


<script>
	$(document).ready( function () {
    $('#myTable').DataTable();
} );

</script>
