<!DOCTYPE html>
<html>
<head>
<title>Hello World!</title>
<meta name="Description" content="To the Moon!">
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
Hello World!
<div id="bc">Hello Bitcoin!</div>
<div id="js"></div>
<button onClick="jsButton();">Click Me!</button>
<br>
<?php echo "Hello PHP!"; ?>
<script>
function jsButton(){
document.getElementById("js").innerHTML = "Hello Javascript!";
}
</script>
</body>
</html>