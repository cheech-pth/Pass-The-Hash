<?php 

namespace PassTheHash;
## Seeds the database with tables and the database schema; 
class CreateTable {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function createTable() {
        $sqlList = [
            'CREATE TABLE IF NOT EXISTS user (
                user_id INTEGER PRIMARY KEY AUTOINCREMENT,
                title INTEGER NOT NULL,
                username VARCHAR(50) NOT NULL,
                email VARCHAR(256) NOT NULL,
                about VARCHAR(500),
                pass_salt VARCHAR NOT NULL,
                pass_hash VARCHAR NOT NULL,
                created DATETIME NOT NULL,
                total_posts INTEGER,
                FOREIGN KEY (title) REFERENCES title_lookup(id)
                );',

            // Lookup table for user titles e.g. Admin, User, Moderator etc
            'CREATE TABLE IF NOT EXISTS title_lookup (
                id INTEGER PRIMARY KEY,
                title VARCHAR(50) NOT NULL
            );',

            // Stores historical data of users
            'CREATE TABLE IF NOT EXISTS user_detail (
                user_id INTEGER,
                last_login DATETIME,              
                login_ip INET,
                location VARCHAR
                );',

            'CREATE TABLE IF NOT EXISTS blog (
                blog_id INTEGER PRIMARY KEY AUTOINCREMENT,
                author INTEGER NOT NULL,
                title VARCHAR(256) NOT NULL,
                intro TEXT NOT NULL, 
                body TEXT NOT NULL,
                summary TEXT NOT NULL,
                FOREIGN KEY (author) REFERENCES user(user_id)
        );'];

        #loops through sqlList
        foreach ($sqlList as $sql) {
            $this->pdo->exec($sql);
        }
        return $this;
    }

    // returns all tables within the database, debugging only
    public function getTables() {
        $tables = $this->pdo->query(
            "SELECT table_name FROM information_schema.tables
             WHERE table_schema= 'public' 
             AND table_type='BASE TABLE' 
             ORDER BY table_name");
        $tableList = [];
        while ($row = $tables->fetch(\PDO::FETCH_ASSOC)) {
            $tableList[] = $row['table_name'];
        }
    }
}