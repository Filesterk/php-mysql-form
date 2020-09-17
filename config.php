<?php

class Conf
{
    //public DbConf $db;
    /** @var DbConf  */
    public $db;
    public function __construct(DbConf $dbConf)
    {
        $this->db = $dbConf;
    }
}

class DbConf
{
    public $host;        //public string $host;
    public $dbName;      //public string $dbName;
    public $user;        //public string $user;
    public $password;    //public string $password;
    

    public function __construct(string $host, string $dbName, string $user, string $password)
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->password = $password;
    }
}

/**
 * @return Conf
 */
function get_configs(): Conf
{
    $dbConf = new DbConf('localhost', 'alex_sandbox', 'root', '');
    
    return new Conf($dbConf);
}
