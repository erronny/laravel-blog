<!DOCTYPE html>
<html>
<head>
<title>Student Management | Add</title>
</head>
<body>
<form action = "/create" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>First Name</td>
<td><input type='text' name='firstname' /></td>
<tr>
<td>Last Name</td>
<td><input type="text" name='lastname'/></td>
</tr>
<tr>
<td>City Name</td>
<td>
<select name="city">
<option value="bbsr">Bhubaneswar</option>
<option value="cuttack">Cuttack</option>
</select></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name='email'/></td>
</tr>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Add student"/>
</td>
</tr>
</table>
</form>
</body>
</html>