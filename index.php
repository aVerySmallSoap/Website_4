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
            <form action="<?php echo $_SERVER['PHP_SELF']?>" onsubmit="return sanitizeInput()" method="post" id="form-body">
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
<?php
if(isset($_POST["age"])){
    $userAge = $_POST["age"];
    if($userAge <= 17){
        echo "<script>createError('You are under-aged!')</script>";
    }elseif($userAge >=18 && $userAge <=149){
        echo "<script>createError('You are allowed to vote!', 'limegreen')</script>";
    }elseif($userAge >=150){
        echo "<script>createError('Strange, however, you are allowed to vote!', 'yellow')</script>";
    }
}
?>
