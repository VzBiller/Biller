<?php

class HelloWorldTest extends PHPUnit_Framework_TestCase
{


    public function tearDown()
    {
        echo "My testing is completed.\n";
    }

    public function testHelloWorld()
    {
        $helloWorld = new HelloWorld();

        $this->assertEquals('Hello World', $helloWorld->hello("Lalith"));
    }

    public function testHello()
    {
        $helloWorld = new HelloWorld($this->pdo);

        $this->assertEquals('Hello Bar', $helloWorld->hello('Bar'));
    }

}
