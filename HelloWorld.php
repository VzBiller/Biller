<?php

class HelloWorld
{
	
    public function __construct()
    {
        echo "This is just constructor<br />";
    }

    public function hello($name = "User")
    {
        echo "Hello $name, You are welcomed<br />";
        
    }

}
