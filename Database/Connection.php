<?php 

class Connection
{

    public static function make ()
    {
        try
        {
            return new PDO('mysql:host=127.0.0.1; dbname=alidb','root','');
        }
    
        catch(PDOException $e)
        {  // $e is a object is a instance of PDOException class
            die($e -> getMessage());
        }
    }
}



// $connection = new Connection();
// $connection-> make();

// Connection::make();
// $pdo = connection::make();