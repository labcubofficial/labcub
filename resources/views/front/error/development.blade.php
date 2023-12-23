<!DOCTYPE html>
<html lang="en">
<head>
    <title>Labcub</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <style>
        .underDevelopmentPopup{
            max-width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Your other website content goes here -->

<!-- Popup or banner container -->
<div class="underDevelopmentPopup">
    <div class="popup-content">
        <img src="{{ asset('favicon.png') }}" alt="" style="width: 100px; height: 100px; padding: 1em;">
        <p style="font-size: 16px;">Our website is currently under development to bring you a better experience. Thank you for your patience!</p>
        <p style="font-size: 16px; font-weight: 600;">Team Labcub</p>
    </div>
</div>

<!-- Your other website content goes here -->

</body>
</html>
