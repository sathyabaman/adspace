<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Send Bulk Mail</title>
</head>

<body>

<h1>Send Bulk Email</h1>

<form method="post" action="actions/send_bulk_email_action.php">

<table>
<tr>
<td>Subject</td>
<td><input  type="text" name="subject" width="300" value="" required="required"></td>
</tr>

<tr>
<td>Message</td>
<td><textarea rows="20" cols="60" name="message" required="required" value="" ></textarea></td>
</tr>

<tr>
<td colspan="2" align="right" ><input type="submit" name="submit" value="Send Bulk Mail"><td>

</tr>


</table>





</form>



</body>
</html>
