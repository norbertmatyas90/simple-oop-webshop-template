<?php

require_once '../classes/ConnectDb.php';

class UseDataAdmin extends ConnectDb
{
    private $dataLimit = 10;

    private function numbOfPage()
    {
        $sql = "SELECT * FROM products";
        $result = $this->connection()->query($sql);
        $numRows = $result->num_rows;

        return $numRows;
    }

    private function currentPage()
    {
        return isset($_GET['page']) ? (int)$_GET['page'] : 1;
    }

    public function getAdminData()
    {
        $start = 0;

        if($this->currentPage() > 1)
        {
            $start = ($this->currentPage() * $this->dataLimit) - $this->dataLimit;
        }

        $sql = "SELECT * FROM products LIMIT $start , $this->dataLimit";
        $result = $this->connection()->query($sql);
        $numRows = $result->num_rows;

        if($numRows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $dataArray[] = $row;
            }
        }

        return $dataArray;
    }

    public function getPaginationNumb()
    {
        return ceil($this->numbOfPage() / $this->dataLimit);
    }

    public function searc()
    {
        if(isset($_GET['admin_search']))
        {
            $search = $_GET['admin_search'];

            $sql = "SELECT * FROM products WHERE product_name LIKE '%$search%'
                                            OR product_name LIKE '%$search%' 
                                            OR product_size LIKE '%$search%'
                                            OR product_color LIKE '%$search%'
                                            OR product_quantity LIKE '%$search%'
                                            OR product_price LIKE '%$search%'
                                            OR product_sex LIKE '%$search%'
                                            OR product_type LIKE '%$search%' 
                                            "; 
                                           

            $result = $this->connection()->query($sql);
            $numRows = $result->num_rows;

            if($numRows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    $dataArray[] = $row;
                }
            }

            return $dataArray;
        }else{
        
        }
    }

    
}
