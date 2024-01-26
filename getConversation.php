<?php
function getConversation($user_id, $conn){

$sql = "SELECT * FROM conversations
        WHERE user_1=$1 OR user_2=$1
        ORDER BY conversation_id DESC";

$stmt = pg_prepare($conn, "", $sql);
$result = pg_execute($conn, "", array($user_id, $user_id));

if(pg_num_rows($result) > 0){
    $conversations = pg_fetch_all($result);

    $user_data = [];
    
    # looping through the conversations
    foreach($conversations as $conversation){
        # if conversation's user_1 row is equal to user_id
        if ($conversation['user_1'] == $user_id) {
            $sql2  = "SELECT *
                        FROM users WHERE user_id=$1";
            $stmt2 = pg_prepare($conn, "", $sql2);
            $result2 = pg_execute($conn, "", array($conversation['user_2']));
        } else {
            $sql2  = "SELECT *
                        FROM users WHERE user_id=$1";
            $stmt2 = pg_prepare($conn, "", $sql2);
            $result2 = pg_execute($conn, "", array($conversation['user_1']));
        }

        $allConversations = pg_fetch_all($result2);

        # pushing the data into the array
        array_push($user_data, $allConversations[0]);
    }

    return $user_data;

} else {
    $conversations = [];
    return $conversations;
}
}
