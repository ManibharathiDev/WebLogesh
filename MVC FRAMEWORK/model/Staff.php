<?php
    class Staff
    {
        private $db;
        function __construct($DB_CON)
        {
            $this->db = $DB_CON;
        }

        public function getAllStaffs()
        {
            try{
                    $rows = array();
                    $stmt = $this->db->prepare("SELECT * FROM tbl_staff");
                    $stmt->execute();
                    while($result = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        $rows[] = $result;
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