<?php 
# PHP Mailer library for attachments
require_once './assets/libraries/PHPMailer/PHPMailerAutoload.php';
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
    $mailer->send();
}

# to and from fields for the email
$to = "TBrown@gc.cuny.edu"; 
$from = "info@quic.nyc";

# fields on the form
$fields = array(
    "name" => "Name:",
    "email" => "Email:",
    "phone" => "Phone Number:",
    "lb1" => "linebreak",
    "text" => "Message:"
);

# get message and error values
$errorValues = array();
$message = generateMessage($fields, $errorValues);
$query = "INSERT INTO `contact`(`Name`, `Email`, `Phone`, `Message`) VALUES ('%NAME%', '%EMAIL%', '%PHONE%', '%MESSAGE%');";

db_key_values = [
    "name" => "%NAME%",
    "email" => "%EMAIL%",
    "phone" => "%PHONE%",
    "text" => "%MESSAGE%"
]

# if no fields are empty, send the email. 
# echo result to AJAX script
if (count($errorValues) == 0) {
    foreach ($db_key_values as $key => $value) {
        $query = str_replace($value, mysqli_escape_string(get($key)), $query);
    }

    if ($db->query($query) === TRUE) {
        $message .= "\n***\nThis information has been successfully added to database table [contact]";
    } else {
        $message .= "\n***\nThere was an error saving this information to the database. Please keep a copy of this email for your records.";
    }

    $subject = "QC Incubator: Message from " . get('name');
    sendEmail($to, $subject, $message, $from);
    echo ("success");
} else {
    echo ("error");
}
?>