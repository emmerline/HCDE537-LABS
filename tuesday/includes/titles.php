<?php

$page = basename($_SERVER['SCRIPT_NAME']);

if ($page == 'index.php') { print 'Home'; }

if ($page == 'about.php') { print 'About'; }

if ($page == 'about-mission.php') { print 'About Our Mission'; }
    
    if ($page == 'about-process.php') { print 'About Our Process'; }
    
    if ($page == 'about-team.php') { print 'About Our Team'; }

if ($page == 'services.php') { print 'Services'; }

if ($page == 'services-logos.php') { print 'Logo Design Services'; }

if ($page == 'services-print.php') { print 'Print Design Services'; }

if ($page == 'services-web.php') { print 'Web Design &amp; Development Services'; }

if ($page == 'portfolio.php') { print 'Portfolio'; }

if ($page == 'work-logos.php') { print 'Logo Work'; }

if ($page == 'work-print.php') { print 'Print Work'; }

if ($page == 'work-web.php') { print 'Web Work'; }

if ($page == 'blog.php') { print 'Blog'; }

if ($page == 'contact.php') { print 'Contact'; }

?>