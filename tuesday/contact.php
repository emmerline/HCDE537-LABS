<?php  include('includes/header.php'); ?>


<!-- Begin Text -->
<article>
<h2>Drop me a line, brutha!</h2>
<?php // Script that sends form data as an email

if ( isset ($_POST['submit-form']) ) {  // If form is submitted:

	$mailMesage =  ("{$_POST['name']} {$_POST['email']} wrote: \n\n{$_POST['message']}"); // message of the email.
	
	$mailSubject = "{$_POST['subject']}"; // Subject of the email.
	
	$mailRecipient = "mike@mikesinkula.com"; // Destination email address.
	
	mail ($mailRecipient, $mailSubject , $mailMesage); // Function to send the email.
	
	print ("<p>Thank You for contacting Me, <b>{$_POST['name']}</b>!</p>\n"); // Notice that thanks the user.
	
	}

?>
<form action="contact.php" method="post">
<table width="620" border="1" cellspacing="10">
  <tr>
    <td><label for="name">Name:</label></td>
    <td><input name="name" type="text" required></td>
  </tr>
  <tr>
    <td><label for="email">Email:</label></td>
    <td><input name="email" type="email" required></td>
  </tr>
  <tr>
    <td><label for="subject">Subject:</label></td>
    <td>
    <select name="subject">
    	<option value="General Inquiry">General Inquiry:</option>
        <option value="Dumb Inquiry">Dumb Inquiry:</option>
        <option value="I'm Here to Annoy You">I'm Here to Annoy You:</option>
    
    </select>
    </td>
  </tr>
  <tr>
    <td><label for="message">Message:</label></td>
    <td><textarea name="message"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    <input type="submit" name="submit-form" value="Submit Form">
    <input type="reset" name="reset-form" value="Reset Form">
    </td>
  </tr>
</table>

</form>
</article>
<!-- End Text -->

<?php include('includes/sidebar-contact.php'); ?>

<?php include('includes/footer.php'); ?>