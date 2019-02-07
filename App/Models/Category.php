<?php

namespace App\Models;

use PDO;

/**
 * Example book model
 *
 * PHP version 7.0
 */
class Category extends \Core\Model
{

    /**
     * Get all the categories as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM categories');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getBooksById($id)
    {
        $db = static::getDB();
        $stmt = $db->query("SELECT * FROM books where category_id =$id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
