<?php
    function insertData($sql, $conn) {
        $stmt= $conn->prepare($sql);
        try {
            $stmt->execute();
            $result = 'true';
            
        } catch (PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
                $result = 'false';
            } else {
                $result = 'false';
            }
        }
        return $result;
    }

    function viewData($sql, $conn)
    {
        $query = $conn->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function viewOneData($sql, $conn)
    {
        $query = $conn->prepare($sql);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
?>