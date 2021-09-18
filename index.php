<!DOCTYPE html>
<html lang="en">
	<head>
		<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Web-to-lead form</title>
		<!-- CSS bootstrap -->
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<div class="container">
			<!-- code here -->
			<div class="card">
				<div class="card-image">	
					<h2 class="card-heading">
						Salesforce
						<small>Fill in the fields to receive feedback</small>
					</h2>
				</div>
				<form class="card-form" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
					<input type=hidden name="oid" value="00D5g00000BjEwz">
					<input type=hidden name="retURL" value="https://leadform2.herokuapp.com">
					<div class="input">
						<input id="first_name" maxlength="40" name="first_name" size="20" type="text" class="input-field" required/>
						<label for="first_name">First Name</label>
					</div>
					<div class="input">
						<input id="last_name" maxlength="80" name="last_name" size="20" type="text" class="input-field" required/>
						<label for="last_name">Last Name</label>
					</div>
					<div class="input">
						<input id="company" maxlength="40" name="company" size="20" type="text" class="input-field" required/>
						<label for="company">Company</label>
					</div>
					<div class="input">
						<input id="email" maxlength="80" name="email" size="20" type="email" class="input-field" required/>
						<label for="email">Email</label>
					</div>
					<div class="input">
						<input id="phone" maxlength="40" name="phone" size="20" type="tel" class="input-field" required pattern="^\+375 \((17|29|33|44)\) [0-9]{3}-[0-9]{2}-[0-9]{2}$" placeholder="format: +375 (33) 302-66-60" />
						<label for="phone">Phone</label>
					</div>
					<div class="input">
						<select id="00N5g00000OghtZ" name="00N5g00000OghtZ" title="Product" class="input-field">
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
						</select>
						<label>Product:</label>
					</div>
					<div class="action">
						<input type="submit" name="submit" class="action-button">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
