<?php namespace Classes;

class FirstTestClass
{
    protected $protected_attr = "5";

    public function getAttribute() {
        return $this->protected_attr;
    }
}
