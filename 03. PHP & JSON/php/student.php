<?php
	class Student {
	  public $fname;
	  public $lname;
	  public $age;

	  function set_fname($name) {
	    $this->fname = $name;
	  }
	  function set_lname($name) {
	    $this->lname = $name;
	  }
	    function set_age($age) {
	    $this->age = $age;
	  }
	}

	$mystudent = new Student();
	$mystudent->set_fname("Joe");
	$mystudent->set_lname("Doe");
	$mystudent->set_age(20);

	$myJSON = json_encode($mystudent);

	echo $myJSON;
?> 
