<?php
require_once 'pdo.php';

class Contact {
    public static function save($data) {
        $sql = "INSERT INTO lienhe (email, name, phone, message) VALUES (?, ?, ?, ?)";
        pdo_execute($sql, $data['email'], $data['name'], $data['phone'], $data['message']);
    }

    public static function getAll() {
        $sql = "SELECT * FROM lienhe";
        return pdo_query($sql);
    }
}
?>
