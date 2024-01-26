<?php

session_start();

# Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    if (isset($_POST['id_2'])) {

        # Database connection file
        include '../db.conn.php';

        $id_1 = $_SESSION['user_id'];
        $id_2 = $_POST['id_2'];
        $opend = 0;

        $sql = "SELECT * FROM chats
                WHERE to_id = $1
                AND   from_id = $2
                ORDER BY chat_id ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id_1, $id_2]);

        if ($stmt->rowCount() > 0) {
            $chats = $stmt->fetchAll();

            # Looping through the chats
            foreach ($chats as $chat) {
                if ($chat['opened'] == 0) {

                    $opened = 1;
                    $chat_id = $chat['chat_id'];

                    $sql2 = "UPDATE chats
                            SET opened = $1
                            WHERE chat_id = $2";
                    $stmt2 = $conn->prepare($sql2);
                    $stmt2->execute([$opened, $chat_id]);

                    ?>
                    <p class="ltext border rounded p-2 mb-1">
                        <?= $chat['message'] ?>
                        <small class="d-block">
                            <?= $chat['created_at'] ?>
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
