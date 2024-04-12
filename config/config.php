<?php 
    class database
    {
        protected function DBconnnect()
        {
            $this->hostname = 'localhost'; 
            $this->username = 'ijltemas_ojs342';
            $this->password = '3@pSra38.9';
            $this->database = 'ijltemas_ojs342';
            $conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);
            return $conn;
        }
    }



    class queries extends database
    {
        public function fetchData($table)
        {
            $fetchQuery = "SELECT * FROM `$table`";
            $result = $this->DBconnnect()->query($fetchQuery);
            return $result;
        }
    }
    
?>