<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cinematron</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Cinematron</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="category.php?category=Action">Action</a></li>
        <li><a href="category.php?category=Adventure">Adventure</a></li>
        <li><a href="category.php?category=Comedy">Comedy</a></li>
        <li><a href="category.php?category=Romance">Romance</a></li>
        <li><a href="category.php?category=Thriller">Thriller</a></li>
        <li><a href="category.php?category=Animated">Animated</a></li>
        <li><a href="category.php?category=Fantasy">Fantasy</a></li>
        <li><a href="category.php?category=Drama">Drama</a></li>
        <li><a href="category.php?category=SCI-FI">SCI-FI</a></li>
      </ul><br>
      <div class="input-group">
        <form action="show.php" method='post'><input type="text" class="form-control" name="kerko" placeholder="search by title of the movie" style='width: 170%;'></form>
        <br><br><br><br>
        <a href="login.php"><input type="button" value='login' style='padding: 10px; font-size: 15px; color: white; background: #5F9EA0; border: none; border-radius: 5px;'></a><br>
        <br><form action="logout.php" method='post'><input type="submit" name='logout' value='logout' style='padding: 10px; font-size: 15px; color: white; background: #5F9EA0; border: none; border-radius: 5px;'></form>
    </div>
    </div>
    
    <div class="col-sm-9">
        <?php include 'random.php'; ?>
    </div>
  </div>
</div>

<footer class="container-fluid">
    <p>Footer Text</p>
</footer>
</body>
</html>
