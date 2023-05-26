<?php
    class Student
    {
        private $db;
        function __construct($DB_CON)
        {
            $this->db = $DB_CON;
        }

        public function getAllData()
        {
           
            try{
                    $row = array();
                    $stmt = $this->db->prepare("SELECT * FROM tbl_stuinfo");
                    $stmt->execute();
                    while($rows = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        $row[] = $rows;
                    }
                    
                    echo json_encode($row);
                    
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        }
    }
?>