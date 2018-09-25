<form action="" method="POST">
	<table>
		<tr>
			<td>
				Nama	
			</td>
			<td>
					:
			</td>
			<td>
				<input type="text" name="nama">
			</td>
		</tr>
		<tr>
			<td>
				Hobby
			</td>
			<td>
					:
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Makan">Makan 
				<input type="checkbox" name="hobi[]" value="Minum">Minum 
				<input type="checkbox" name="hobi[]" value="Tidur">Tidur 
				<input type="checkbox" name="hobi[]" value="Browsing">Browsing <br><br>
			</td>
		</tr>
		<tr>
			<td>
				Gambar
			</td>
			<td>
					:
			</td>
			<td>
				<input type="file" name="gambar">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="Input">
			</td>	
		</tr>

	</table>
</form>


<!-- <?php
	//if (isset($_POST['submit'])) {
		//$nama	: $_POST['nama'];
		//$hobby	: $_POST['hobi'];
		//# code...
	}
	
?> -->