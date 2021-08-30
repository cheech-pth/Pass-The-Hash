<?php
namespace PassTheHash;

// Connects and inserts mock data into the database for debugging purposes.
class TableSeed
{
    private $pdo;
    public function __construct($pdo) {
       $this->pdo = $pdo;
    }

    // TODO: This function after I create some base Insert functions for non debug use.
    public function SeedTables() {
        $queryList = [
            'INSERT'
        ];

    }
}
?>