<?php
use PHPUnit\Framework\TestCase;
class ChatSystem {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function testSendingMessages($text){

        $result = $this->db->execute($text);
        if (count($result) == 0) {
            return 'Please insert a message';
        }

}
}
