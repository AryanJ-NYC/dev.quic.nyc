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
    $mailer->AddAttachment($_FILES["execSummary"]["tmp_name"], $_FILES["execSummary"]["name"]);
    $mailer->AddAttachment($_FILES["presentation"]["tmp_name"], $_FILES["presentation"]["name"]);
    $mailer->AddAttachment($_FILES["bios"]["tmp_name"], $_FILES["bios"]["name"]);
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
    "venturename" => "Venture Name:",
    "website" => "Website:",
    "title" => "Title:",
    "phone" => "Phone:",
    "email" => "Email:",
    "lb1" => "linebreak",
    "workstations" => "How many workstations do you need now and in the next 6 months?:",
    "numPos" => "How many new full-time posititons do you expect to add to your company each year for the next two years?:",
    "participatedBefore" => "Have you participated in a startup accelerator/incubator in the past? If so, which one(s)?:",
    "hearAbout" => "How did you hear about the incubator?:",
    "knowAnyone" => "Do you know anyone who works in the incubator now or has worked there in the past? If so, who?:",
    "newexisting" => "Are you a new business to New York State, or an existing business?:",
    "housing" => "Are you interested in Queens College housing at The Summit?:",
    "lb2" => "linebreak",
    "howMuchCapital" => "How much capital has been raised/invested to date? What are the sources of capital raised/invested to date?:",
    "declare" => "Define your venture in a single declarative sentence:",
    "solution" => "What existing problem does your solution (e.g.: product, service, app) address?:",
    "appeal" => "What makes your product/service unique and appealing to customers?:",
    "target" => "Who are your target users/customers, and how big is the market for your product/service?:",
    "lb3" => "linebreak",
    "core" => "What is the technology/discovery at the core of your venture?:",
    "revenue" => "What are the potential (or current) sources of revenue?:",
    "partner" => "What academic or industry groups would you like to partner with?:",
    "strategy" => "Describe your sales and marketing strategy; how will you grow the business?:",
    "advantage" => "What are barriers to entry, and what is your competitive advantage?:",
    "lb4" => "linebreak",
    "skills" => "Which qualifications - skills and resources - does your current team have?:",
    "ability" => "How will the incubator program impact your ability to succeed?:",
    "lb5" => "linebreak"
);

# get message and error values
$errorValues = array();
$message = generateMessage($fields, $errorValues);
$query = "INSERT INTO `venture`(`app-name`, `venture-name`, `website`, `title`, `phone`, `email`, `workstations`, `full-time-positions`, `participated-before`, `how-did-you-hear-about`, `know-anyone`, `new-or-existing`, `housing`, `capital`, `define`, `problem`, `unique`, `target`, `technology`, `revenue`, `partners`, `strategy`, `advantage`, `skills`, `success`) VALUES ('%APPNAME%','%VENTURENAME%','%WEBSITE%','%TITLE%','%PHONE%','%EMAIL%','%WORKSTATION%','%FULLTIME%','%BEFORE%','%HEAR%','%KNOWANYONE%','%NEWOROLD%','%HOUSE%','%CAP%','%DEF%','%PROBLEM%','%UNIQUE%','%TARGET%','%TECH%','%REV%','%PART%','%STRAT%','%ADVANT%','%SKILL%','%SUCCESS%');";

# if no fields are empty, send the email. 
# echo result to AJAX script
if(count($errorValues) == 0) {
    $query = str_replace("%APPNAME%", get('applicant'), $query);
    $query = str_replace("%VENTURENAME%", get('venturename'), $query);
    $query = str_replace("%WEBSITE%", get('website'), $query);
    $query = str_replace("%TITLE%", get('title'), $query);
    $query = str_replace("%PHONE%", get('phone'), $query);
    $query = str_replace("%EMAIL%", get('email'), $query);
    $query = str_replace("%WORKSTATION%", get('workstations'), $query);
    $query = str_replace("%FULLTIME%", get('numPos'), $query);
    $query = str_replace("%BEFORE%", get('participatedBefore'), $query);
    $query = str_replace("%HEAR%", get('hearAbout'), $query);
    $query = str_replace("%KNOWANYONE%", get('knowAnyone'), $query);
    $query = str_replace("%NEWOROLD%", get('newexisting'), $query);
    $query = str_replace("%HOUSE%", get('housing'), $query);
    $query = str_replace("%CAP%", get('howMuchCapital'), $query);
    $query = str_replace("%DEF%", get('declare'), $query);
    $query = str_replace("%PROBLEM%", get('solution'), $query);
    $query = str_replace("%UNIQUE%", get('appeal'), $query);
    $query = str_replace("%TARGET%", get('target'), $query);
    $query = str_replace("%TECH%", get('core'), $query);
    $query = str_replace("%REV%", get('revenue'), $query);
    $query = str_replace("%PART%", get('partner'), $query);
    $query = str_replace("%STRAT%", get('strategy'), $query);
    $query = str_replace("%ADVANT%", get('advantage'), $query);
    $query = str_replace("%SKILL%", get('skills'), $query);
    $query = str_replace("%SUCCESS%", get('ability'), $query);

    if ($db->query($query) === TRUE) {
        $message .= "\n***\nThis information has been successfully added to database table [venture]";
    } else {
        $message .= "\n***\nThere was an error saving this information to the database. Please keep a copy of this email for your records.";
    }

    $subject = "QC Incubator: " . get('venturename') . " Form Submission";
    sendEmail($to, $subject, $message, $from);
    echo ("success");
} else {
    echo ("error");
}
?>