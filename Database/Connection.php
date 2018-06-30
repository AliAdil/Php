<?php 

class Connection
{

    public static function make ($confiq)
    {
        try
        {
            // return new PDO('mysql:host=127.0.0.1; dbname=alidb','root','');

            return new PDO(
                $confiq['connection'].';dbname='.$confiq['name'],
                $confiq['username'],
                $confiq['password'],
                $confiq['options']
            );
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