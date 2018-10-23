<doctype html>
<html>
<head>
	<title> Registration Page </title>
</head>
<body>
	<form method="post" action="chk.php">
		<fieldset>
			<legend>User Login</legend>
			<table>
				<tr>
					<td> Id</td>
					<td> <input type = "text" name="id"></td>
				</tr>

				
				<tr>
					<td>Password</td>
					<td><input type = "password" name="password"></td>
				</tr>
				
				
				<tr>
					<td>Confirm Password</td>
					<td><input type = "password" name="Copass"></td>
				</tr>

				<tr>
					<td> Name</td>
					<td> <input type = "text" name="username"></td>

				</tr>
				<tr>
					<td>Email</td>
					<td><input type = "text" name="email"></td>
					
				</tr>

				<tr>
					<td> User Type </td>
					<td><select name="user">
 						 <option value="Admin" >Admin</option>
 						 <option value="User" >User</option>

 						 
  
						</select></td>
				</tr>
				<td><hr>

				</td>

 						
				<tr>
					<tr>
						 <td><input type = "submit" name="submit">
 						     <a href="login.php">login</a>
 						 </td>
					</tr>
					
				</tr>
			</table>

		</fieldset>
	</form>
</body>
</html>


	