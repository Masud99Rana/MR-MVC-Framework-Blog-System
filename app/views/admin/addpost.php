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
<h2>Add new article</h2>

<?php
	if (isset($postErrors)) {
		echo '<div style="color:red; border: 1px solid red; padding:5px 10px; margin:5px;">';
		foreach ($postErrors as $key => $value) {
			switch ($key) {
				case 'title':
					foreach ($value as $val) {
						echo "Title: ".$val."<br/>";
					}
					break;

				case 'content':
					foreach ($value as $val) {
						echo "Content: ".$val."<br/>";
					}
					break;

				case 'cat':
					foreach ($value as $val) {
						echo "Category: ".$val."<br/>";
					}
					break;
				
				default:
					break;
			}
		}
		echo '</div>';
	}
 ?>
	<form action="<?php echo BASE_URL;?>/Admin/addNewPost" method="post">
		<table>
			<tr>
				<td>Title</td>
				<td><input id="postinput" type="text" name="title" id="" ></td>
			</tr>
			<tr>

				<td>Content</td>
				<td>
					<!-- <textarea name="content" id="area1" cols="43"rows="15" ></textarea> -->
					<textarea name="content" id="" cols="43"rows="15" ></textarea>
		
		
				</td>
			</tr>
			<tr>
				<td>Category</td>
				<td>
					<select name="cat" class="cat" id="">
						<option >Select One</option>
						<?php foreach ($catlist as $key => $cat) {
						
						 ?>
						<option value="<?php echo $cat['id']; ?>"> <?php echo $cat['name']; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"  value="Save Article" id=""></td>
			</tr>
		</table>
	</form>