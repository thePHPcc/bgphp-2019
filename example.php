<?php

use PHPUnit\PharIo\Manifest\BundlesElement;

class Configuration
{
    public function getDSN(): string
    {
        return 'the-dsn';
    }

    // other methods
}

class BetterFactory
{
    private $db;
    private $configuration;

    public function createDB(): DB
    {
        return new DB($this->getConfiguration()->getDSN());
    }

    public function createSomething(string $customerNumber): Something
    {
        return new Something($customerNumber, $this->getDB());
    }

    public function createSomethingElse(string $customerNumber): SomethingElse
    {
        return new SomethingElse(
            $this->createSomething($customerNumber),
            $this->getDB()
        );
    }

    private function getDB(): DB
    {
        if ($this->db === null) {
            $this->db = $this->createDB();
        }

        return $this->db;
    }

    private function getConfiguration(): Configuration
    {
        if ($this->configuration === null) {
            $this->configuration = $this->createConfiguration();
        }

        return $this->configuration;
    }

    private function createConfiguration(): Configuration
    {
        return new Configuration;
    }
}

class Factory
{
    private $map = [
        'something' => Something::class
    ];

    public function create($id)
    {
        /*
        $class = $this->map[$id];
        return new $class;
        */

        $args = func_get_args();

        switch ($id) {
            case 'something':
                return new Something($args[1]);
        }
    }
}

class Something
{
    private $customerNumber;
    private $db;

    public function __construct($customerNumber, DB $db)
    {
        $this->customerNumber = $customerNumber;
        $this->db = $db;
    }

    public function doWork(): void
    {
        var_dump($this->customerNumber);
    }
}

class SomethingElse
{
    /**
     * @var Something
     */
    private $something;
    /**
     * @var DB
     */
    private $db;

    public function __construct(Something $something, DB $db)
    {
        $this->something = $something;
        $this->db = $db;
    }
}

class DB
{
    private $dsn;

    public function __construct(string $dsn)
    {
        $this->dsn = $dsn;
    }

    public function runQuery(): void
    {
        var_dump($this->dsn);
    }
}

// $factory = new Factory;
// $something = $factory->create('something', 42);

$betterFactory = new BetterFactory;
$something = $betterFactory->createSomething(42);


// var_dump($something);

// $something->doWork();
// $something->

$o1 = $betterFactory->createSomethingElse(23);
$o2 = $betterFactory->createSomethingElse(23);
var_dump($o1, $o2);

// var_dump($o1 === $o2);
