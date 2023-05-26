<?php
    class Student{
        private $db;
        function __construct($DB_con)
        {
            $this->db = $DB_con;
        }

        public function getAllStudent()
        {
            try
            {
                $rows = array();
                $stmt = $this->db->prepare('SELECT * FROM tbl_stuinfo');
                $stmt->execute();
                while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $rows[] = $row;
                }
                echo json_encode($rows);
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        }
    }
?>