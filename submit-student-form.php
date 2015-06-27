<?php 
# PHP Mailer library for attachments
require_once './libraries/PHPMailer/PHPMailerAutoload.php';

# get the value from the input field
function get($name) {
    if(empty($_POST[$name])) {
        return "This field is required.";
    } else {
        return $_POST[$name];
    }
}

# generate message from the fields, save error messages in second parameter
function generateMessage($fields, $emptyfields) {
    $message = "";

    foreach ($fields as $key => $value) {
        if(strcmp($value, "linebreak") == 0) {
            $message .= "\n";
            continue;
        }

        $fieldInput = get($key);
        if($fieldInput === "This field is required.") {
            array_push($emptyfields, $key);
        }

        $message .= $value . " " . $fieldInput . "\n"; 
    }

    return $message;
}

# use PHPMailer library to send email with attachments
function sendEmail($to, $subject, $message, $from) {
    # initialize PHPMailer object
    $mailer = new PHPMailer;
    $mailer->From = $from;
    $mailer->FromName = "Queens College Incubator";
    $mailer->addAddress($to);
    $mailer->Subject = $subject;
    $mailer->Body = $message;
    $mailer->AddAttachment($_FILES["unofficialTranscript"]["tmp_name"], $_FILES["unofficialTranscript"]["name"]);
    $mailer->AddAttachment($_FILES["resume"]["tmp_name"], $_FILES["resume"]["name"]);
    $mailer->send();
}

# to and from fields for the email
$to = "boog690@gmail.com"; 
$from = "info@quic.nyc";

# fields on the form
$fields = array(
    "applicant" => "Name of Applicant:",
    "phone" => "Phone:",
    "email" => "Email:",
    "lb1" => "linebreak",
    "degree" => "Degree in progress?:",
    "gradyear" => "Graduation Year:",
    "gradseason" => "Graduation Season:",
    "citizenship" => "Citizenship:",
    "credstograd" => "Credits to Graduate:",
    "lb2" => "linebreak",
    "programmingExperience" => "Programming Experience:",
    "personalstatement" => "Personal Statement",
    "lb5" => "linebreak"
);

# get message and error values
$errorValues = array();
$message = generateMessage($fields, $errorValues);
   
# if no fields are empty, send the email. 
# echo result to AJAX script
if(count($errorValues) == 0) {
    $subject = "QC Incubator: " . get('applicant') . " Form Submission";
    sendEmail($to, $subject, $message, $from);
    echo ("success");
} else {
    echo ("error");
}
?>