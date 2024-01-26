<?php

session_start();

# Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    if (isset($_POST['id_2'])) {

        # Database connection file
        include '../db.conn.php';

        $id_1 = $_SESSION['user_id'];
        $id_2 = $_POST['id_2'];
        $opened = 0;

        $sql = "SELECT * FROM chats
                WHERE to_id = $1
                AND   from_id = $2
                ORDER BY chat_id ASC";
        $stmt = pg_prepare($conn, "", $sql);
        $result = pg_execute($conn, "", array($id_1, $id_2));

        if (pg_num_rows($result) > 0) {
            $chats = pg_fetch_all($result);

            # Looping through the chats
            foreach ($chats as $chat) {
                if ($chat['opened'] == 0) {

                    $opened = 1;
                    $chat_id = $chat['chat_id'];

                    $sql2 = "UPDATE chats
                            SET opened = $1
                            WHERE chat_id = $2";
                    $stmt2 = pg_prepare($conn, "", $sql2);
                    $result2 = pg_execute($conn, "", array($opened, $chat_id));

                    ?>
                    <p class="ltext border rounded p-2 mb-1">
                        <?= htmlspecialchars($chat['message']) ?>
                        <small class="d-block">
                            <?= htmlspecialchars($chat['created_at']) ?>
                        </small>
                    </p>
                    <?php
                }
            }
        }
    }
} else {
    header("Location: ../../index.php");
    exit;
}
?>
