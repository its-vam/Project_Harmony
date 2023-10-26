<?php
	 session_start();

     // Check if the user is already logged in, if yes then redirect him to welcome page
     if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
       header("location: login.php");
       exit;
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Synced Audio and Video Playback</title>
    <style>

        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            overflow: hidden;
        }
        
    
        .content {
            text-align: center;
            margin-bottom: 20px;
        }

        .content a {
            font-size: 160px;
            -webkit-text-stroke: 2px #fff;
            color: transparent;
            font-weight: 600;
            text-decoration: none;
            align-items: center;
        }

        .content a:hover {
            font-size: 160px;
            color: #fff;
        }

       .logo{
        margin-top: 10px;
       }
    



 
        .page-links {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-top: 20px;
        }

        .page-links a {
            text-decoration: none;
            color: #fff;
            font-size: 15px;
            margin: 0 15px;
        }

    #audioButton {
            position:fixed;
            bottom: 20px;
            right: 2px;
            width: 400px;
            height: 700px;
            background:transparent;
            border-radius: 50%;
            display: flex;
            object-fit: cover;
            justify-content: center;
            align-items:self-start;
            cursor: pointer;
            z-index: 999;
        }

        #audioButton i {
            color: white;
            font-size: 24px;
        }

        audio {
            display: none;
        }

        #videoBackground {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        footer {
      text-align: center;
      padding: 1rem;
      background-color: #33333300;
      color: white;
      
    }
    </style>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
     
    </head>
<body>

    <img src="POSTERS\Logo1.png" alt="Logo" class="logo" width="200" height="40">
   <div> &nbsp;
    &nbsp;
    &nbsp;
    </div>
    <div class="content">
        <a href="3D.html"> <br>HOP-IN!</a>

    </div>

  
      
    <div class="page-links">
        <a href="3D.html">EVENTS</a>
        <a href="#">ABOUT US</a>
        <a style="color: #80ffd4;" href="Login.php">IMMERSE-IN</a>
    </div>

    <div id="audioButton">
        <i class="fas fa-play"></i>
    </div>

    <audio id="audioPlayer" loop>
        <source src="D:\NOTES\BG.mp3" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    <video id="videoBackground" autoplay loop muted preload="metadata">
        <source src="D:\NOTES\video.mp4" preload="auto" type="video/mp4">
    </video>

    
    <script>
        const audioButton = document.getElementById("audioButton");
        const audioPlayer = document.getElementById("audioPlayer");
        const videoBackground = document.getElementById("videoBackground");

        audioButton.addEventListener("click", () => {
            audioPlayer.play();
            videoBackground.play();
            audioButton.style.display = "none";
        });
    </script>

<footer>
    <br>
    <br>
    <br>
    <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 11px;"> <br> <br> <br> <br> <br> <br> <br> <br> <br>  &copy; 2023 David Guetta & HARMONY Co. &nbsp All rights reserved.</p>
  </footer>
</body>
</html>
