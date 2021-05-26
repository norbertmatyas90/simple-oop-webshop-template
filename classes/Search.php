<?php

require_once './ConnectDb.php';


class Search extends ConnectDb
{
    private $search;

    public function __construct()
    {
        $this->search = $_GET['search'];
    }

    public function searchField()
    {
        if(isset($this->search) && strlen($this->search) >= 3)
        { 
        
            $sql = "SELECT * from products 
                    WHERE product_name LIKE '%$this->search%'
                     OR product_size LIKE '%$this->search%'
                     OR product_color LIKE '%$this->search%'
                     OR product_price LIKE '%$this->search%'
                     OR product_sex LIKE '%$this->search%' ";

            $result = $this->connection()->query($sql);
            $numRows = $result->num_rows;

            if($numRows > 0){
                while($row =  $result->fetch_assoc())
                {
                    $searchArray[] = $row;
                }
            }

        return $searchArray;

        }else{
               print('<h2>Too few arguments to search. The minimum character is three!</h2>');
            }
    }

}