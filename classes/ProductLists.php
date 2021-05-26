<?php

class ProductLists extends ConnectDb {

    public function getMenFashion()
    {
        $sql = "SELECT * FROM products WHERE product_sex = 'Men' AND product_type = 'Dress' AND p_enable = 1";
        $result = $this->connection()->query($sql);
        $numRows = $result->num_rows;

        if($numRows > 0)
        {
            while($row =$result->fetch_assoc())
            {
                $menDatas[] = $row;
            }

            
        }
        return $menDatas;
    }

    public function getWomenFashion()
    {
        $sql = "SELECT * FROM products WHERE product_sex = 'Women' AND product_type = 'Dress' AND p_enable = 1";
        $result = $this->connection()->query($sql);
        $numRows = $result->num_rows;

        if($numRows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $womenData[] = $row;
            }

        return $womenData;
        }
    }

    public function getAccessaryFashion()
    {
        $sql = "SELECT * FROM products WHERE product_type = 'Accessary' AND p_enable = 1";
        $result = $this->connection()->query($sql);
        $numRows = $result->num_rows;

        if($numRows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $accesData[] = $row;
            }
        
        return $accesData;
        }
    }
}