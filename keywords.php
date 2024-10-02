<?php 

$fullscriptname = $_SERVER['SCRIPT_FILENAME'];

// get current file location
$pieces = explode("/", $_SERVER['PHP_SELF']);

if (strpos($fullscriptname, "htdocs") !== FALSE) {
$minus = "4";}
else{$minus = "2";}

//three for localhost // two SERVER
$loop = count($pieces) - $minus;

// loop until to root directory
$link="";
for ($i=0; $i<$loop; $i++) {
$link .= "";
}

$scriptname = $_SERVER['SCRIPT_FILENAME'];

if(stristr($scriptname, "index.php"))
{
$pagename = "Home - We are a boutique Unclaimed Assets Retrieval Company.";
$metakeywords = "recovering dormant/lost shares, claiming shares lodged with iepf, filing tax on behalf of nris, pan card application, succession & estate planning";
$metadescription ="If you believe you have your own shares or inherited shares and have lost track of them, we will help to activate these investments.";
}

elseif(stristr($scriptname, "vision.php"))
{
$pagename = "Equity Solutions - Vision";
$metakeywords = "pipe supplier in india, sheet dealer in india, coil dealer, pipe fitting stockist, rod dealer, hex bar supplier,";
$metadescription ="Equity Solutions is known as one of the leading supplier of various types of sheet, Coil, Pipe, Tube, etc.";
}

elseif(stristr($scriptname, "teams.php"))
{
$pagename = "Equity Solutions - Teams";
$metakeywords = "pipe supplier in india, sheet dealer in india, coil dealer, pipe fitting stockist, rod dealer, hex bar supplier,";
$metadescription ="Equity Solutions is known as one of the leading supplier of various types of sheet, Coil, Pipe, Tube, etc.";
}

elseif(stristr($scriptname, "vision.php"))
{
$pagename = "Equity Solutions - Vision";
$metakeywords = "pipe supplier in india, sheet dealer in india, coil dealer, pipe fitting stockist, rod dealer, hex bar supplier,";
$metadescription ="Equity Solutions is known as one of the leading supplier of various types of sheet, Coil, Pipe, Tube, etc.";
}

elseif(stristr($scriptname, "services.php"))
{
$pagename = "Equity Solutions - Services";
$metakeywords = "pipe supplier in india, sheet dealer in india, coil dealer, pipe fitting stockist, rod dealer, hex bar supplier,";
$metadescription ="Equity Solutions is known as one of the leading supplier of various types of sheet, Coil, Pipe, Tube, etc.";
}

elseif(stristr($scriptname, "testimonial.php"))
{
$pagename = "Equity Solutions - Testimonial";
$metakeywords = "pipe supplier in india, sheet dealer in india, coil dealer, pipe fitting stockist, rod dealer, hex bar supplier,";
$metadescription ="Equity Solutions is known as one of the leading supplier of various types of sheet, Coil, Pipe, Tube, etc.";
}


elseif(stristr($scriptname, "nri-services.php"))
{
$pagename = "Equity Solutions - NRI Services";
$metakeywords = "pipe supplier in india, sheet dealer in india, coil dealer, pipe fitting stockist, rod dealer, hex bar supplier,";
$metadescription ="Equity Solutions is known as one of the leading supplier of various types of sheet, Coil, Pipe, Tube, etc.";
}

elseif(stristr($scriptname, "privacy-policy.php"))
{
$pagename = "Equity Solutions - Privacy Policy";
$metakeywords = "pipe supplier in india, sheet dealer in india, coil dealer, pipe fitting stockist, rod dealer, hex bar supplier,";
$metadescription ="Equity Solutions is known as one of the leading supplier of various types of sheet, Coil, Pipe, Tube, etc.";
}

elseif(stristr($scriptname, "terms-conditions.php"))
{
$pagename = "Equity Solutions - Terms & Conditions";
$metakeywords = "pipe supplier in india, sheet dealer in india, coil dealer, pipe fitting stockist, rod dealer, hex bar supplier,";
$metadescription ="Equity Solutions is known as one of the leading supplier of various types of sheet, Coil, Pipe, Tube, etc.";
}


elseif(stristr($scriptname, "contact.php"))
{
$pagename = "Equity Solutions - Contact Us";
$metakeywords = "pipe supplier in india, sheet dealer in india, coil dealer, pipe fitting stockist, rod dealer, hex bar supplier,";
$metadescription ="Equity Solutions is known as one of the leading supplier of various types of sheet, Coil, Pipe, Tube, etc.";
}








else
{
$pagename = "Equity Solutions - We are a boutique Unclaimed Assets Retrieval Company.";
$metakeywords = "recovering dormant/lost shares, claiming shares lodged with iepf, filing tax on behalf of nris, pan card application, succession & estate planning";
$metadescription ="If you believe you have your own shares or inherited shares and have lost track of them, we will help to activate these investments.";
}

	?>