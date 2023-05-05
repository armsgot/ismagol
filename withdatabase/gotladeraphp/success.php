<?php
    $title = 'Success';
    require_once 'includes/header.php';
?>
<link href="css/style.css" rel="stylesheet">
<h1 class="text-center">You Have Been Registered!</h1>

<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$specialty = $_POST['specialty'];
$other = $_POST['other'];
$contact = $_POST['contact'];

        $conn = new mysqli('localhost','root','','gotladera_registration_db');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into registration(firstname, lastname, dob, email, specialty, other, contact)values(?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssi", $firstname, $lastname, $dob, $email, $specialty, $other, $contact);
            $stmt->execute();
            echo "<h1>Registration has been Connected Successfully!</h1>";
            $stmt->close();
            $conn->close();

        }
?>
    
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Registration Information</h5>
    <p class="card-text">
        <?php
        echo "Full Name: ".$_POST['firstname']." ".$_POST['lastname'];
        echo "<br>";
        echo "Date of Birth(Y-M-D): ".$_POST['dob'];
        echo "<br>";
        echo "Email Address: ".$_POST['email'];
        echo "<br>";
        echo "Specialty/Specialties: ".$_POST['specialty'];
        echo "<br>";
        echo "Other Specialty: ".$_POST['other'];
        echo "<br>";
        echo "Contact Number: ".$_POST['contact'];
        echo "<br>";
        ?>
    </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>