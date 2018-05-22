<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>selamat datang</h1>
	
	<table border="1px black">
		<tr>
			<th>person_id</th>
			<th>employee_number</th>
			<th>last_name</th>
			<th>sex</th>
			<th>last_name</th>
			<th>sex</th>
		</tr>
		@foreach($empl as $employee)
		<tr>
			<td>
				{{$employee -> person_id}}
			</td>
			<td>
				{{$employee -> employee_number}}
			</td>
			<td>
				{{$employee -> last_name}}
			</td>
			<td>
				{{$employee -> sex}}
			</td>
			<td>
				{{$employee -> marital_status}}
			</td>
			<td>
				{{$employee -> hire_date}}
			</td>
		</tr>
		@endforeach
		
	</table>
	
</body>
</html>