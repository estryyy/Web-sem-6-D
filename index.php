<!DOCTYPE html>
<html lang="en">

<?php include "partials/head.php" ?>
<?php include "database/database.php" ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include "partials/nav.php" ?>
    <?php include "partials/sidebar.php" ?>
    <div class="content-wrapper">
      <?php include "routes.php" ?>
    </div>
      <?php include "partials/control.php" ?>
      <?php include "partials/footer.php" ?>
  </div>
</body>
</html>