<?php

namespace Core;

class Container{

    protected $bindings = [];

    //bind object to the cintainer
    public function bind($key, $resolver){
        $this->bindings[$key] = $resolver;
    }

    //take objects out of the container
    public function resolver($key){
        //check corresponding function to the key is exist or not
        if(!array_key_exists($key, $this->bindings)){
            throw new \Exception("No matching bing found for {$key}");
        }
        $resolver = $this->bindings[$key];
        return call_user_func($resolver);
    }
}