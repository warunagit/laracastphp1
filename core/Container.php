<?php

namespace Core;

class Container{

    protected $bindings = [];

    //bind object to the container
    public function bind($key, $resolver){
        $this->bindings[$key] = $resolver;
    }

    //take objects out of the container
    public function resolver($key){
        //check corresponding function to the key is exist or not
        if(!array_key_exists($key, $this->bindings)){
            throw new \Exception("No matching being found for {$key}");
        }
        $resolver = $this->bindings[$key];
        return call_user_func($resolver);
    }
}