<?php
namespace Core;

class Authenticator{
    public function attempt($email, $password){
        $user = App::resolve(Database::class)->query('SELECT * FROM users WHERE email = :email',[
            'email'=>$email
        ])->find();

        if($user){
            if(password_verify($password,$user['password'])){
                $this->login([
                    'email'=>$email
                ]);

                header('location: /');
                exit();
            }
        }

        return view('session/create.view.php',[
            'errors'=>[
                    'email'=>' No matching account found for that email and password.'
            ]
        ]);
    }

    public function login($user){
        $_SESSION['user'] = [
            'email' => $user['email']
        ];
        session_regenerate_id(true);
    }

    public function logout(){
        //delete the session
        $_SESSION = [];
        session_destroy();
        //delete the cookie
        $params = session_get_cookie_params();
        setcookie('PHPSESSID','',time()-3600, $params['domain'], $params['secure'], $params['httponly']);
    }
}

