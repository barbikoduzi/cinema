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
        <form action="search.php" method='post'><input type="text" class="form-control" name="search" placeholder="search by title of the movie" style='width: 170%;'></form>
        <br><br><br><br>
        <a href="login.php"><input type="button" value='login' style='padding: 10px; font-size: 15px; color: white; background: #5F9EA0; border: none; border-radius: 5px;'></a><br>
        <br><form action="logout.php" method='post'><input type="submit" name='logout' value='logout' style='padding: 10px; font-size: 15px; color: white; background: #5F9EA0; border: none; border-radius: 5px;'></form>
    </div>
    </div>
    <div class="col-sm-9">
        <?php
            include_once("connect.php");
            if(isset($_GET['category']))
            {    
                $category=$_GET['category'];
                $result=mysqli_query($db,"SELECT category_about.ID_Movie, category_about.ID_Category, about.ID_Movie, 
                    category.ID_Category, category.Category, about.Title, SUBSTR(about.Title,1,16) AS title 
                    FROM category JOIN category_about ON category_about.ID_Category=category.ID_Category
                    JOIN about ON category_about.ID_Movie=about.ID_Movie
                    WHERE category.Category LIKE '%$category%'
                    GROUP BY about.Title");

                echo "<p>";
                echo "<style>
                .zoom{
                    transition:1s; 
                }
                
                .zoom:hover{
                    width:200px;
                    height:340px;
                }
          </style>";
                while($row=mysqli_fetch_array($result))
                {
                    if(strlen($row['title'])<16)
                        echo "<div style='display: inline-block; margin: 70px;'><a href='show.php?id=$row[ID_Movie]'><img src='covers/".$row['ID_Movie'].".jpg' class='zoom' height='300' width='180px'><figcaption>$row[title]</figcaption></a></div>";
                    else
                    echo "<div style='display: inline-block; margin: 70px;'><a href='show.php?id=$row[ID_Movie]'><img src='covers/".$row['ID_Movie'].".jpg' class='zoom' height='300' width='180px'><figcaption title='$row[Title]'>$row[title]...</figcaption></a></div>";
                }
                echo "</p>";
            }
        ?>
    </div>
  </div>
</div>

<footer class="container-fluid">
    <p>Footer Text</p>
</footer>
</body>
</html>
