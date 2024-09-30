<?


class Login
{
  public $email;
  public $password;

  public function auth($email, $password)
  {
    return 'O email é ' . $this->email . ' e  minha é ' . $this->password;
  } // logar
} //Login