
	function menudropdown() {
	    document.getElementById("myDropdown").classList.toggle("show");
	    document.getElementById("myDropbtn").classList.toggle("active");
	}
	// Close the dropdown menu if the user clicks outside of it
	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {

	    var dropdowns = document.getElementsByClassName("dropdown-content");
	    var i;
	    for (i = 0; i < dropdowns.length; i++) {
	      var openDropdown = dropdowns[i];
	      if (openDropdown.classList.contains('show')) {
	        openDropdown.classList.remove('show');
	      }
	    }
	    document.getElementById("myDropbtn").classList.remove("active");
	  }
	}

	function openNav() {
	    document.getElementById("navigation").style.width = "250px";
	    document.getElementById("navigation").classList.toggle("openNav");
	}
	function closeNav() {
	    document.getElementById("navigation").style.width = "0";
	    document.getElementById("navigation").classList.remove("openNav");
	}




	function menudropdown2() {
	    document.getElementById("myDropdown2").classList.toggle("show");
	    document.getElementById("myDropbtn2").classList.toggle("active");
	}
	// Close the dropdown menu if the user clicks outside of it
	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {

	    var dropdowns = document.getElementsByClassName("dropdown-content");
	    var i;
	    for (i = 0; i < dropdowns.length; i++) {
	      var openDropdown = dropdowns[i];
	      if (openDropdown.classList.contains('show')) {
	        openDropdown.classList.remove('show');
	      }
	    }
	    document.getElementById("myDropbtn").classList.remove("active");
	  }
	}

	function openNav() {
	    document.getElementById("navigation").style.width = "250px";
	    document.getElementById("navigation").classList.toggle("openNav");
	}
	function closeNav() {
	    document.getElementById("navigation").style.width = "0";
	    document.getElementById("navigation").classList.remove("openNav");
	}



	function menudropdown3() {
	    document.getElementById("myDropdown3").classList.toggle("show");
	    document.getElementById("myDropbtn3").classList.toggle("active");
	}
	// Close the dropdown menu if the user clicks outside of it
	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {

	    var dropdowns = document.getElementsByClassName("dropdown-content");
	    var i;
	    for (i = 0; i < dropdowns.length; i++) {
	      var openDropdown = dropdowns[i];
	      if (openDropdown.classList.contains('show')) {
	        openDropdown.classList.remove('show');
	      }
	    }
	    document.getElementById("myDropbtn").classList.remove("active");
	  }
	}

	function openNav() {
	    document.getElementById("navigation").style.width = "250px";
	    document.getElementById("navigation").classList.toggle("openNav");
	}
	function closeNav() {
	    document.getElementById("navigation").style.width = "0";
	    document.getElementById("navigation").classList.remove("openNav");
	}