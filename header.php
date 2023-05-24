<?php
    if(isset($_SESSION['profile'])){
        $profilePath=$_SESSION['profile'].'/profile.php';
    }else{
        $profilePath='signin.php';
    }
?>

<link rel="stylesheet" type="text/css" href="css/styles.css">


<div class='wrapper'>
    <div class='top_bar clearfix'>
        <div class='image clearfix'>
            <a href='index.php'><img src='imgs/mainicon.png' width='113.333px' height='137px'></a>
        </div>
        <div class='header'>
            <br><h1>Global Book Shop</h1>
            <p>Online Book Store </p>
        </div>
    </div>
    
    <div class='top_bar_links'>
        <nav>
            <ul>
                <li><a href='index.php'>Home</a></li>

               

                <li><a href='viewbooks.php'>View Books</a></li>
               
            </ul>
        </nav>
    </div>
</div>
