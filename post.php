<?php
// validate name
$name = filter_input(INPUT_POST, 'name');
$inputs['name'] = $name;
if (!$name || trim($name) === '') {
    $errors['name'] = 'Please enter your name';
}

// validate email
$email = filter_input(INPUT_POST, 'email');
$inputs['email'] = $email;
if ($email) {
    $email = filter_var($email);
    if (!$email) {
        $errors['email'] = 'Please enter a valid email';
    }
} else {
    $errors['email'] = 'Please enter an email';
}

// validate subject
$subject = filter_input(INPUT_POST, 'subject');
$inputs['subject'] = $subject;
if (!$subject || trim($subject) === '') {
    $errors['subject'] = 'Please enter the subject';
}

// validate message
$message = filter_input(INPUT_POST, 'message');
$inputs['message'] = $message;
if (!$message || trim($message) === '') {
    $errors['message'] = 'Please enter the message';
}
?>