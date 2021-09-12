<!doctype html>
<html lang="en">

<head>
  <title>COVID-19</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link rel="stylesheet" href="assets/css/material-dashboard.css?v=2.1.2">
</head>

<body>
  <div class="wrapper ">

  
    <?php
    require_once('sidebar.php');
    ?>

    <div class="main-panel">
      <!-- navbar -->
      <?php
      require_once('navbar.php');
      ?>

      <!-- content -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <?php
          require_once('controllers/routing.php'); 
          ?>
        </div>
      </div>

      <!-- footer -->
      <?php
      require_once('footer.php');
      ?>

    </div>
  </div>
</body>

</html>