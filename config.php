<?php

class Conf
{
    /** @var DbConf  */
    public $db;

    public function __construct(DbConf $dbConf)
    {
        $this->db = $dbConf;
    }
}

class DbConf
{
    public string $host;
    public string $dbName;
    public string $user;
    public string $password;

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
    $dbConf = new DbConf('mysql', 'alex_sandbox', 'alex', 'alex');
    return new Conf($dbConf);
}
