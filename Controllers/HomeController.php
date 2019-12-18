<?php
class HomeController extends Controller{


 function index()
    {
        require(ROOT . 'Models/HomePageModel.php');
        $home = new HomePageModel();
        $d['user'] = $home->showAllUsers();
        //var_dump($d);
        $this->set($d);
        $this->render("index");
    }

    function create_user_page(){

        $this->render("createUser");
    }
    
     function create_login_page(){

        $this->render("loginPage");
    }
    function create()
    {
                if (isset($_POST["userName"]))
        {
            require(ROOT . 'Models/HomePageModel.php');
            $newUser= new HomePageModel();
            $newUser->create($_POST["userName"], $_POST["password"]);
            if ($newUser)
            {
                $home2 = new HomePageModel();
                $d['user'] = $home2->showAllUsers();
                $this->set($d);
                $this->render("index");
            }
        }      
    }

    function doLogin()
    {
        if (isset($_POST["userName"]))
        {
            require(ROOT . 'Models/HomePageModel.php');
            $newUser= new HomePageModel();
             $d['user'] = $newUser->check_user($_POST["userName"], $_POST["password"]);

            if ($d != null)
            {
                //var_dump($d);
                 $this->set($d);
                $this->render("userHome");
            }
            else{

                $d['error']="User Not found";
                  $this->render("userHome");
            }
        }      
    }

}

?>