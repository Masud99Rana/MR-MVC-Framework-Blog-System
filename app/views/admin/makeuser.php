	<h2>Add New User</h2>
	<form action="<?php echo BASE_URL;?>/User/addNewUser" method="post">
		<table>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="username" id="" required="1"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" id="" required="1"></td>
			</tr>
			<tr>
				<td>User Role</td>
				<td>
					<select name="level" id="" class="cat">
						<option value="">Select User Role</option>
						<option value="2">Author</option>
						<option value="3">Contributor</option>
					</select>

				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"  value="Make User" id=""></td>
			</tr>
		</table>
	</form>