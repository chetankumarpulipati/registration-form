<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){

$servername = 'localhost';  
$username = 'root'; 
$password = ''; 
$dbname = 'membership_registration';  
    $con= mysqli_connect($servername,$username,$password,$dbname) or die("Couldn't connect todb: " . mysqli_connect_error());
    if (
        isset($_POST["membership-name"]) || isset($_POST["cr"]) || isset($_POST["phno"]) || isset($_POST["gender"]) || isset($_POST["email"]) ||
        isset($_POST["address"]) || isset($_POST["cty"]) || isset($_POST["state"]) || isset($_POST["pin-code"]) || isset($_POST["emergency-contact-1"]) ||
        isset($_POST["emergency-contact-1-relation"]) || isset($_FILES["profile-image"]["name"]) || isset($_POST["sports"]) || isset($_POST["father-name"]) ||
        isset($_POST["father-phone-number"]) || isset($_POST["father-occupation"]) || isset($_POST["father-email"]) || isset($_POST["mother-name"]) ||
        isset($_POST["mother-phone-number"]) || isset($_POST["allergies"]) || isset($_POST["member"]) || isset($_POST["durat"]) ||
        isset($_POST["liability-waiver"]) || isset($_POST["code-of-conduct-agreement"]) || isset($_POST["photo-video-release-consent"]) ||
        isset($_FILES["signature"]["name"])
    ) {
    $name = $_POST['membership-name'];
    $dob=$_POST['cr'];
    $phone=$_POST['phno'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['cty'];
    $state=$_POST['state'];
    $pinCode = $_POST['pin-code'];
    $emergencyContact1 = $_POST['emergency-contact-1'];
    $emergencyContact1Relation = $_POST['emergency-contact-1-relation'];
    $sports = $_POST['sports'];
    $fatherName = $_POST['father-name'];
    $fatherPhoneNumber = $_POST['father-phone-number'];
    $fatherOccupation = $_POST['father-occupation'];
    $fatherEmail = $_POST['father-email'];
    $motherName = $_POST['mother-name'];
    $motherPhoneNumber = $_POST['mother-phone-number'];
    $allergies = $_POST['allergies'];
    $memberType = $_POST['member'];
    $membershipDuration = $_POST['durat']; 
    $liabilityWaiver = $_POST['liability-waiver'] ? 1 : 0;
    $codeOfConductAgreement = $_POST['code-of-conduct-agreement'] ? 1 : 0;
    $photoVideoReleaseConsent = $_POST['photo-video-release-consent'] ? 1 : 0;

    
    
    $sql = "INSERT INTO `user_registration` (`name`, `dob`, `phone`, `gender`, `email`, `address`, `city`, `state`, `pin_code`, `emergency_contact`, `emergency_contact_relation`, `sports`, `father_name`, `father_phone`, `father_occupation`, `father_email`, `mother_name`, `mother_phone`, `allergies`, `membership_type`, `membership_duration`, `liability_waiver`, `code_of_conduct_agreement`, `photo_video_release_consent`)
VALUES ('$name', '$dob','$phone', '$gender', '$email', '$address', '$city', '$state', '$pinCode', '$emergencyContact1', '$emergencyContact1Relation', '$sports', '$fatherName', '$fatherPhoneNumber', '$fatherOccupation', '$fatherEmail', '$motherName', '$motherPhoneNumber', '$allergies', '$memberType', '$membershipDuration', $liabilityWaiver, $codeOfConductAgreement, $photoVideoReleaseConsent)";

$query = mysqli_query($con, $sql);
if ($query !== false) {
    echo "entered";
} else {
    echo "failed: " . mysqli_error($con);
}

}
mysqli_close($con);
}
