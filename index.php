<!DOCTYPE html>
<html>
<head>
	<title>TESTINGGG</title>
</head>
<body>

	<table id="test">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>price</th>
			<th>decription</th>
		<tr>

	<?php
		$contents_europeana = fopen("http://localhost:8000/api/products", "r");
		$json_europeana = stream_get_contents($contents_europeana);
		fclose($contents_europeana);


		$data_europeana = json_decode($json_europeana);
		print $data_europeana->product[0]->name;

		foreach($data_europeana->product as $item) {
			print '<tr>';
		    print '<td>'.$item->id.'</td>';
		    print '<td>'.$item->name.'</td>';
		    print '<td>'.$item->price.'</td>';
		    print '<td>'.$item->description.'</td>';
			print '</tr>>';
		}
	?>	
	</table>>

	<script type="text/javascript">
		
		console.log("IS STRESSS");
	</script>>

</body>


<!-- <script>
    let count = 0;
    $(document).ready(function () {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "http://localhost:8000/api/products",
            success: function (data) {
                console.log(data);
                $.each(data['product'], function (key, val) {
                    $('#test').append(
                        "<tr><td>" + val.Key + "</td><td>" + val.id + "</td><td>" + val.name + "</td></tr>" + val.description + "</td></tr>" + val.price + "</td></tr>"
                    );
                });
            }
        });
    });
</script> -->

<!-- <script type="text/javascript">
	fetch('http://localhost:8000/api/products').then(response=>{          
		var data = response;                    
		return data.json();  //Parsing the data into json
	}).then(contents=>{
		console.log("Iterating through the 'result' array of objects to be displayed in table");
		_.forEach(contents.result,function(value,key){
		tableHtml=tableHtml+'<tr>'+'<td>'+value.movie_names+'</td>'+'</tr>';
  })
</script>> -->

<script type="text/javascript">
	fetch('http://localhost:8000/api/products')
		  .then(response => response.json())
		  .then(data => console.log(data))

</script>>

</html>>
