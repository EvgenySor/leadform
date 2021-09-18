<!DOCTYPE html>
<html lang="en">
	<head>
		<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Web-to-lead form</title>
		<!-- CSS bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	</head>
	<body>

		<div class="form-group">
			<label for="first_name">First Name</label>
			<input  id="first_name" maxlength="40" name="first_name" size="20" type="text" class="form-control"/>
			<label for="last_name">Last Name</label>
			<input  id="last_name" maxlength="80" name="last_name" size="20" type="text" class="form-control"/>
		</div>



		<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

			<input type=hidden name="oid" value="00D5g00000BjEwz">
			<input type=hidden name="retURL" value="http://google.com">
		<!--  ----------------------------------------------------------------------  -->
		<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
		<!--  these lines if you wish to test in debug mode.                          -->
		<!--  <input type="hidden" name="debug" value=1>                              -->
		<!--  <input type="hidden" name="debugEmail" value="sorgena2000@gmail.com">   -->
		<!--  ----------------------------------------------------------------------  -->
			<label for="company">Company</label><input  id="company" maxlength="40" name="company" size="20" type="text" /><br>
			
			<label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="text" /><br>
			<label for="phone">Phone</label><input  id="phone" maxlength="40" name="phone" size="20" type="text" /><br>
			Product:<select  id="00N5g00000OghtZ" name="00N5g00000OghtZ" title="Product">
				<option value="HK007A1">Carpets Hyundai</option>
				<option value="HK008A2">Carpets Kia</option>
				<option value="L005A1">Carpets Lada</option>
				<option value="R008A1">Carpets Renault</option>
				<option value="VAG010A2">Carpets Skoda</option>
				<option value="VAG009A1">Carpets Volkswagen</option>
				<option value="VAG007E4">CFNA</option>
				<option value="VAG008E5">CFNB</option>
				<option value="VAG005E2">CFW</option>
				<option value="VAG006E3">CWVA</option>
				<option value="VAG004E1">CZCA</option>
				<option value="HK006E2">G4FG</option>
				<option value="HK005E1">G4LC</option>
				<option value="R007E3">H4M</option>
				<option value="HK003C3">Hyundai Accent</option>
				<option value="HK004C4">Hyundai Solaris</option>
				<option value="R006E2">K4M</option>
				<option value="R005E1">K7M</option>
				<option value="HK001C1">Kia Rio</option>
				<option value="HK002C2">Kia Rio X-Line</option>
				<option value="L001C1">Lada Vesta</option>
				<option value="L002C2">Lada Xray</option>
				<option value="MI001A1">Phone holder Xiaomi</option>
				<option value="R001C1">Renault Logan</option>
				<option value="R002C2">Renault Logan Stepway</option>
				<option value="R003C3">Renault Sandero</option>
				<option value="R004C4">Renault Sandero Stepway</option>
				<option value="VAG003C3">Skoda Rapid</option>
				<option value="L004E2">VAZ-21129</option>
				<option value="L003E1">VAZ-21179</option>
				<option value="VAG002C2">Volkswagen Polo 2021</option>
				<option value="VAG001C1">Volkswagen Polo Sedan</option>
			</select><br>
			<input type="submit" name="submit">
		</form>
	</body>
</html>