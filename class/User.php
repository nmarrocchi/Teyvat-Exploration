<?php

    class User
    {

        private $_username;
        private $_password;
        private $_logged; // - variable si user connecté

        private $_bdd;


        public function __construct($bdd,$logged)
        {
            $this->_bdd = $bdd;
            $this->_logged = $logged;
        }


        public function GetLogged()
        {
            return $this->_logged;
        }


        public function GetUsername()
        {
            echo $this->_username;
        }



        // - Fonctions GetLoginForm & Login

        // - Login Form
        public function GetLoginForm()
        {
            echo ('
            
                <form method="POST" action="">

                    <div class="Form_content">

                        <span>Username :
                            <input type="text" id="l_username" required/>
                        </span>

                        <span>Password :
                            <input type="password" id="l_password" required />
                        </span>

                        <input type="submit" id="l_submit" name="l_submit" value="Login" />

                    </div>

                </form>
            ');
        }

        public function Login()
        {
            header("location: index.php");
        }

        


        // - Fonctions GetRegisterForm & Register

        // - Register Form
        public function GetRegisterForm()
        {
            echo ('
                <form method="POST" action="register_f.php">

                    <div class="Form_content">

                        <span>Username :
                            <input type="text" id="r_username" required/>
                        </span>
                    
                        <span>Password :
                            <input type="password" id="r_password" required />
                        </span>

                        <input type="submit" id="r_submit" name="r_submit" value="Register" />
                
                    </div>

                </form>
            ');
        }



    }

?>

