<!-- nsbe_events.html -->
<!-- This script should display all of the planned events for the upcoming school year. -->

<!DOCTYPE html>
<html>
	<head>
		<title>NSBE@UC - Forms</title>

		<link rel="stylesheet" type="text/css" href="./forms.css">
		<?php include './header.php'; ?>

		 <!-- Making Tabs functions -->
    <script>
      function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

    </script>
	</head>

	<body>
		<!-- Navigation --->
			<nav>
			<?php include('./nav.php'); ?>
			</nav>

		  <!-- Tabs to Access Different forms -->
    <div class="row">
    <div class="col">
      <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')"> AWFE Student Registration </button>
  <button class="tablinks" onclick="openCity(event, 'Paris')"> STEMFest Student Registration </button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')"> EFAD Student Registration </button>
</div>
      </div>

<div class="tabcontent">
  <div class="col">
  <h3> AWFE </h3>

  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScfgpnbvmjHUN14SAWkCzcDlowRby_kc9M2XDAZPdEsAPf-bw/viewform?embedded=true" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
  </div>
</div>

<div id="Paris" class="tabcontent">
  <h3> STEMFest Student Registration</h3>
 <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScfgpnbvmjHUN14SAWkCzcDlowRby_kc9M2XDAZPdEsAPf-bw/viewform?embedded=true" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>EFAD Student Registration</h3>
  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScfgpnbvmjHUN14SAWkCzcDlowRby_kc9M2XDAZPdEsAPf-bw/viewform?embedded=true" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
  </div>

    </div>

	</body>

	<!-- Footer -->
	<?php include('C:\Users\Emmanuel Jokotoye\Documents\Projects\NSBE Website\footer.php'); ?>
</html>
