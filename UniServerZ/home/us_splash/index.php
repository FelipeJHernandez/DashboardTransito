<?php
$version="";

 if (getenv('HOME') == ''){                       // Not set when running as service
   $root= substr($_SERVER["DOCUMENT_ROOT"],0,-4); // this alternative with limitations
 }                                                // gets path to folder UniServerZ

 else{                                            // Set when run as standard program
   $root= getenv('HOME');                         // this is the ideal method to
 }                                                // get the path to folder UniServerZ


$file="$root\home\us_config\us_config.ini" ;     // Name and path of configuration file

if (file_exists($file) && is_readable($file)){   // Check file
  $settings=parse_ini_file($file,true);          // parse file into an array 
  $version=$settings["APP"]["AppVersion"];       // get parameter
}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Uniform Server ZeroXIV - Splash page</title>
<meta name="Description" content="The Uniform Server ZeroXIV" />
<meta name="Keywords" content="The Uniform Server,ZeroXIV,MPG,Mike,Ric,UniServer,Olajide,BobS,SudeepJD,BrainStorm,sbourdon" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>
<body>

<div id="wrap">
  <div id="header">

     <a href="https://www.uniformserver.com"><img src="images/logo.png" align="left" alt="The Uniform Server Zero" /></a>
       <div id="header_txt2" >
         <div style="position:absolute;">
           <b>ZeroXIV <?php print "- ".$version; ?> </b><br />
           Apache 2.4.53 VS16 <br />
           MySQL 8.0.29 <br />
           PHP 7.0, 7.1, 7.2, 7.3, 7.4, 8.0, 8.1
         </div>
       </div>
  </div>

  <div id="content">
    <h2>Welcome to The Uniform Server</h2>
    <p>Welcome to The Uniform Server ZeroXIV default start splash page. This page and every other file are being served by Apache. Information can be found in folder <b>UniServer\docs</b>. For additional support for ZeroXIV, see <a href="/us_docs/manual/index.html">documentation</a>.</p>
    <p>&nbsp;</p>
    <h2>Server Specification - Plugins</h2>
  <table>
   <tr valign="top">
   <td>
	<big><strong>Core</strong></big>
    <ul>
      <li> <b>UniController v2.4.0</b></li>
	  <li> <b>Apache 2.4.53 VS16 openssl 1.1.1o</b></li>
      <li> <b>OpenSSL/1.1.1o</b></li>
	  <li> <b>Mail client for PHP - msmtp 1.4.32</b></li>
	  <li> <b>Cron - Scheduler</b></li>
	</ul>
	<br />
	<big><strong>Databases</strong></big>
	<ul>
	  <li> <b>MySQL 8.0.29-community</b></li>
	  <li> MySQL 5.7.37-community</li>
	  <li> Mariadb 10.6.8</li>
	</ul>
	<br />
	<big><strong>Database Admin and Backup</strong></big>
	<ul>
	  <li> <b>phpMyAdmin 5.2.0</b></li>
	  <li> Adminer 4.8.1</li>
	  <li> MySQL Autobackup 1.0.1</li>
	</ul>
   </td>
   <td>
     &nbsp;&nbsp;&nbsp;&nbsp;
   </td>
   <td>
	<big><strong>PHP Versions</strong></big>
	<ul>
	  <li> <b>PHP installed as Apache module</b></li>
	  <li> <b>PHP v8.1.6</b></li>
	  <li> PHP v8.0.19</li>
	  <li> PHP v7.4.29</li>
	  <li> PHP v7.3.33</li>
	  <li> PHP v7.2.34</li>
	  <li> PHP v7.1.33</li>
	  <li> PHP v7.0.33</li>
    </ul>
	<br />
	
	<big><strong>PHP Accelerator</strong></big>
	<ul>
	  <li> Zend OpCache</li>
	</ul>
    <br /> 
	<big><strong>Perl Versions</strong></big>
	<ul>
      <li> Strawberry Perl v5.32.1.1</li>
      <li> ActivePerl via download</li>
	</ul>
	<br />
	<big><strong>Extensive Documentation</strong></big>
   </td>
   </tr>
  </table>
  </div>


  <div id="divider"> <a target="_1" href="https://www.uniformserver.com">The Uniform Server</a> | <a target="_1" href="https://sourceforge.net/projects/miniserver/files/Uniform%20Server%20ZeroXIV/">Downloads</a> | <a target="_1" href="https://wiki.uniformserver.com/Main_Page">Wiki</a> | <a target="_1" href="https://forum.uniformserver.com">Support Forum</a> </div>

  <div id="content">
  <p>The Uniform Server is a WAMP package that allows you to run a server on any W8, W10 or W11 Windows OS based computer. It is small and quick to download, and can be easily moved around. It also can be setup and used as a production/live server. Developers can use The Uniform Server to test their applications which require PHP, MySQL and the Apache HTTPd Server.</p>
  </div>

  <div id="divider">Developed By <a href="https://www.uniformserver.com/">The Uniform Server Development Team</a></div>
</div>
</body>
</html>
