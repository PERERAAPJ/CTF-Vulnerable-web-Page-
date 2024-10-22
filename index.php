<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulnarable page</title>
    <style>
        #popupMessage {
            display: none;
            background-color: lightgreen;
            border: 2px solid green;
            padding: 10px;
            margin-top: 20px;
        }
        .heder{
            text-align : center;
        }
        .hed{
            text-align:center;
        }
        .he{
             text-align:center;
        }
        .bg {
    background-color: white; 
    }
    .le{
         background-color: red;
    }
    .back{
         background-color: yellow;
    }
    .my{
        text-align:left;
    }
    

    .animation-container {
    position: relative; /* Set the position to relative for the container */
    width: 200%; /* Full width */
    height: 300px; /* Set a height for the animation area */
}

.bounce {
    position: absolute; /* Position the image absolutely */
    animation: moveRight 5s linear infinite; /* Apply the animation */
}

@keyframes moveRight {
    0% {
        left: -100px; /* Start off-screen to the left */
    }
    100% {
        left: 100%; /* Move to off-screen to the right */
    }
}
    </style>
</head>
<body>
<div class="bg">
<h3 class="my"><u>My Account</u></h3>
    <h1 class="heder"><u>World Best Cyber Security Company.[PVT]/[LMT]]</u></h1>
    <h3><b>One of the best cybersecurity companies in the world isAnuk Perera. Known for its innovative solutions in network security, cloud security, and endpoint protection, Anuk Perera provides advanced threat detection and prevention technologies. Their Next-Generation Firewalls (NGFWs) and security platform are widely trusted by enterprises globally. With a focus on artificial intelligence, automation, and integration, the company helps businesses stay ahead of evolving cyber threats.  Their expertise in ransomware defense, zero-day vulnerabilities, and tailored solutions for various industries solidifies their standing as a leader in cybersecurity.</b></h3>
    </div>
    </div>
    <div class="bounce">
   <img src="hacker.jpg" alt="hacker" width="300" height="200">
   </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




    <div class="le">
    <h1 class="hed">If you Can hack this! Please do It.</h1></div>
    <div class="bg">
    <h2><u>Purpose of this Company?</u></h2>
    <h3><b>The purpose of cybersecurity is to protect systems, networks, and data from cyberattacks, unauthorized access, and damage. It ensures the confidentiality, integrity, and availability of information by safeguarding sensitive data, preventing data breaches, and defending against malware, phishing, and other threats. Cybersecurity is crucial for maintaining trust, protecting privacy, and securing digital infrastructure in personal, business, and governmental contexts.</h3>
    <form method="POST" action="">
        <label for="comment"><b>Comment Type heare:</b></label>
        <input type="text" id="comment" name="comment" required>
        <button type="submit">HITME</button>
    </form>
    </div>
    <div class="back">
    <h1 class="he">If You Are a Hacker! Join With Us  to Improve Your Knowladge.<h1>
    </div>
    <div id="commentsSection">
    <hr>
        <h2>Comments:</h2>
        <ul>
            <?php
                
                $comments = [];

                
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $comment = $_POST['comment'];


                    $comments[] = $comment;

                    
                    foreach ($comments as $comm) {
                        echo "<li>" . $comm . "</li>";
                    }

                    
                    if (strpos($comment, '<script>') !== false) {
                        echo "<div id='popupMessage'>";
                        echo "<p>Congratulations! You found the XSS vulnerability!</p>";
                        echo "<p>Flag: FLAG{XSS_SLIIT}</p>";
                        echo "</div>";
                    }
                }
            ?>
        </ul>
    </div>

    <script>
  
        var popupMessage = document.getElementById('popupMessage');
        if (popupMessage) {
            popupMessage.style.display = 'block';
        }
    </script>
</body>
</html>
