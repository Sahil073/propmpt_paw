<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Google Apps Script Web App URL
    $url = "https://script.google.com/macros/s/AKfycbx-jMDDycAu7ksNzwH8Z2JjrN11uEXLJ5wUDJuhpadbCHcDdZtpJ3al7E9XRItbgumF8w/exec";

    $data = array(
        "name" => $name,
        "email" => $email,
        "subject" => $subject,
        "message" => $message
    );

    $options = array(
        "http" => array(
            "header"  => "Content-type: application/json\r\n",
            "method"  => "POST",
            "content" => json_encode($data),
        ),
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        echo "❌ Error saving data.";
    } else {
        echo "✅ Your response has been saved to Google Sheets!";
    }
}
?>
