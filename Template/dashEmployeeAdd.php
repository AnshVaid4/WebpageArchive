<?php include "include/head.php"; ?>

<div class="main">
<?php include("include/dashIncludeMenu.php");?>
<div class="right">
	<table cellspacing="10px" style="width: 800px;">
		<tr style="width: 800px;">
			<td colspan="2" style="font-size: 40px;"><u>Add Employee:</u></td>
		</tr>
		<tr>
			<td style="font-size: 30px;width: 200px;">Emp name</td>
			<td><input type="text" name="name" style="height: 35px; width: 400px;font-size: 20px;">
		</tr>
		<tr>
			<td style="font-size: 30px;width: 200px;">Emp Desig</td>
			<td><select name="opt" style="height: 25px; width: 404px;height: 35px;font-size: 20px;">
				<option value="zm">General Manager</option>
				<option value="zm">Zonal Manager</option>
				<option value="ceo">CEO</option>
				<option value="rec">Receptionist</option>
				<option value="sweeper">Sweeper</option>
		</select>
		</tr>
		<tr>
			<td style="font-size: 30px;width: 200px;">Salary</td>
			<td><input type="number" name="sal" style="height: 35px;font-size: 20px; width: 400px;">
		</tr>
		<tr>
			<td style="font-size: 30px;width: 200px;">City</td>
			<td><input type="text" name="city" style="height: 35px; font-size: 20px;width: 400px;">
		</tr>
		<tr>
			<td style="font-size: 30px;width: 200px;">State</td>
			<td><input type="text" name="state" style="height: 35px;font-size: 20px; width: 400px;">
		</tr>
		<tr>
			<td colspan="2"><input type="button" name="save" value="SAVE" style="margin-left: 150px;padding-left: 20px;padding-right: 20px;padding-top: 10px;padding-bottom: 10px;font-size: 20px;margin-top: 10px;margin-left: 210px;background-color: silver;font-weight: bold;"></td>
		</tr>
	</table>
</div>
</div>

<?php include "include/footer.php"; ?>