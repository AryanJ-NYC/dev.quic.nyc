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
    $mailer->AddAttachment($_FILES["execSummary"]["tmp_name"], $_FILES["execSummary"]["name"]);
    $mailer->AddAttachment($_FILES["presentation"]["tmp_name"], $_FILES["presentation"]["name"]);
    $mailer->AddAttachment($_FILES["bios"]["tmp_name"], $_FILES["bios"]["name"]);
    $mailer->send();
}

# to and from fields for the email
$to = "kevinramsunder4@gmail.com"; 
$from = "info@quic.nyc";

# fields on the form
$fields = array(
    "venturename" => "Venture Name:",
    "website" => "Website:",
    "applicant" => "Name of Applicant:",
    "title" => "Title:",
    "phone" => "Phone:",
    "email" => "Email:",
    "lb1" => "linebreak",
    "workstations" => "How many workstations do you need now and in the next 6 months?:",
    "numPos" => "How many new full-time posititons do you expect to add to your company each year for the next two years?:",
    "newexisting" => "Are you a new business to New York State, or an existing business?:",
    "participatedBefore" => "Have you participated in a startup accelerator/incubator in the past? If so, which one(s)?:",
    "hearAbout" => "How did you hear about the incubator?:",
    "knowAnyone" => "Do you know anyone who works in the incubator now or has worked there in the past? If so, who?:",
    "lb2" => "linebreak",
    "howMuchCapital" => "How much capital has been raised/invested to date? What are the sources of capital raised/invested to date?:",
    "declare" => "Define your venture in a single declarative sentence:",
    "solution" => "What existing problem does your solution (e.g.: product, service, app) address?:",
    "appeal" => "What makes your product/service unique and appealing to customers?:",
    "target" => "Who are your target users/customers, and how big is the market for your product/service?:",
    "lb3" => "linebreak",
    "core" => "What is the technology/discovery at the core of your venture?:",
    "revenue" => "What are the potential (or current) sources of revenue?:",
    "strategy" => "Describe your sales and marketing strategy; how will you grow the business?:",
    "advantage" => "What are barriers to entry, and what is your competitive advantage?:",
    "partner" => "What academic or industry groups would you like to partner with?:",
    "lb4" => "linebreak",
    "skills" => "Which qualifications - skills and resources - does your current team have?:",
    "ability" => "How will the incubator program impact your ability to succeed?:",
    "lb5" => "linebreak"
);

# get message and error values
$errorValues = array();
$message = generateMessage($fields, $errorValues);
   
# if no fields are empty, send the email. 
# echo result to AJAX script
if(count($errorValues) == 0) {
    $subject = "QC Incubator: " . get('venturename') . " Form Submission";
    sendEmail($to, $subject, $message, $from);
    echo ("success");
} else {
    echo ("error");
}
?>