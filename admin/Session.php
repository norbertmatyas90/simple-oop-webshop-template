<?php

 if(session_status() === PHP_SESSION_NONE)
 {
     session_start();
 }

require_once '../classes/ConnectDb.php';

class Session extends ConnectDb
{

    public static function start()
    {
        if(session_status() === PHP_SESSION_NONE)
        {
            session_start();
        }
    }

    public function loginCheck()
    {
        if(isset($_POST['email']))
        {
            $email = $_POST['email'];
            $psw = $_POST['password'];

            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $sql = "SELECT user_id, user_name, user_email FROM users WHERE user_email = '$email' AND user_password = '$psw' ";
                $result = $this->connection()->query($sql);
                $numRows = $result->num_rows;

                if($numRows === 1)
                {
                    $row = $result->fetch_assoc();
                    $_SESSION['user'] = $row;

                    header('Location: http://localhost/webshop/admin/admin.php');
                }else{
                    print('<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Invalid Email / Password!</strong> Check your Email adress / Password and try it again!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                }
                
            }else{
                print('<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Invalid Email / Password format!</strong> Check your Email adress / Password and try it again!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            }
        }
    }

    public function logOut()
    {
        session_destroy();
        header('Location: http://localhost/webshop/admin/login.php');
        exit();
    }


}