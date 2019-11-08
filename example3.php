<?php

class DB
{
    private $dsn;

    private $isConnected = false;

    public function __construct(string $dsn)
    {
        $this->dsn = $dsn;
    }

    public function query(SQL $sql): void
    {
        if ($this->isConnected === false) {
            $this->connect();
        }

        // $sql->runWith($this->db);
    }

    private function connect()
    {
        /*
        $this->db = new MySQLi(
            $this->dsn
        */
        $this->isConnected = true;
    }
}

interface SQL
{
    public function runWith(DB $db): QueryResult;
}

class DummySQL implements SQL
{
    public function runWith(DB $db): QueryResult
    {
        return new QueryResult;
    }
}

class QueryResult
{
}

$dsn = 'the-dsn';
$db = new DB($dsn);
$db->query(new DummySQL());

class DSN
{
    public function connectTo()
    {
        // connect and return connection
    }
}
