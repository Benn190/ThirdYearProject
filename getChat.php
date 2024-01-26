<?php

function getChats($id_1, $id_2, $conn){

    $sql = "SELECT * FROM chats
            WHERE (from_id = $1 AND to_id = $2)
            OR    (to_id = $1 AND from_id = $2)
            ORDER BY chat_id ASC";
    
    $stmt = pg_prepare($conn, "", $sql);
    $result = pg_execute($conn, "", array($id_1, $id_2, $id_1, $id_2));

    if (pg_num_rows($result) > 0) {
        $chats = pg_fetch_all($result);
        return $chats;
    } else {
        $chats = [];
        return $chats;
    }

}
