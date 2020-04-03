<?php

class Database
{
    public function connect()
    {
        $mysqli = mysqli_connect("localhost", "root", "root", "backendWell");
        var_dump($mysqli);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to Mysql" . mysqli_connect_error();
        }

    }

    public function select()
    {

    }

    public function create()
    {

    }

    public function edit()
    {

    }

    public function delete()
    {

    }
}