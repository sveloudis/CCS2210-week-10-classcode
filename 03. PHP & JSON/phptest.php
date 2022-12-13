<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>PHP Test</title>
</head>
<body>

<p><B>First Name:</B> <span id="fname"></span></p>
<p><B>Last Name:</B> <span id="lname"></span></p>
<p><B>Age:</B> <span id="age"></span></p>

<button onclick="getStudentData()">Get Student Data</button>

<script>
	function getStudentData() {
		var requestURL = 'php/student.php';
	    var request = new XMLHttpRequest();

		request.onload = function() {
		    var student = JSON.parse(this.responseText);
		    document.getElementById("fname").innerHTML = student.fname;
		    document.getElementById("lname").innerHTML = student.lname;
		    document.getElementById("age").innerHTML = student.age;
		};

	    request.open('GET', requestURL);
	    request.send();
	}
</script>

</body>
</html>