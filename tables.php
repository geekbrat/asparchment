<?php
function randomImage ( $array ) {
  $total = count($array);
  $call = rand(0,$total-1);
  return $array[$call];
}
$my_images = array (
  "logo9.png",
  "logo10.png",
  "logo11.png",
);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AllStory Tables Template</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" class="main" align="CENTER">
  <tr>
    <td colspan="2"><CENTER><div class="Box" id="Main.Inner">
                    <? echo '<img src="'.randomImage($my_images).'" alt="Random Logo Banner" width="600" height="100" align="middle" />';?>
					</div>
                    <div class="rounded-corners-menu" id="box3">
                        <a href="#">Home</a> | <a href="#">Login</a> | <a href="#">Authors</a> | <a href="#">Community</a> | <a href="#">Top 10's</a> | <a href="#">Links</a>
                    </div>
      </CENTER></td>
    <td width="200" rowspan="2" valign="top"><div class="rounded-corners-ie" id="box3">
                        <h3 class="box1">Header Here </h3>
                        <p>Menu/Box Content Here </p>
                      </div>
                      <div class="rounded-corners-ie" id="box3">
                        <h3 class="box1">Header Here </h3>
                        <p>Menu/Box Content Here </p>
                      </div>
                      <div class="rounded-corners-ie" id="box3">
                        <h3 class="box1">Header Here </h3>
                        <p>Menu/Box Content Here </p>
                      </div>
                      <div class="rounded-corners-ie" id="box3">
                        <h5 class="box1">Header Here </h5>
                        <p>Menu/Box Content Here </p>
      </div></td>
  </tr>
  <tr>
    <td width="200" valign="top"><div class="rounded-corners-ie" id="box2">
                <h3 class="box1">Header Here </h3>
                <p>Menu/Box Content Here </p>
              </div>
              <div class="rounded-corners-ie" id="box2">
                <h3 class="box1">Header Here </h3>
                <p>Menu/Box Content Here </p>
              </div>
              <div class="rounded-corners-ie" id="box2">
                <h3 class="box1">Header Here </h3>
                <p>Menu/Box Content Here </p>
              </div>
              <div class="rounded-corners-ie" id="box2">
                <h3 class="box1">Header Here </h3>
                <p>Menu/Box Content Here </p>
              </div></td>
    <td valign="top"><div class="rounded-corners-ie" id="box">
                            <h2 class="box1"><span class="Blue">Welcome to AllStory </span></h2>
            <p>This is some general welcome text here.</p>
                          </div>
                          <div class="rounded-corners-ie" id="box">
                            <h4 class="box1">Welcome to AllStory </h4>
                            <p>This is Where Categories Go.</p>
                          </div>
                          <div class="rounded-corners-ie" id="box">
                            <h3 class="box1">Welcome to AllStory </h3>
                            <p>This is Where new stories will be.</p>
      </div></td>
    </tr>
  <tr>
    <td colspan="3"><div class="rounded-corners-ie" id="box2"><IMG SRC="s-logo-4.png" style="float:left; margin: 0px 10px 10px 0px;"><IMG SRC="s-janglewood.png" style="float:right; margin: 0px 0px 10px 10px;">
            <p>This website, is copyright © 2012 <a href="#" title="StoryPortal Fiction Network">Janglewood, LLC</a>. All rights reserved. We are not responsible for what contributors post, but if anything illegal is found posted on the site, notify us at <a href="#">tcos AT allstoryr.us</a> and it will be promptly removed.<br />
            </p><BR /> <BR />
            <center>
<a href="#" title="Terms of Service">Terms of Service</a> | <a href="#" title="Rules">Rules</a> | <a href="#" title="Contact Us">Contact Us</a> | <a href="#" title="About Us">About Us</a> | <a href="#" title="Home" id="current">Home</a>
            </center>
      </div></td>
    </tr>
</table>
</body>
</html>
