<?php
class Dashboards extends Controller {

    public function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false) {
            Session::destroy();
            header('Location: ../login');
            exit();
        }
    }

    public function logout(){
        Session::destroy();
        header('Location: ../login');
        exit();
    }

    public function index() {
        $this->view->render('dashboard/index');
    }

}
?>
