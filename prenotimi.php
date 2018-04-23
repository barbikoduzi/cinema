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
    <link rel="stylesheet" href=".css">
    <div class="col-sm-9">
        <?php
            include_once('connect.php');
            session_start();
            if (!isset($_SESSION['username']))
            {
                header ("location: login.php");
            }

            else if (isset($_SESSION['username']))
            {
                echo "<style>
                input[type=text1], select {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                }
                
                input[type=submit].btn {
                    width: 100%;
                    background-color: #4CAF50;
                    color: white;
                    padding: 14px 20px;
                    margin: 8px 0;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }
                
                input[type=submit].btn:hover {
                    background-color: #45a049;
                }
                
                div.form {
                    margin: 70px;
                    border-radius: 5px;
                    background-color: #f2f2f2;
                    padding: 20px;
                }
                </style>";
                $username=$_SESSION['username'];
                $title=$_SESSION['title'];
                $result=mysqli_query($db,"SELECT Email FROM users WHERE Username LIKE '%$username%' ");
                $row=mysqli_fetch_array($result);
                $email=$row['Email'];
                echo "<form method='post' action='result.php'>
                <div class='form'>
                    <label>Username</label>
                    <input type='text1' name='username' value=".$_SESSION['username'].">
                
                    <label>Email</label>
                    <input type='text1' name='email' value=".$email.">
                
                    <label>Filmi</label>
                    <input type='text1' name='titulli' value=".$title.">
                
                    <label>Numri i biletave</label>
                    <input type='text1' name='bileta'>
                
                    <label>Orari i filmit</label>
                    <select name='orari'>
                        <option name='orari' value='17:00'>17:00</option>
                        <option name='orari' value='19:00'>19:00</option>
                        <option name='orari' value='21:00'>21:00</option>
                    </select>
                
                    <input type='submit' class='btn' name='bli' value='Bli bileten'>
                </div>"; 
            }
        ?>
        </div>
    </form>
    </div>
  </div>
</div>
<footer class="container-fluid">
    <p>Footer Text</p>
</footer>
</body>
</html>
