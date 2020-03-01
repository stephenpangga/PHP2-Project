<?php

class QueryBuilder 
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }

    public function selectAll($table)
    {
        //need to make recieve params

        $statement = $this->pdo->prepare("select*from {$table}");

        $statement->execute();

        $users = $statement->fetchAll(PDO::FETCH_CLASS);

        return $users;
    }

    public function query($query)
    {
        //need to make recieve params
        $statement = $this->pdo->prepare($query);

        $statement->execute();

        return $statement;
    }
    //this will be used for update and insert data and returns error if sql/params gives error
    public function insert($sql, $param)
    {
        try
        {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($param);

            return $statement;
        }
        catch(Exception $e)
        {
            die("Something is wrong with the query please check your sql statment");
        }    
    }
    /*
    public function insert($table, $parameters)
    {
        //insert into %s (%s) (name, email, password)values (:name, :email, :password)
        
        //to see the content of the arrays
        //die(var_dump(array_keys($parameters)));

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,

            implode(', ', array_keys($parameters)),
            
            //to make key seperated.
            //add a colon then seperate the keys
           ':' . implode(', :', array_keys($parameters))
        );

        //die(var_dump($sql));

        //$statement->execute();

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
    
        } 
        catch(Exception $e)
        {
            die("Something is wrong with the query please check your sql statment");
        }
    }
    */
}