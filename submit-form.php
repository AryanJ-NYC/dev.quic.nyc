<?php 
# Work in progress... add input validation

# who we are sending the email to 'admin'
$to = "admin@admin.com"; # example

# must be sent from a server email following SMTP 
$headers = "From: serverEmail@admin.com"; # example

if(isset($_POST['submit'])) {
    # extracting information from the submit form
    $from = $_POST['email']; 

    $venture_name = $_POST['venturename'];
    $website = $_POST['website'];
    $applicant = $_POST['applicant'];
    $title = $_POST['title'];
    $phone = $_POST['phone'];

    $workstations = $_POST['workstations'];
    $number_of_positions = $_POST['numPos'];
    $new_business = $_POST['newexisting'];
    $participated_before = $_POST['participatedBefore'];
    $how_did_you_hear_about = $_POST['hearAbout'];
    $know_anyone = $_POST['knowAnyone'];

    $plan = $_POST['howMuchCapital'];
    $declarative_sentence = $_POST['declare'];
    $solution = $_POST['solution'];
    $appeal = $_POST['appeal'];
    $target = $_POST['target'];

    $core = $_POST['core'];
    $revenue = $_POST['revenue'];
    $strategy = $_POST['strategy'];
    $advantage = $_POST['advantage'];
    $partner = $_POST['partner'];

    $skills = $_POST['skills'];
    $ability = $_POST['ability'];

    # TODO: add files 
    #$exec_summary = $_POST['execSummary'];
    #$presentation = $_POST['presentation'];
    #$bios = $_POST['bios'];

    # constructing the email
    $subject = "QC Incubator: " . $venture_name . " Form Submission";
   
    $message = 

    "Venture Name: " . $venture_name . "\n" .
    "Website: " . $website . "\n" .
    "Name of Applicant: " . $applicant . "\n" .
    "Title: " . $title . "\n" .
    "Phone: " . $phone . "\n" .
    "Email: " . $from . "\n" .

     "\n" .

    "How many workstations do you need now and in the next 6 months?: " . $workstations . "\n" .
    "How many new full-time posititons do you expect to add to your company each year for the next two years?: " . $number_of_positions . "\n" .
    "Are you a new business to New York State, or an existing business?: " . $new_business . "\n" .
    "Have you participated in a startup accelerator/incubator in the past? If so, which one(s)?: " . $participated_before . "\n" .
    "How did you hear about the incubator?: " . $how_did_you_hear_about . "\n" .
    "Do you know anyone who works in the incubator now or has worked there in the past? If so, who?: " . $know_anyone . "\n" .

     "\n" .

    "How much capital has been raised/invested to date? What are the sources of capital raised/invested to date?: " . $plan . "\n" .
    "Define your venture in a single declarative sentence: " . $declarative_sentence . "\n" .
    "What existing problem does your solution (e.g.: product, service, app) address?: " . $solution . "\n" .
    "What makes your product/service unique and appealing to customers?: " . $appeal . "\n" .
    "Who are your target users/customers, and how big is the market for your product/service?: " . $target . "\n" .

     "\n" .

    "What is the technology/discovery at the core of your venture?: " . $core . "\n" .
    "What are the potential (or current) sources of revenue?: " . $revenue . "\n" .
    "Describe your sales and marketing strategy; how will you grow the business?: " . $strategy . "\n" .
    "What are barriers to entry, and what is your competitive advantage?: " . $advantage . "\n" .
    "What academic or industry groups would you like to partner with?: " . $partner . "\n" .

     "\n" .

    "Which qualifications - skills and resources - does your current team have?: " . $skills . "\n" .
    "How will the incubator program impact your ability to succeed?: " . $ability . "\n" .

     "\n" 
    ;

    # send the email
    mail($to, $subject, $message, $headers);

    # success
    echo "Thank you! Your form has been sent successfully.<br>";
} else {
    echo "An error has occurred. Please try again later.<br>";
}
?>
