<!DOCTYPE html>
<html>
<head>
	<title>TESTINGGG</title>
</head>
<body>

	<div>
		<table id="test">
			<tr>
				<th>id</th>
				<th>name</th>
				<th>price</th>
				<th>decription</th>
			<tr>

		<?php
			$contents_europeana = fopen("https://product-service-fp.herokuapp.com/api/products", "r");
			$json_europeana = stream_get_contents($contents_europeana);
			fclose($contents_europeana);


			$data_europeana = json_decode($json_europeana);
			// print $data_europeana->product[0]->name;

			foreach($data_europeana->product as $item) {
				print '<tr>';
				print '<td>'.$item->id.'</td>';
				print '<td>'.$item->name.'</td>';
				print '<td>'.$item->price.'</td>';
				print '<td>'.$item->description.'</td>';
				print '</tr>>';
			}
		?>	
		</table>
	</div>

	<div>
		<iframe name="hiddenFrame" width="0" height="0" border="0" style="display: none;"></iframe>
		<form action="https://product-service-fp.herokuapp.com/api/products/create" method="POST" name="test" target="hiddenFrame" onsubmit="window.location.reload()">
			<label>Name:		</label><input type="text" name="name"><br>
			<label>Description:	</label><input type="text" name="description"><br>
			<label>Image:		</label><input type="textr" name="image"><br>
			<label>Price:		</label><input type="number" name="price"><br>
			<label>Category:	</label><input type="number" name="category_id"><br>
			<input value="Submit" type="submit" onclick="submitform()">
		</form>
	</div>

</body>


<!-- <script>
	function submitform() {
		var formdata = JSON.stringify($("#test").serializeArray());
		$.ajax([
			type: "POST",
			url: "https://product-service-fp.herokuapp.com/api/products/create",
			data: $('#test').serialize(),
			success: function(response){},
			dataType: "json",
			contentType : "application/json"
		]);
	}
</script> -->

</html>
