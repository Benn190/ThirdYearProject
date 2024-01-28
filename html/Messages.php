<?php
session_start();
    if (!isset($_SESSION["username"])) {
        header('Location: ' . "./login.php");
    }

    require_once "../php/connect_db.php";

    $username = $_SESSION["username"];
    

?>
<!DOCTYPE html>
<html>

<head>
    <title>Messages</title>
    <link rel="stylesheet" href="../css/Messages.css">
    <link rel="stylesheet" href="../css/StyleSheet.css">
    <link rel="stylesheet" href="../css/Home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" 
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<!-- test commit -->

<!-- test commit - branch demo -->

<body>
    <nav>
        <subnav>
            <ul>
                <li>
                    <a>
                        <img src="../images/cat.jpg" class="nav-profile">
                    </a>
                </li>
    
                <li>
                    <div class="dropdown">
                        <button class="dropButton">
                            <img class="noti" src="../images/icons/nav-icons/bell-svgrepo-com.svg" alt="notifications"
                                width="35" />
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                </li>
            </ul>
        </subnav>
    
        <nav>
    
    
            <section>
                <form id="searchForm" action="">
                    <input id="searchInput" type="search" required>
                    <i class="fa fa-search"></i>
                </form>
    
            </section>
    
            <section>
                <ul class="linksBar">
                    <li>
                        <a href="../html/Home.php">
                            <img src="../images/icons/nav-icons/home-svgrepo-com.svg" alt="home" width="35" />
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <img src="../images/icons/nav-icons/magnifer-svgrepo-com.svg">
                        </a>
                    </li>
                    <li>
                        <a>
                            <img src="../images/icons/nav-icons/add-square-svgrepo-com.svg">
                        </a>
                    </li>
                    <li>
                        <a href="../html/Group.php">
                            <img src="../images/icons/nav-icons/users-group-two-rounded-svgrepo-com.svg" alt="groups"
                                width="35" />
                            <span>Groups</span>
                        </a>
                    </li>
                    <li>
                        <a href="../html/Messages.php">
                            <img src="../images/icons/nav-icons/chat-round-line-svgrepo-com.svg" alt="messages"
                                width="35" />
                            <span>Messages</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button class="dropButton">
                                <img src="../images/icons/nav-icons/bell-svgrepo-com.svg" alt="notifications" width="35" />
                            </button>
                            <div class="dropdown-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                            </div>
                        </div>
                        <span>Notifications</span>
                    </li>
    
                    <a href="../html/Profile.php">
                        <img class="nav-profile" src="../images/cat.jpg" />
                    </a>
    
                </ul>
            </section>
        </nav>
  
    <main>

    <body>
        <div>
            <section class="chat-area">
            <header>
            <?php

// Fetch user data
$userDataSTMT = pg_prepare($conn, "user_data", "SELECT * FROM messages WHERE username = $1");
$userDataRESULT = pg_execute($conn, "user_data", array($username));
$userData = pg_fetch_assoc($userDataRESULT);

// Check if user data exists
if ($userData) {
    $username = $userData['username'];
    $recipient = $userData['recipient'];

    // Read messages
    $stmt = pg_prepare($conn, "read_message", "SELECT * FROM messages WHERE username = $1 AND recipient = $2");
    $result = pg_execute($conn, "read_message", array($username, $recipient));

    if (pg_num_rows($result) > 0) {
        while ($row = pg_fetch_assoc($result)) {
            echo "<p>new message!</p><br> 
                 <br> Recipient: {$row['recipient']}<br>
                  Sender: {$row['username']}<br>";
        }
    } else {
        echo "No messages";
    }
} else {
    echo "User not found";
}

// Close the PostgreSQL connection
pg_close($conn);
?>

</div>
<div>
<form action="../php/send_message.php" method="post">
<div class="container-1">
    <h1>Message</h1>
    <hr>
    <label for="recipient"><b>Select Recipient:</b></label>
            <select name="recipient" id="recipient" required>
                <option value="">Choose a recipient</option>
                <option value="friend1">Friend 1</option>
                <option value="friend2">Friend 2</option>
        
            </select>
   
            <label for="username"><b>$<?php echo "$username"; ?></b></label>
    <input type="text" placeholder="Enter Recipient" name="recipient" id="recipient" required>
    </div>
    </header>
            <div class="chat-box">

            </div>
            <form action="#" class="typing-area">
                <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $username; ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
    <button type="submit" class="message">Send</button>
</form>
</div>

                </div>
            
            </section>
        </div>
     </main>



</body>


</html>