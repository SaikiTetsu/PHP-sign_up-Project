<!DOCTYPE html>
<html>
<head>
<meta  charset="utf-8" />
<title>Home Page Ashland Valley Soccer League</title>
<link rel="stylesheet" href="styles/base.css" type="text/css" />
</head>

<body>
<table  id="openingpage">
  <tr class="colorit"> 
    <td colspan="2" valign="bottom" ><img src="graphics/soccerball.gif" alt="logo" width="143" height="39">
      <div class="main_nav">Home | <a href="map.php">Maps</a> | <a href="action.php">Action</a>    | <a href="teams.php">Teams</a> | <a href="signup.html">Online
    Signup</a> | <a href="ash_admin/game_mgr/">Game Schedule</a> </div> </td></tr>
  <tr>
    <td width="216">&nbsp;</td>
    <td width="534">&nbsp;</td>
  </tr>
  <tr> 
    <td  valign="top">Welcome to the Ashland Valley Soccer League Web Site -
      Your source for complete information on League game schedules, registration,
      field directions, and photos of recent games and teams.</td>
    <td align="center" valign="top"><img src="graphics/dit-2000picture.jpg" alt="action" width="300" height="279"></td>
  </tr>
  <tr>
    <td colspan="2"  valign="top"><div style="font-size:8pt; border-top:thin solid #0000A0;">
     <a href="ash_admin/admin_mgr">Admin Menu</a>
    </div></td>
  </tr>
  <tr>
    <td colspan="2"  valign="top"><div class="credits"><?php date_default_timezone_set('America/Denver'); ?> Ashland Valley
    Soccer League
	<?php echo date("Y"); ?>  </div></td>
  </tr>
</table>
</body>
</html>
