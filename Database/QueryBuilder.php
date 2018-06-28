<?php 

class QueryBuilder
{
    // it requre pdo file 
    protected $pdo;

    public function __construct( $pdo)
    {
        $this->pdo = $pdo;
    }

    // public function selectAll ($table, $intoClass)
    public function selectAll ($table)
    {
        $statement= $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        // return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
            return $statement->fetchAll(PDO::FETCH_CLASS);
    }



}