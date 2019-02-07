<?php

namespace App\Models;

use PDO;

/**
 * Example book model
 *
 * PHP version 7.0
 */
class Book extends \Core\Model
{

    /**
     * Get all the books as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM books');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
