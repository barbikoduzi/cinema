<?php
    include_once("connect.php");
    $result=mysqli_query($db,"SELECT Title, ID_Movie, SUBSTR(Title,1,16) AS title FROM about GROUP BY Title ORDER BY RAND() LIMIT 9");
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
?>