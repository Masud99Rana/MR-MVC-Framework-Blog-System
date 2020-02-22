	<h2>Update Category</h2>

	<?php
		if (isset($catById)) {

			foreach ($catById as $value) {
	?>

	<form action="<?php echo BASE_URL;?>/Admin/updateCat/<?php echo $value['id']; ?>" method="post">
		<table>

			<tr>
				<td>Category Name</td>
				<td><input type="text" name="name" id="" value="<?php echo $value['name'] ?>" required="1"></td>
			</tr>
			<tr>
				<td>Category Title</td>
				<td><input type="text" name="title" id="" value="<?php echo $value['title'] ?>" required="1"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"  value="Update" id=""></td>
			</tr>
			<?php } } ?>
		</table>
	</form>

