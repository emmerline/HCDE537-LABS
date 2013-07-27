<?php include("includes/header.php"); ?>

<?php


if ( isset ($_POST['submit-form']) ) {  // Check for each form value when the form is submitted:

$problem = FALSE; // no problems!


if (!$problem) { // if there are no problems:

$mailMesage =  ("{$_POST['name']} {$_POST['email']} wrote: \n\n{$_POST['message']}"); // message of the email.

$mailSubject = "{$_POST['subject']}"; // subject of the email.

$mailRecipient = "sinkum@u.washington.edu"; // destination email address.

mail ($mailRecipient, $mailSubject , $mailMesage); // Function to send the email.

print ("<p>Thank You for contacting Me, <b>{$_POST['name']}</b>!</p>\n"); // Notice that thanks the user.

}

}

?>

    <!-- Begin Article -->
    <article>
    <h2>Hook me up!</h2>
    <form action="contact.php" method="post" name="contact-form">
    <table width="620"  cellspacing="10">
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
    	<option value="General Inquiry">General Inquiry</option>
        <option value="Specific Inquiry">Specific Inquiry</option>
        <option value="Another Inquiry">Another Inquiry</option>
    
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
    <!-- End Article -->
    
<?php include("includes/sidebar-contact.php"); ?>

<?php include("includes/footer.php"); ?>