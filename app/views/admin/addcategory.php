	<h2>Add New Category</h2>
	<form action="<?php echo BASE_URL;?>/Admin/insertCategory" method="post">
		<table>
			<tr>
				<td>Category Name</td>
				<td><input type="text" name="name" id="" required="1"></td>
			</tr>
			<tr>
				<td>Category Title</td>
				<td><input type="text" name="title" id="" required="1"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"  value="Save" id=""></td>
			</tr>
		</table>
	</form>