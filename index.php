<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/CSS/index.css">
    <link rel="stylesheet" href="/CSS/error-styling.css">
    <title>Age Verification</title>
</head>
<body>

    <div class="container">
        <div class="title-container">
            <span id="title">Age verification</span>
        </div>
        <div class="body-container">
            <form action="/Operations/verification.php" onsubmit="return sanitizeInput()" method="post" id="form-body">
                <div class="form-row">
                    <input type="text" name="age" id="age">
                    <button type="submit">Verify Age</button>
                </div>
            </form>
        </div>
    </div>

    <script src="/JS/verification.js"></script>
</body>
</html>
