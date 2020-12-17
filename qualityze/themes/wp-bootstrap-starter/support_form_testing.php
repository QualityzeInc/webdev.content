<?php
/**
* Template Name: support_form_new_testing
 */
?>

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
<!--  If necessary, please modify the charset parameter to specify the        -->
<!--  character set of your HTML page.                                        -->
<!--  ----------------------------------------------------------------------  -->

<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
 function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
</script>

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <FORM> element to your page.             -->
<!--  ----------------------------------------------------------------------  -->

<form action="https://webto.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8" method="POST">

<input type=hidden name='captcha_settings' value='{"keyname":"Qualityze","fallback":"true","orgId":"00D36000000bD6V","ts":""}'>
<input type=hidden name="orgid" value="00D36000000bD6V">
<input type=hidden name="retURL" value="https://www.qualityze.com/">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
<!--  these lines if you wish to test in debug mode.                          -->
<!--  <input type="hidden" name="debug" value=1>                              -->
<!--  <input type="hidden" name="debugEmail"                                  -->
<!--  value="mkumbhar@qualityze.com">                                         -->
<!--  ----------------------------------------------------------------------  -->

<label for="name">Contact Name</label><input  id="name" maxlength="80" name="name" size="20" type="text" /><br>

<label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="text" /><br>

<label for="phone">Phone</label><input  id="phone" maxlength="40" name="phone" size="20" type="text" /><br>

<label for="company">Company</label><input  id="company" maxlength="80" name="company" size="20" type="text" /><br>

<label for="subject">Subject</label><input  id="subject" maxlength="80" name="subject" size="20" type="text" /><br>

<label for="description">Description</label><textarea name="description"></textarea><br>

Product:<input  id="00N1R00000TRbk4" maxlength="255" name="00N1R00000TRbk4" size="20" type="text" /><br>

<div class="g-recaptcha" data-sitekey="6LcHElwUAAAAAJm5eM4kILdnFbUjv-pSPu8puEas"></div><br>
<input type="submit" name="submit">

</form>
