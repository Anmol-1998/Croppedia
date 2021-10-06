<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: grey;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 20px;
  transition: 0.3s;
  color:white;
  font-size: 20px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 10px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>
<div class="tab">
  <button class="tablinks" onclick="openService('home',this)" id="defaultOpen">Home</button>
  <button class="tablinks" onclick="openService('help',this)">Details</button>
  <button class="tablinks" onclick="openService('contact',this)">Contact</button>
  <button class="tablinks" onclick="openService('aboutus',this)">About Us</button> 
<form method="get" style="margin-width:20px;" target="_parent" action="#">
<input type="text" name="q" style="padding:12px 16px;margin: 4px px;position:absolute;right:100px;border-radius: 12px" alt="Search" value="" maxlength="256" size="32" />
<input type="submit"  name="searchBtn" style="padding:12px 16px;position:absolute;right:15px;border-radius: 12px;" value="Search" />
<input type="hidden" name="sitename" value="wikipedia.org" />
</form>

</div>
<script async src="https://cse.google.com/cse.js?cx=5c0446e7857cf2353"></script>
<div class="gcse-search" ></div>
<div id="home" class="tabcontent">
    <?php
include('home.php');
?>
</div>

<div id="help" class="tabcontent">
    <?php
include('help.php');
?>
</div>

<div id="contact" class="tabcontent">
      <?php
include('contact.php');
?>
</div>

<div id="aboutus" class="tabcontent">
      <?php
include('aboutus.php');
?>
</div>
<script>
function openService(pageName, elmnt) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  document.getElementById(pageName).style.display = "block";


}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html> 
