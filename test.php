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
				<th>image</th>
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
					print '<td>'.$item->image.'</td>';
					print '</tr>';
				}

				print '<br><br> The result below will be for testing<br>';
				//test section
				$id = 1;
				$test_url = "https://product-service-fp.herokuapp.com/api/product?id={$id}";
				$test_datas = fopen($test_url, "r");
				$json_test = stream_get_contents($test_datas);
				fclose($test_datas);


				$data_test = json_decode($json_test);
				print $data_test->result[0]->name;
				print '<hr>';
			?>	
		</table>
	</div>

	<div>
	<br><br><p>The form below will be for testing purposes only</p><br>
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
<!-- 
	<p>check console log plss</p> -->

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

<script>
// var url = new URL('http://localhost:8000/api/product')

// var params = {id:1} // or:

// url.search = new URLSearchParams(params).toString();
// 	fetch(url)
// 	.then(data => data.text())
// 	.then((text) => {
// 		console.log('request succeeded with JSON response', text)
// 		var data = JSON.parse(text)
// 		var success = data.success
// 		var id = data.result[0].id
// 		if (success == true){
// 			var d = new Date();
// 			d.setTime(d.getTime() + (24*3600));
// 			var expires = "expires="+ d.toUTCString();
// 			document.cookie = "id" + "=" + id + ";" + expires + ";path=/";
// 			console.log("successful?")
// 		}
// 	}).catch(function (error) {
// 		console.log('request failed', error)
// 	});


// var url = new URL('http://localhost/web_tutorial/fp/backend/user/api/login.php')

// var params = {username: "vynsss", password: "123456"} // or:

// url.search = new URLSearchParams(params).toString();
// 	fetch(url)
// 	.then(data => data.text())
// 	.then((text) => {
// 		console.log('request succeeded with JSON response', text)
// 		var data = JSON.parse(text)
// 		var success = data.success;
// 		var id = data.session.id;
// 		// console.log(id)
// 		if (success == true){
// 			var d = new Date();
// 			d.setTime(d.getTime() + (24*3600));
// 			var expires = "expires="+ d.toUTCString();
// 			document.cookie = "user_id" + "=" + cvalue + ";" + expires + ";path=/";
// 			console.log("successful?")
// 		}
// 	}).catch(function (error) {
// 		alert('request failed', error)
// 	});
</script>

</html>
