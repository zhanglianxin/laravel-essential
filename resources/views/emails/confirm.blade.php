<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Confirm your account</title>
</head>
<body>
    <h1>Thanks for your registration!</h1>
    <p>
        Please visit the following link to complete your registration: <a
            href="{{ route('confirm_email', $user->activation_token) }}">
            {{ route('confirm_email', $user->activation_token) }}</a>
    </p>
</body>
</html>
