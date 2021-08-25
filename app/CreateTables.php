<?php 

namespace PassTheHash;

class CreateTable {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    # List of sql statements TODO: Loop if extras are added, build function anyway?
    public function createTable() {
        $sqlList = ['CREATE TABLE IF NOT EXISTS blogs (
            id INTEGER PRIMARY KEY,
            author VARCHAR(100) NOT NULL, # TODO: will be foreign key for users eventually
            title VARCHAR(500) NOT NULL,
            body TEXT NOT NULL
        );'];

        #loops through sqlList
        foreach ($sqlList as $sql) {
            $this->pdo->exec($sql);
        }
        return $this;
    }

    public function getTables() {
     //TODO: this function   
    }
}