<!--This is my main page -->

<!DOCTYPE html>
<html>
<meta charset='utf-8'>
<title>OOP in PHP </title>
<head>
<?php 
//including file
include ("class_lib.php");?>
</head>
<body>

<?php 
//creating objects of class person
$ashwini = new person;
$vikash = new person;

//assigning name to method set_name
$ashwini->set_name("Ashwini Kumar");

$vikash->set_name("Vikash singh");

//printing names using get_name method
echo "Ashwini full name is:" . $ashwini->get_name()."<br/>";
echo "vikash full name is:" . $vikash->get_name()."<br/>";

//directing accessing properties in a class is bad practise 
echo "Bad practise don't do it ".$ashwini->name."<br>";
//using constructor 
$i_am_for_constructor = new person("Chetan and Anirudha");
echo "My leaders:".$i_am_for_constructor->get_name()."<br>";

//using access modifiers 
echo "I am private : " . $ashwini->height . "<br>";

//calling get_name method from employee class object. 

$i_am_employee = new employee("I am employee class");

echo "This coming using employee object:" . $i_am_employee->get_name();



?>



</body>
</html>

