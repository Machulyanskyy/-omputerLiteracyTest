<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller {
    
    public function action_index()
    {   
        $this->response->body(View::factory('login'));
    }
    public function action_registration()
    {  
        $name_reg = Arr::get($_POST, 'U_NAME_reg', '');
        $email_reg = Arr::get($_POST, 'U_EMAIL_reg', '');
        $password_reg = Arr::get($_POST, 'U_PASS_reg', '');
        $password_confirm = Arr::get($_POST, 'U_PASS_confirm', '');
        if ($password_reg == $password_confirm)
        {
            $email_with_bd = Model::factory('Autorisation')->search_email($email_reg);
            if ($email_with_bd == $email_reg)
            {
                echo 'такой email уже использован!';
                //$this->redirect('Welcome');
            }
            else 
            {
                $password_reg = Auth::instance()->hash_password($password_reg.Cookie::$salt); //хеширование пароля, к которому добавлена соль
                Model::factory('Autorisation')->create_user($name_reg, $email_reg, $password_reg);
                echo 'вы успешно зарегестрированны!';
                //$this->redirect('Welcome');
            }
        }
        else
        {
            echo 'пароли не совпадают';
            //$this->redirect('Welcome');
        }
    }
    public function action_login()
    {
            $email_login = Arr::get($_POST, 'U_EMAIL', ''); //email вводимы при входе
            $password_login = Arr::get($_POST, 'U_PASS', ''); // пароль вводимы при входе
            $password_login = Auth::instance()->hash_password($password_login.Cookie::$salt); //хеширование пароля
            $user_role = Model::factory('Autorisation')->search_role($email_login,$password_login); //роль пользователя, который делает вход
            Session::instance()->set('u_role', $user_role[0]['U_ROLE']);
            Session::instance()->set('u_id', $user_role[0]['U_ID']);
            if ($user_role != NULL)
            {
                switch ($user_role[0]['U_ROLE']) {
                    case 0:
                        echo 'Вы вошли как пользователь!';
                        $this->redirect('dashboard');  
                        break;
                    case 1:
                        echo 'Вы вошли как модератор!';
                        break;
                    case 3:
                        echo 'Вы вошли как администратор!';
                        break;
                    default:
                        break;
                }
            }
            else 
            {
                echo 'Не верный емеил или пароль!';
                $this->redirect('Welcome');
            }
    }
}
