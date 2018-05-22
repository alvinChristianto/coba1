<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>selamat datang</h1>
	
	<table border="1px black">
		<tr>
			<th>hobby</th>
			<th>employee_number</th>
			<th>created_at</th>
			<th>updated_at</th>
			 
		</tr>
		@foreach($hobb as $hobby)
	

		<tr>
			<td>
				{{$hobby -> hobby}}
			</td>
			<td>
				{{$hobby -> employee_number}}
			</td>
			<td>
				{{$hobby -> created_at}}
			</td>
			<td>
				{{$hobby -> updated_at}}
			</td>
		
		</tr>
		@endforeach
		
	</table>
	
</body>
</html>