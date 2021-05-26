<?php

require_once '../classes/ConnectDb.php';

class CrudData extends ConnectDb
{

public function readData()
    {
        if(isset($_POST['read']))
        {
     
            $sql = "SELECT * FROM products WHERE product_id =" .$_POST['read'];
            $result = $this->connection()->query($sql);
            $numRows = $result->num_rows;

            if($numRows > 0)
            {
            $row = $result->fetch_assoc();
            }
        }
        return $row;
    }

    public function getUpdateData()
    {
        if(isset($_POST['update']))
        {
     
            $sql = "SELECT * FROM products WHERE product_id =" .$_POST['update'];
            $result = $this->connection()->query($sql);
            $numRows = $result->num_rows;

            if($numRows > 0)
            {
            $row = $result->fetch_assoc();
            }
        }
        return $row;
        
    }

    public function updateData()
    {
        if(isset($_POST['u_pname']))
        {
            $u_name =$_POST['u_pname'];
            $u_size =$_POST['u_psize'];
            $u_color =$_POST['u_pcolor'];
            $u_quantity = (int)$_POST['u_pquantity'];
            $u_price = (int)$_POST['u_pprice'];
            $u_sex =$_POST['product_sex'];
            $u_type =$_POST['product_type'];
            $u_enable = (int)$_POST['enable'];

            $sql = "UPDATE products SET product_name = '$u_name',
                                        product_size = '$u_size',
                                        product_color = '$u_color',
                                        product_quantity = '$u_quantity',
                                        product_price = '$u_price',
                                        product_sex = '$u_sex',
                                        product_type = '$u_type',
                                        p_enable = '$u_enable'
                                    WHERE product_id = ".$_POST['update'];

            $result = $this->connection()->query($sql);

            if($result != false){
                print("<div class='alert alert-success' role='alert'>
                Update has been succesfull!
              </div>");
            }else{
                print('<h2>no data sent</h2>');

            }
        }
    }

    public function succesUpdatedData()
    {
        $sql = "SELECT * FROM products WHERE product_id =" .$_POST['update'];
        $result = $this->connection()->query($sql);
            $numRows = $result->num_rows;

            if($numRows == 1)
            {
            $row = $result->fetch_assoc();
            }
        
        return $row;
    }

    public function showDeleteData()
    {
        if(isset($_POST['delete']))
        {
            $sql = "SELECT * FROM products WHERE product_id = ".$_POST['delete'];
            $result = $this->connection()->query($sql);
            $row = $result->fetch_assoc();
        }
        return $row;
    }

    public function deleteData()
    {
        if(isset($_POST['deleteOk']))
        {
          
            $sql = "UPDATE products SET p_enable = 0
                                    WHERE product_id = ".$_POST['deleteOk'];

            $result = $this->connection()->query($sql);

            header('Location: http://localhost/webshop/admin/admin.php');
        }

        
    }
 
}