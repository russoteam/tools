<?php
require '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./report.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/edc63f5585.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body style="background: url(./11.png); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    <div class="regbox" style="height:400px;">
        <div class="content">
          <h1>Make Your Report</h1>
          <form method="post" action="send.php">
            <div class="products">
              <label class="code">Discord Name + Tag</label>
              <input class="cd-in" type="text" name="name" id="name" required placeholder="Make Your Code">
              <label class="code">Your Report</label>
              <input class="cd-in" type="text" name="report" id="report" required placeholder="Make Your Code">
              <button class="login" type="submit" name="submit" id="submit">Report</button>
          </form>
          <div class="register">
            <p class="don">If You Wont To Back To Our WebSite  <a href="../index.php" class="up" style="color: #1877f2;"> Back</a></p>
          </div>
      </div>
    </div>
</body>
</html>