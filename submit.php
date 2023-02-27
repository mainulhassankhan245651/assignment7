
<!--
Task 3: Superglobal Variables in PHP

Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal variable.
Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and email properties based on the form data.
Use the getName() and getEmail() methods to display the properties on the webpage.
-->
<?php
echo "Ans: to the Task (3) <br>";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Script</title>
  </head>
  <body>
    <?php
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
    //   $message = $_POST['message'];
      echo "<p>Thank you for your submission, $name!</p>";
      echo "<p>Your email address is $email.</p>";
    //   echo "<p>Your message is:</p>";
    //   echo "<p>$message</p>";
    } else {
      echo "<p>Error: invalid form submission method.</p>";
    }
    
    // Output query string parameters using $_GET
    if (!empty($_GET)) {
      echo "<h2>Query String Parameters:</h2>";
      echo "<ul>";
      foreach ($_GET as $key => $value) {
        echo "<li>$key: $value</li>";
      }
      echo "</ul>";
    }
    
    // Output all request parameters using $_REQUEST
    if (!empty($_REQUEST)) {
      echo "<h2>All Request Parameters:</h2>";
      echo "<ul>";
      foreach ($_REQUEST as $key => $value) {
        echo "<li>$key: $value</li>";
      }
      echo "</ul>";
    }
    ?>
  </body>
</html>


<!--Task 2: Basic OOP in PHP
Create a PHP class called "Person" 
with the following properties and methods:
Properties: Name  , Email
Methods: 
setName($name): sets the name property
setEmail($email): sets the email property
getName(): returns the name property
getEmail(): returns the email property

Create an instance of the Person class and set the name and email properties.
Use the getName() and getEmail() methods to display the properties on the webpage.
-->


<?php
echo "Ans: to the Task (2) <br>";


class Person{
    public $name;
    public $email;
    public function __construct( $name, $email ) {
        $this->name = $name;
        $this->email = $email;
    }
    public function getName(){
    return $this->name;
    }
    public function getEmail(){
    return $this->email;  
    }
    public function setName($name){
        return $this->name;
    }
    public function setEmail($email){
        return $this->email;
    }
}

$person =new Person($name,$email);
echo $person->getName();
// echo"\n";
echo "<br>";
echo $person->getEmail();
// echo"\n";
echo "<br>";
?>

