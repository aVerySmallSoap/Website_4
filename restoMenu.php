<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./CSS/dyslexia.css">
    <link rel="stylesheet" href="./CSS/pop.css">
    <title>Restaurant Menu</title>
</head>
<body>
    <div class="rest-container">
        <div class="menu">
            <div class="menu-title">
                <span class="title">Food Menu!</span>
            </div>
            <div class="menu-body">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="form">
                    <select name="menu" id="select-menu">
                        <option value="Burger">Burger</option>
                        <option value="French Fries">French Fries</option>
                        <option value="Spaghetti">Spaghetti</option>
                        <option value="Pizza">Pizza</option>
                    </select>
                    <button type="submit">Order!</button>
                </form>
            </div>
        </div>
    </div>

    <script src="./JS/Pop.js"></script>
</body>
</html>

<?php
    if(isset($_POST["menu"])){
        $choice = $_POST["menu"];
        echo "<script>popOut('$choice')</script>";
    }
?>