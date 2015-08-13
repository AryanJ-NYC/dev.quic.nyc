<?php 
# PHP Mailer library for attachments
require_once './assets/libraries/PHPMailer/PHPMailerAutoload.php';
require_once './assets/libraries/reCAPTCHA/recaptchalib.php';
require_once("database.php");

# get the value from the input field
function get($name) {
    if(empty($_POST[$name])) {
        return "This field is required.";
    } else {
        return $_POST[$name];
    }
}

# generate message from the fields, save error messages in second parameter
function generateMessage($fields,& $emptyfields) {
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

$privatekey = "6Ld6mQkTAAAAAEoEbeM_8w4sNQ6KLuqa7MyziM4L";

$resp = recaptcha_check_answer ($privatekey,
                            $_SERVER["REMOTE_ADDR"],
                            $_POST["recaptcha_challenge_field"],
                            $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
    echo ("cap error");
    return;
}

# to and from fields for the email
#$to = "TBrown@gc.cuny.edu"; 
$to = "kevinramsunder4@gmail.com"; 
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
    "personalstatement" => "Personal Statement:",
    "lb5" => "linebreak"
);

# get message and error values
$errorValues = array();
$message = generateMessage($fields, $errorValues);
$query = "INSERT INTO `student`(`Name`, `Email`, `Phone`, `Degree`, `Graduation`, `Year`, `Status`, `Credits_Needed`, `experience`, `personal`) VALUES ('%NAME%','%EMAIL%','%PHONE%','%DEGREE%','%GRAD%','%YEAR%','%STATUS%','%CREDITS%','%EXP%','%PERSONAL%')";
   
# if no fields are empty, send the email. 
# echo result to AJAX script
if(count($errorValues) == 0) {
    $query = str_replace("%NAME%", get('applicant'), $query);
    $query = str_replace("%EMAIL%", get('email'), $query);
    $query = str_replace("%PHONE%", get('phone'), $query);
    $query = str_replace("%DEGREE%", get('degree'), $query);
    $query = str_replace("%GRAD%", get('gradseason'), $query);
    $query = str_replace("%YEAR%", get('gradyear'), $query);
    $query = str_replace("%STATUS%", get('citizenship'), $query);
    $query = str_replace("%CREDITS%", get('credstograd'), $query);
    $query = str_replace("%EXP%", get('programmingExperience'), $query);
    $query = str_replace("%PERSONAL%", get('personalstatement'), $query);

    if ($db->query($query) === TRUE) {
        $message .= "\n***\nThis information has been successfully added to database table [student]";
    } else {
        $message .= "\n***\nThere was an error saving this information to the database. Please keep a copy of this email for your records.";
    }

    $subject = "QC Incubator: " . get('applicant') . " Form Submission";
    sendEmail($to, $subject, $message, $from);
    echo ("success");
} else {
    echo ("error");
}
?>