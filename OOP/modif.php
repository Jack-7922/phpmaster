<?php
class ParentClass {
    public      $public     =    1;
    protected   $protected  =    2;
    private     $private    =    3;

    function    getProtected() {
        return  $this->protected;
    }
    function    getPrivate() {
        return  $this->private;
    }
}

$parent = new   ParentClass();
echo $parent->  public;
//echo $parent->protected; // нельзя
//echo $parent->private;  //нельзя

//echo $parent->getProtected;
//echo $parent->getPrivate;
