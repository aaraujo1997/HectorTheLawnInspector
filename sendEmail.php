<?php
    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $skills = $_POST['skills'];
        $resume = $_POST['resume'];

        $mailTo = "service.hectorinspector.com";
        $headers = "From: " . $email;

        $name = $firstName . " " . $lastName . "is contacting you about possible employment. \n";
        $skillsSection = "Skills & Qualifications: " . $skills . "\n";
        $contactSection = "They can be contacted at: " . $phone . "or " . $email;

        $subject = "Job Inquiry";
        $message = $name . $skillsSection . $contactSection;

        mail($mailTo, $subject, $message, $headers);
        header("Location: careers.html?mailsend");

    }
?>
