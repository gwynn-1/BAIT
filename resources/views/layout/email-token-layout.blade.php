<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{URL::asset("")}}">
    <link rel="icon" type="image/png" href="images/logo-bait.png"/>
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/email-page.css">
    <title>{{(isset($title)) ? $title: 'Verify' }}</title>
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
    @yield("section-body")
</body>
</html>