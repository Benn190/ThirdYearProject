<?php
$user=$_SESSION["username"];
$notificationQuery = pg_prepare($conn, "list", "SELECT * FROM notifications WHERE username = $1 ORDER BY notificationID DESC limit 3");
$notificationResult = pg_execute($conn, "list", array($user));
$NumbRows = pg_num_rows($notificationResult);

$notifications = array(); // Array to hold all notifications

if ($NumbRows > 0) {
    while ($row = pg_fetch_assoc($notificationResult)) {
        $notification = $row['notifmessage'];
        $time = $row['timestamp'];
        $killtime = $row['killtime'];
        if (strtotime($killtime) >= strtotime(date("Y-m-d"))){
            $notifications[] = array('notification' => $notification, 'time' => $time);
        }
    }
}

$followeeNot = pg_prepare($conn, "notification_list", "SELECT DISTINCT notifications.* FROM notifications 
JOIN follows 
ON notifications.username = follows.followee WHERE follows.username = $1 ORDER BY notifications.notificationID DESC Limit 3");

$followeeRes = pg_execute($conn, "notification_list", array($username));

$NumbRows2 = pg_num_rows($followeeRes);

if ($NumbRows2 > 0) {
    while ($row = pg_fetch_assoc($followeeRes)) {
        $notification = $row['notifmessage'];
        $user = $row['username'];
        $time = $row['timestamp'];
        $killtime = $row['killtime'];
        if($username != $user && strtotime($killtime) >= strtotime(date("Y-m-d"))){
            $notifications[] = array('notification' => ": $notification", 'time' => $time);
        }
    }
}

// Sort notifications by time
usort($notifications, function($a, $b) {
    return strtotime($b['time']) - strtotime($a['time']);
});

if (count($notifications) > 0) {
    $counter = 0;
    foreach ($notifications as $notification) {
        $counter++;
        echo "<list> <p>{$notification['notification']}</p><br></list>";
    }
} else {
    echo "<div> <h1>No notifications yet...</h1></div>";
}
?>
