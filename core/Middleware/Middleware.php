<?php
namespace Core\Middleware;
class Middleware{
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class
    ];

    public static function resolve($key){

        if(!$key){
            return;
        }

        $middleware = static::MAP[$key] ?? false;
        //something here like if-else witha a return statment connected to the class

        if(!$middleware){
            throw new \Exception("No matching middleware found for key {$key}");
        }
        //if no corresponding route found in routes.php, throw an error

        (new $middleware)->handle();
        //calls to the specified handle method of the received class
    }
}