  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
        new nicEditor().panelInstance('area1');
        new nicEditor({fullPanel : true}).panelInstance('area2');
        new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
        new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
        new nicEditor({maxHeight : 100}).panelInstance('area5');
  });
  //]]>
  </script>
<h2>Update article</h2>
<?php 

	foreach ($postbyid as $key => $value) {
		# code...
	


?>
	<form action="<?php echo BASE_URL;?>/Admin/updatePost/<?php echo $value['id']; ?>" method="post">
		<table>
			<tr>
				<td>Title</td>
				<td><input id="postinput" type="text" name="title" id="" value="<?php echo $value['title']; ?>" ></td>
			</tr>
			<tr>

				<td>Content</td>
				<td>
					<!-- <textarea name="content" id="area1" cols="43"rows="15" ></textarea> -->
					<textarea name="content" id="" cols="43"rows="15" ><?php echo $value['content']; ?></textarea>
		
		
				</td>
			</tr>
			<tr>
				<td>Category</td>
				<td>
					<select name="cat" class="cat" id="">
						<option >Select One</option>
						<?php foreach ($catlist as $key => $cat) {
						
						 ?>
						

						<option

						<?php 
							if ($value['cat'] == $cat['id']){ ?>

							selected= "selected"
						<?php } ?>
							
					
						 value="<?php echo $cat['id']; ?>"> <?php echo $cat['name']; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"  value="Update Article" id=""></td>
			</tr>
		</table>
	</form>

<?php	} ?>