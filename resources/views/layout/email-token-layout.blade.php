<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{URL::asset("")}}">
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/email-page.css">
    <title>Verify</title>
</head>
<body>
<header class="header-email-token">
    <div class="logo-image">
        <img src="images/logo-bait.png"/>
    </div>
    <div class="title-email-token">
        <p>Trường Đại học Công Nghệ Thông Tin TPHCM</p>
        <h2>Book And Action UIT Club</h2>
    </div>
    <div></div>
</header>
    @yield("mail-signuptoken")
</body>
</html>