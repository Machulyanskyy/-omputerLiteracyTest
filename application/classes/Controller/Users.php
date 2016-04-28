<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller {
    
    public function action_index()
    {   
        Session::instance()->destroy();
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
                $message = 'Такий email вже використано!';
                $this->action_redirect($message);
            }
            else 
            {
                $password_reg = Auth::instance()->hash_password($password_reg.Cookie::$salt); //хеширование пароля, к которому добавлена соль
                Model::factory('Autorisation')->create_user($name_reg, $email_reg, $password_reg);
                $message = 'Ви успішно зареєстровані!';
                $this->redirect('Questions');
            }
        }
        else
        {
            $message = 'Паролі не співпадають!';
            $this->action_redirect($message);
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
                        echo 'Ви увійшли як користувач!';
                        $this->redirect('Questions');  
                        break;
                    case 1:
                        echo 'Ви увійшли як модератор!';
                        $this->redirect('dashboard');
                        break;
                    case 2:
                        echo 'Ви увійшли як адміністратор!';
                        $this->redirect('dashboard');
                        break;
                    default:
                        break;
                }
            }
            else 
            {
                $message = 'Не вірний email або пароль !';
                $this->action_redirect($message);
            }
    }
    
    public function action_redirect($message)
    {
        Session::instance()->destroy();
        $data['error'] = $message;
        $this->response->body(View::factory('redirect', $data));
    }
}
