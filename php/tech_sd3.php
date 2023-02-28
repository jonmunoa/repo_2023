<?php

class Client {
    private $service;

    public function __construct() { }
    public function doSomething() {
        $this->service->doTask();
    }
}

class Service {
    public function doTask() {
        echo 'Performed by Service';
    }
}