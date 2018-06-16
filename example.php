<?php
session_start();

if (isset($_POST['login'])){
	if(intval($_SESSION['captcha']) != intval($_POST['captcha'])){
		$error=true;
	}
}
?>

<div>
<h1>Login</h1>
</div>
<?php
if(@$error)
{
print("<p>Wrong captcha.</p>");
} ?>
<form action="example.php"  method="POST">

<table border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="238" height="24">Username</td>
    <td width="244"><span class="tablo">
      <input name="name" type="text" id="name" value="" size="34" maxlength="70" class="input" />
    </span></td>
  </tr>
  <tr>
    <td height="24">Password</td>
    <td><span class="tablo">
      <input name="pass" type="password" id="pass" value="" size="34"  class="input"/>
    </span></td>
  </tr>
  <tr>
    <td><p><img name="pic" id="pic" src="captcha/pic.php?id=log"/> </p>
        <p>
          <input name="button" type='button' class="input" onclick="javascript: document['pic'].src='captcha/pic.php';" value='New Code' />
      </p></td>
    <td><p class="tablo">
      <input name="captcha" type="text" id="captcha" value="" size="34" maxlength="10" class="input" />
      Write the codes on left.
      *</p></td>
  </tr>
  <tr>
    <td height="26" colspan="2"><div align="center">
	  <input type="hidden" name="login" value="1"  class="input"/>
      <input type="submit" name="submit" value="Login" class="input"/>
    </div></td>
  </tr>
</table>
</form>