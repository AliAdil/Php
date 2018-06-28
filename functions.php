<?php 


function connectToDb()
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

function fetchAllTasks($pdo)
    {

    // prepered statements
    
    $statement= $pdo->prepare ('select * from todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);


    //fetcha all fetch all the results PDO::FETCH_Obj
    // return $tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');
    
    //var_dump($tasks[0]->description);
    //dd($tasks[0]->foobar());

    
    
    }

function dd ($data)
{
     echo '<pre>';
     var_dump ($data);
     echo '</pre>';
 }

 function ageRest($age)
 {
     if($age < 21){
         echo 'Tata Bye Bye You are to young to join this CLUB';
     }
     else
     echo 'TADA come on Come in WELLCOME!!';
 }