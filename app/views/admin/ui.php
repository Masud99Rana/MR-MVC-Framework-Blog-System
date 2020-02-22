<h2>Ui Option</h2>
<?php 
	if(!empty($_GET['msg'])) {
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value) {
			echo "<span style='color:blue; font-weight:bold'>".$value."</span>";
		}
	}

?>
	<form action="<?php echo BASE_URL;?>/Admin/changeUI" method="post">
		<table>
			<tr>
				<td>Change Background Color</td>
				<td><input type="color" name="color" id="" required="1"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"  value="Save" id=""></td>
			</tr>
		</table>
	</form>