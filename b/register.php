<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
	$result = doRegister();
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $site_title; ?></title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>css/main.css"/>
	<!--validation styles
	<link href="<?php echo WEB_ROOT;?>css/admin.css" rel="stylesheet" type="text/css">
	<link href="<?php echo WEB_ROOT;?>css/styles.css" rel="stylesheet" type="text/css">-->

	<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

	<link href="<?php echo WEB_ROOT; ?>library/spry/passwordvalidation/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo WEB_ROOT; ?>library/spry/passwordvalidation/SpryValidationPassword.js" type="text/javascript"></script>

	<link href="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

	<link href="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

	<link href="<?php echo WEB_ROOT; ?>library/spry/confirmvalidation/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo WEB_ROOT; ?>library/spry/confirmvalidation/SpryValidationConfirm.js" type="text/javascript"></script>

</head>
<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Peronal Infomation</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Peronal Infomation</h3>
									<p>Please enter your infomation and proceed to the next step so we can build your accounts.  </p>
									<div class="errorMessage"><?php echo $errorMessage; ?></div>
								</div>
								<div class="form-row">
									<div class="form-holder" id="sprytf_firstname">
										<fieldset>
											<legend>First Name</legend>
											<input type="text" class="form-control frmInputs" id="first-name accno" name="first-name" placeholder="First Name" size="40" maxlength="30">
										</fieldset>
										<span class="textfieldRequiredMsg">Firstname is required.</span>
										<span class="textfieldMinCharsMsg">Firstname must specify at least 6 characters.</span>
									</div>
									<div class="form-holder" id="sprytf_lastname">
										<fieldset>
											<legend>Last Name</legend>
											<input type="text" class="form-control frmInputs" id="last-name accno" name="last-name" placeholder="Last Name" size="40" maxlength="30">
										</fieldset>
										<span class="textfieldRequiredMsg">Lastname is required.</span>
										<span class="textfieldMinCharsMsg">Lastname must specify at least 6 characters.</span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2" id="sprytf_email">
										<fieldset>
											<legend>Your Email</legend>
											<input type="text" name="your_email" id="your_email" class="form-control frmInputs" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com">
										</fieldset>
										<span class="textfieldRequiredMsg">Email ID is required.</span>
										<span class="textfieldInvalidFormatMsg">Please enter a valid email (user@domain.com).</span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2" id="sprytf_phone">
										<fieldset>
											<legend>Phone Number</legend>
											<input type="text" class="form-control frmInputs" id="phone" name="phone" pattern="[+]+[0-9]{6,12}" placeholder="+1 888-999-7777">
										</fieldset>
										<span class="textfieldRequiredMsg">Phone Number is required.</span>
									</div>
								</div>
								
								<div class="form-row">
									<div class="form-holder" id="spryselect_gender">
										<select id="gender" name="gender" class="" required>
											<option value="">Select gender</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
											<option value="Others">Others</option>
										</select>
										<span class="selectRequiredMsg">Please select your gender.</span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder" id="sprytf_lastname">
										<fieldset>
											<legend>Upload Profile Picture</legend>
											<input type="file" class="form-control frmInputs" id="first-name" name="pic" required>
										</fieldset>
										<span class="textfieldRequiredMsg">Profile photo is required.</span>	
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label class="special-label">Birth Date:</label>
										<select name="month" id="month">
											<option value="MM" disabled selected>DD</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
										</select>
										<select name="date" id="date">
											<option value="DD" disabled selected>MM</option>
											<option value="Feb">Feb</option>
											<option value="Mar">Mar</option>
											<option value="Apr">Apr</option>
											<option value="May">May</option>
										</select>
										<select name="year" id="year">
											<option value="YYYY" disabled selected>YYYY</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
										</select>
									</div>
								</div>
							</div>
						</section>
						<!-- SECTION 1b -->
			            <h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Address Information</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Address Infomation</h3>
									<p>Please enter your infomation and proceed to the next step so we can build your accounts.  </p>
									<div class="errorMessage"><?php echo $errorMessage; ?></div>
								</div>
								<!--Address Information-->
								<div class="form-row">
									<div class="form-holder form-holder-2" id="spryta_address">
										<fieldset>
											<legend>Home Address</legend>
											<input type="text" class="form-control frmInputs" id="textarea1" name="phone" placeholder="Enter Address">
										</fieldset>
										<span class="textareaRequiredMsg">Address is required.</span>
										<span class="textareaMinCharsMsg">Address must specify at least 10 characters.</span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder" id="sprytf_city">
										<fieldset>
											<legend>City</legend>
											<input type="text" class="form-control frmInputs" id="first-name" name="first-name" placeholder="Enter city">
										</fieldset>
										<span class="textfieldRequiredMsg">City Name is required.</span>
									</div>
									<div class="form-holder" id="sprytf_state">
										<fieldset>
											<legend>State</legend>
											<input type="text" class="form-control frmInputs" id="last-name" name="last-name" placeholder="Enter State">
										</fieldset>
										<span class="textfieldRequiredMsg">State name is required.</span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder" id="sprytf_zip">
										<fieldset>
											<legend>Postal/Zip Code</legend>
											<input type="text" class="form-control frmInputs" id="first-name" name="first-name" pattern="[0-9]{4,6}" placeholder="Postal/Zip">
										</fieldset>
										<span class="textfieldRequiredMsg">Zip Code is required.</span>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Country</legend>
											<input type="text" class="form-control frmInputs" id="last-name" name="last-name" placeholder="Country">
										</fieldset>
									</div>
								</div>
							</div>
						</section>
						<!-- SECTION 1c -->
			            <h2>
			            	<p class="step-icon"><span>03</span></p>
			            	<span class="step-text">Identification</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Identification</h3>
									<p>Please enter your infomation and proceed to the next step so we can build your accounts.  </p>
									<div class="errorMessage"><?php echo $errorMessage; ?></div>
								</div>
								<!--Identification-->
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Citizenship</legend>
											<select id="gender" name="Citizenship" class="no-border">
												<option value="">*Please select*</option>
												<option value="Male">USA</option>
												<option value="Female">Europe</option>
												<option value="Others">Others</option>
											</select>
										</fieldset>
									</div>
								</div>
								<!--SSN-->
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<input type="text" class="form-control input-border" id="ssn" name="ssn" pattern="[0-9]{9}" placeholder="SSN (US citizens)">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Marital status</legend>
											<select id="gender" name="Citizenship" class="no-border">
												<option value="">*Please select* </option>
												<option value="Male">Single</option>
												<option value="Female">Married</option>
												<option value="Others">Divorced</option>
												<option value="Others">Widowed</option>
											</select>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Occupation</legend>
											<input type="text" class="form-control frmInputs" id="first-name" name="first-name" placeholder="Occupation">
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Upload ID</legend>
											<input type="file" class="form-control frmInputs" id="first-name" name="pic">
										</fieldset>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>04</span></p>
			            	<span class="step-text">Accounting Information</span>
						</h2>
						<section  id="04">
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Identification</h3>
									<p>Please enter your infomation and proceed to the next step so we can build your accounts.  </p>
									<div class="errorMessage"><?php echo $errorMessage; ?></div>
								</div>
								<!--Identification-->
								
								<div class="form-row">
									<div class="form-holder" id="spryselect_acctype">
										<fieldset>
											<legend>Account type</legend>
											<select id="" name="account-type" class="no-border">
												<option value="">*Please Select*</option>
												<option value="Male">savings</option>
												<option value="Female">checking</option>
												<option value="Others">Certificate of Deposit (CD)</option>
												<option value="Others">Money Market Account</option>
												<option value="Others">IRA</option>
											</select>
										</fieldset>
										<span class="selectRequiredMsg">Please select Account Type.</span>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Currency</legend>
											<select id="" name="account-type" class="no-border">
												<option value="">*Please Select*</option>
												<option value="Male">USD</option>
												<option value="Female">Euro</option>
												<option value="Others">GBP</option>
											</select>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2" id="sprypwd">
										<fieldset>
											<legend>Create Password</legend>
											<input type="password" class="form-control frmInputs" id="phone" name="phone" placeholder="Enter password">
										</fieldset>
										<span class="passwordRequiredMsg">Password is required.</span>
										<span class="passwordMinCharsMsg">You must specify at least 6 characters.</span>
										<span class="passwordMaxCharsMsg">You must specify at max 10 characters.</span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2" id="sprycpwd">
										<fieldset>
											<legend>Confirm Password</legend>
											<input type="password" class="form-control frmInputs" id="phone" name="phone" placeholder="confirm password">
										</fieldset>
										<span class="confirmRequiredMsg">Confirm Password is required.</span>
			  							<span class="confirmInvalidMsg">Confirm Password values don't match</span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2" id="sprytf_pin">
										<fieldset>
											<legend>Create transaction Pin</legend>
											<input type="password" class="form-control frmInputs" id="phone" name="phone" placeholder="create 4-6 digit pin">
										</fieldset>
										<span class="textfieldRequiredMsg">Account Pin is required.</span>
										<span class="textfieldMinCharsMsg">Account Pin must specify at least 4 characters.</span>
										<span class="textfieldMaxCharsMsg">Account Pin must specify at max 6 characters.</span>
										<span class="textfieldInvalidFormatMsg">Account Pin must be Integer.</span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2" id="sprytf_cpin">
										<fieldset>
											<legend>Confirm Pin</legend>
											<input type="password" class="form-control frmInputs" id="phone" name="phone" placeholder="confirm pin">
										</fieldset>
										<span class="confirmRequiredMsg">Please confirm your pin</span>
										<span class="textfieldRequiredMsg">Account Pin is required.</span>
										<span class="confirmInvalidMsg">values don't match</span>
									</div>
								</div>
							</div>
							<input name="submitButton" type="submit" class="frmButton" id="submitButton" value="Register Account"/>
						</section>
					</div>
				</form>
				<div class="login-rdr">
					<p>already have an account? <a href="<?php echo WEB_ROOT; ?>login.php">Login Now</a></p>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
		//Firstname
		var sprytf_firstname = new Spry.Widget.ValidationTextField("sprytf_firstname", 'none', {validateOn:["blur", "change"]});
		//Lastname
		var sprytf_lastname = new Spry.Widget.ValidationTextField("sprytf_lastname", 'none', {validateOn:["blur", "change"]});
		//Password
		var sprypass1 = new Spry.Widget.ValidationPassword("sprypwd", {minChars:6, maxChars: 12, validateOn:["blur", "change"]});
		//Confirm Password
		var spryconf1 = new Spry.Widget.ValidationConfirm("sprycpwd", "sprypwd", {minChars:6, maxChars: 12, validateOn:["blur", "change"]});
		//Email ID
		var spryemail = new Spry.Widget.ValidationTextField("sprytf_email", 'email', {validateOn:["blur", "change"]});
		//Phone Number
		var spryphone = new Spry.Widget.ValidationTextField("sprytf_phone", 'phone_number', {useCharacterMasking: true, validateOn:["blur", "change"]});
		//Date of Birth
		var sprydob = new Spry.Widget.ValidationTextField("sprytf_dob", 'date', {format:"dd-mm-yyyy", useCharacterMasking: true, validateOn:["blur", "change"]});
		//Gender
		var sprygender = new Spry.Widget.ValidationSelect("spryselect_gender");
		
		
		//address
		var spry_ad = new Spry.Widget.ValidationTextarea("spryta_address", {isRequired:true});
		//city
		var sprytf_city = new Spry.Widget.ValidationTextField("sprytf_city", 'none', {validateOn:["blur", "change"]});
		//State
		var sprytf_state = new Spry.Widget.ValidationTextField("sprytf_state", 'none', {validateOn:["blur", "change"]});
		//ZipCode
		var sprytf_zip = new Spry.Widget.ValidationTextField("sprytf_zip", 'integer', {validateOn:["blur", "change"]});
		
		//Account Type
		var spryselect1 = new Spry.Widget.ValidationSelect("spryselect_acctype");
		//Account Number
		var spry_accno = new Spry.Widget.ValidationTextField("sprytf_accno", 'integer', {minChars:8, maxChars: 12, validateOn:["blur", "change"]});
		
		var spry_pin = new Spry.Widget.ValidationTextField("sprytf_pin", 'integer', {minChars:4, maxChars: 6, validateOn:["blur", "change"]});
		//Confirm Password
		var spry_cpin = new Spry.Widget.ValidationConfirm("sprytf_cpin", "sprytf_pin", {minChars:4, maxChars: 6, validateOn:["blur", "change"]});
		
		//-->
	</script>
		
</body>
</html>