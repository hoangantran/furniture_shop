<!DOCTYPE html>
<html>
<head>
	<title>API</title>
</head>
<body>
	<h1 style="font-family: sans-serif; text-align: center;">API</h1>
	<table border="1" style="border-collapse: collapse;">
		<tr>
			<td width="1300px;">
				<p>localhost:8080/tttn/public/product/read/all</p>
			</td>
			<td width="100px;" style="text-align: center;">
				<button style="background-color: yellow; border-radius: 3px; border: solid 1px;"><a href="api/product/read/all" style="text-decoration: none; color: black"><b>GET</b></a></button>
			</td>
		</tr>

		<tr>
			<td width="1300px;">
				<p> localhost:8080/tttn/public/product/read/{id}</p>
			</td>
			<td width="100px;" style="text-align: center;">
				<button style="background-color: yellow; border-radius: 3px; border: solid 1px;"><a href="api/product/read/{{ 11 }}" style="text-decoration: none; color: black"><b>GET</b></a></button>
			</td>
		</tr>

		<tr>
			<td width="1300px;" height="50px;">
				<p> localhost:8080/tttn/public/category/read/all</p>
			</td>
			<td width="100px;" style="text-align: center;">
				<button style="background-color: yellow; border-radius: 3px; border: solid 1px;"><a href="api/category/read/all" style="text-decoration: none; color: black"><b>GET</b></a></button>
			</td>
		</tr>

		<tr>
			<td width="1300px;" height="50px;">
				<p> localhost:8080/tttn/public/category/read/{id}</p>
			</td>
			<td width="100px;" style="text-align: center;">
				<button style="background-color: yellow; border-radius: 3px; border: solid 1px;"><a href="api/category/read/{{ 1 }}" style="text-decoration: none; color: black"><b>GET</b></a></button>
			</td>
		</tr>

		<tr>
			<td width="1300px;" height="50px;">
				<p> localhost:8080/tttn/public/user/read/all</p>
			</td>
			<td width="100px;" style="text-align: center;">
				<button style="background-color: yellow; border-radius: 3px; border: solid 1px;"><a href="api/user/read/all" style="text-decoration: none; color: black"><b>GET</b></a></button>
			</td>
		</tr>

		<tr>
			<td width="1300px;" height="50px;">
				<p> localhost:8080/tttn/public/user/read/{id}</p>
			</td>
			<td width="100px;" style="text-align: center;">
				<button style="background-color: yellow; border-radius: 3px; border: solid 1px;"><a href="api/user/read/{{ 1 }}" style="text-decoration: none; color: black"><b>GET</b></a></button>
			</td>
		</tr>

	</table>

</body>
</html>