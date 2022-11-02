<!-- Connect to database here -->
<?php
    function connect($query) {
        try {
            $host = "mysql:host=localhost;dbname=newfeed;charset=utf8";
            $dbname = "root";
            $password = "";
            $connection = new PDO($host, $dbname, $password);
            $stmt = $connection -> prepare($query);
            $stmt -> execute();
            return $stmt;
        } catch (PDOException $err) {
            echo "Lỗi kết nối :" . $err;
        }
    }   

    function getAll($query) {
        $array = connect($query) -> fetchAll();
        return $array;
    }

    function getOne($query) {
        $array = connect($query) -> fetch();
        return $array;
    }
?>