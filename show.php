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
            session_start();
            if(isset($_GET['id']))
            {   
                $_SESSION['id']=$_GET['id'];
                $id=$_GET['id'];
                $result=mysqli_query($db,"SELECT about.ID_Movie, about.Title, about.About, about.IMBd, about.Url, 
                    about.Director, GROUP_CONCAT(actor.First_Name, ' ', actor.Last_Name) AS Actor
                    FROM about 
                    JOIN actor_about ON about.ID_Movie=actor_about.ID_Movie
                    JOIN actor ON actor_about.ID_Actor=actor.ID_Actor
                    WHERE about.ID_Movie=$id
                    GROUP BY about.ID_Movie"); 
                 
                 while($row=mysqli_fetch_array($result))
                 {
                     $url=$row['Url'];
                     $url=explode('=',$url)[1];
                     $url=explode('&',$url)[0];
                     echo "<p style='display: block;  margin: 70px;'>";
                     echo "<strong style='font-size: 450%;'>".$row['Title']."</strong>";
                     echo "<div id='player' style='margin-left:6%'></div>";
                     echo "<script>
                              var tag = document.createElement('script');
  
                              tag.src = 'https://www.youtube.com/iframe_api';
                              var firstScriptTag = document.getElementsByTagName('script')[0];
                              firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                              var theDiv = document.getElementById('player');
                              console.log(theDiv.getAttribute['name']);
                              // 3. This function creates an <iframe> (and YouTube player)
                              //    after the API code downloads.
                              var player;
                              function onYouTubeIframeAPIReady() 
                              {
                                player = new YT.Player('player', 
                                {
                                  height: '562',
                                  width: '1000',
                                  videoId: '$url',
                                  events: 
                                  {
                                    'onReady': onPlayerReady
                                  }
                                });
                              }
                      
                              // 4. The API will call this function when the video player is ready.
                              function onPlayerReady(event) 
                              {
                                event.target.playVideo();
                              }
                      
                              // 5. The API calls this function when the player's state changes.
                              //    The function indicates that when playing a video (state=1),
                              //    the player should play for six seconds and then stop.
                              var done = false;
                              function stopVideo() 
                              {
                                player.stopVideo();
                              }
                           </script>";
                     echo "</p>";
                    echo "<p style='display: inline-block; font-size: large; margin-left: 6%;'>";
                    echo $row['About']."<br><br>";
                    echo "<strong>Director: </strong>".$row['Director']."<br>";
                    echo "<strong>IMDb: </strong>".$row['IMBd']."<br>";
                    echo "<strong>Stars: </strong>".$row['Actor']."<br>";
                    echo "</p>";
                    echo "<p style='display: block;' ><form action='prenotimi.php?id=$id' method='post'>
                        <input type='submit' value='Prenotoni' style='padding: 10px; font-size: 15px; color: white; background: #5F9EA0; border: none; border-radius: 5px;margin-left:6%'>        
                    </form></p>";
                    $_SESSION['id']=$row['ID_Movie'];
                    $_SESSION['title']=$row['Title'];
                }
            }
            if(isset($_POST['kerko']))
            {   
                $title=$_POST['kerko']; 
                $result=mysqli_query($db,"SELECT about.ID_Movie, about.Title, about.About, about.IMBd, about.Url, 
                    about.Director, GROUP_CONCAT(actor.First_Name, ' ', actor.Last_Name) AS Actor
                    FROM about 
                    JOIN actor_about ON about.ID_Movie=actor_about.ID_Movie
                    JOIN actor ON actor_about.ID_Actor=actor.ID_Actor
                    WHERE about.Title LIKE '%$title%'
                    GROUP BY about.ID_Movie"); 
                 
                 while($row=mysqli_fetch_array($result))
                 {
                     $url=$row['Url'];
                     $url=explode('=',$url)[1];
                     $url=explode('&',$url)[0];
                     echo "<p style='display: block;  margin: 70px;'>";
                     echo "<strong style='font-size: 450%;'>".$row['Title']."</strong>";
                     echo "<div id='player' style='margin-left:6%'></div>";
                     echo "<script>
                            var tag = document.createElement('script');
          
                            tag.src = 'https://www.youtube.com/iframe_api';
                            var firstScriptTag = document.getElementsByTagName('script')[0];
                            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                            var theDiv = document.getElementById('player');
                            console.log(theDiv.getAttribute['name']);
                            // 3. This function creates an <iframe> (and YouTube player)
                            //    after the API code downloads.
                            var player;
                            function onYouTubeIframeAPIReady() 
                            {
                              player = new YT.Player('player', 
                              {
                                height: '562',
                                width: '1000',
                                videoId: '$url',
                                events: 
                                {
                                  'onReady': onPlayerReady
                                }
                              });
                            }
                    
                            // 4. The API will call this function when the video player is ready.
                            function onPlayerReady(event) 
                            {
                              event.target.playVideo();
                            }
                    
                            // 5. The API calls this function when the player's state changes.
                            //    The function indicates that when playing a video (state=1),
                            //    the player should play for six seconds and then stop.
                            var done = false;
                            function stopVideo() 
                            {
                              player.stopVideo();
                            }
                           </script>";
                     echo "</p>";
                     echo "<p style='display: inline-block; font-size: large; margin-left: 6%;'>";
                     echo $row['About']."<br><br>";
                     echo "<strong>Director: </strong>".$row['Director']."<br>";
                     echo "<strong>IMDb: </strong>".$row['IMBd']."<br>";
                     echo "<strong>Stars: </strong>".$row['Actor']."<br>";
                     echo "</p>";
                     echo "<p style='display: block;' ><form action='prenotimi.php?id=$row[ID_Movie]' method='post'>
                        <input type='submit' value='Prenotoni' style='padding: 10px; font-size: 15px; color: white; background: #5F9EA0; border: none; border-radius: 5px;margin-left:6%'>        
                     </form></p>";
                    $_SESSION['id']=$row['ID_Movie'];
                    $_SESSION['title']=$row['Title'];
                }
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
