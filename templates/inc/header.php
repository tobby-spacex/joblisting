<!DOCTYPE html>
<html>
<head>
      <title>Jobs</title>
      <link rel = "stylesheet" href = "https://bootswatch.com/4/flatly/bootstrap.min.css">
      <link rel = "stylesheet" href = "css/styles.css">

</head>
<body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <!-- <li role="presentation"><a href="index.php">Home</a></li> -->
            <a class="btn btn-default btn-sm" href="index.php" target="_blank">Home</a>

            <!-- <li role="presentation"><a href="create.php">Create Listing</a></li> -->

            <a class="btn btn-default btn-sm" href="create.php" target="_blank">Create Listing</a>

          </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE; ?> </h3>
      </div>
      <?php displayMessage();?>