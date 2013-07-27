<?php

$page = basename($_SERVER['SCRIPT_NAME']);

if ($page == 'index.php') { print 'Home'; }

if ($page == 'about.php') { print 'About'; }

if ($page == 'about-mission.php') { print 'About Our Mission'; }
    
    if ($page == 'about-process.php') { print 'About Our Process'; }
    
    if ($page == 'about-team.php') { print 'About Our Team'; }

if ($page == 'services.php') { print 'Services'; }

if ($page == 'services-logos.php') { print 'Logo Design'; }

if ($page == 'services-print.php') { print 'Print Design'; }

if ($page == 'services-web.php') { print 'Web Design'; }

if ($page == 'portfolio.php') { print 'Portfolio'; }

	if ($page == 'portfolio-logos.php') { print 'Logo Design Portfolio'; }
	
	if ($page == 'portfolio-print.php') { print 'Print Design Portfolio'; }
	
	if ($page == 'portfolio-web.php') { print 'Web Design Portfolio'; }

if ($page == 'blog.php') { print 'Blog'; }

if ($page == 'contact.php') { print 'Contact'; }

?>