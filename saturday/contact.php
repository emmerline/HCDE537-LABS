<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mike Sinkula's Contact Page</title>

<!-- Begin Styles -->
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!-- End Styles -->

</head>

<body>

<!-- Begin Header -->
<header>
<h1><img src="images/logo.png" width="500" height="50" alt="Mike Sinkula's Website"></h1>
</header>
<!-- End Header -->

<!-- Begin Navigation -->
<nav>
<ul>
<li><a href="about.html">About</a></li>
<li><a href="services.html">Services</a></li>
<li><a href="portfolio.html">Portfolio</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</nav>
<!-- End Navigation -->

<!-- Begin Middle -->
<div id="middle">

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
    <td><input name="name" type="text" required="required"></td>
  </tr>
  <tr>
    <td><label for="email">Email:</label></td>
    <td><input name="email" type="email" required="required"></td>
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
    
    <!-- Begin Sidebar -->
    <aside>
    <ul>
    <li><a href="#">Lorem ipsum dolor</a></li>
    <li><a href="#">Aliquam tincidunt</a></li>
    <li><a href="#">Vestibulum auctor</a></li>
    </ul>
    <aside>
    <!-- End Sidebar -->
    
</div>
<!-- End Middle -->

<!-- Begin Footer -->
<footer>
<p class="copyright">&copy; 2013 <a href="mailto:mike@mikesinkula.com">Mike Sinkula</a></p>
</footer>
<!-- End Footer --> 

</body>
</html>
