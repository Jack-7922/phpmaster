<?php
abstract class Db {
    abstract function connect();
    abstract function close();
    //...
}

class A extends Db {
    function connect() {}
    function close() {}
}