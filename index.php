<?php
# This function reads your DATABASE_URL config var and returns a connection
# string suitable for pg_connect. Put this in your app.
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}

# Here we establish the connection. Yes, that's all.
$pg_conn = pg_connect(pg_connection_string_from_database_url());

# Now let's use the connection for something silly just to prove it works:
$result = pg_query($pg_conn, "SELECT name, productcode FROM salesforce.product2");

if (!pg_num_rows($result)) {
  print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
} else {
  print "Tables in your database:\n";
  while ($row = pg_fetch_row($result)) { print("- $row[0], $row[1]\n"); }
}
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
		<script src="https://www.google.com/recaptcha/api.js"></script>
		<script>
		 function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
		</script>
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
				<form class="card-form" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" id="card-form-id">
					<input type=hidden name='captcha_settings' value='{"keyname":"leadform","fallback":"true","orgId":"00D5g00000BjEwz","ts":""}'>
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
							<?php while ($row = pg_fetch_row($result)) : ?>
								<option value="<?=$row[1];?>"><?=$row[0];?></option>
							<?php endwhile ;?>


							<?/*php
								while ($row = pg_fetch_row($result)) { 
									print("- $row[0], $row[1]\n"); 
								}
							*/?>
							
						</select>
						<label>Product:</label>
					</div>
					<div class="input">
						<div class="g-recaptcha" data-sitekey="6LesDnccAAAAAOKU6_Pqt_fbnkNi5Oht3ADPT8Bu"></div>
					</div>
					<div class="action">
						<input type="submit" name="submit" class="action-button">
					</div>
					<script>
					document.getElementById('card-form-id').onsubmit = function () {
					    if (!grecaptcha.getResponse()) {
					    	swal("Attention!", "Click on the Recaptcha");
					        return false; // возвращаем false и предотвращаем отправку формы
					    }
					}
					</script>
				</form>
			</div>
		</div>
		<div class="text-danger" id="recaptchaError"></div>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</body>
</html>