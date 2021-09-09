<?php include 'include/head.php'; ?>

<div class="logmid">
<table style="margin-left: 700px;height: 100px;width: 800px" cellspacing="50">
	<tr>
		<td colspan="2" style="font-size: 40px;">
			<b><u>Login:</u></b>
		</td>
	</tr>
	<tr>
		<td style="font-size: 28px;padding-top: 4px;">
			Username:
		</td>
		<td>
			<input type="text" name="user" placeholder="Type username here" style="height: 25px;width: 400px;font-size: 20px">
		</td>
	</tr>
	 <tr>
	 	<td style="font-size: 28px;">
	 		Password:
	 	</td>
	 	<td>
	 		<input type="password" name="pass" style="height: 25px;width: 400px;font-size: 20px;">
	 	</td>
	 </tr>
	  <tr>
	 	<td colspan="2">
	 		<input type="button" name="sub" value="SUBMIT" style="padding-top: 10px;padding-bottom: 10px;padding-left: 20px;padding-right: 20px;margin-left: 200px;font-size: 20px;font-weight: bolder;margin-top: -800px;background-color: whitesmoke">
	 	</td>
	 </tr>
</table>

</div>


<?php include ("include/footer.php");?>