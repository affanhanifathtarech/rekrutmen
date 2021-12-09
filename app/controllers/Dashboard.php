<?php 
class Dashboard extends Controller{
    public function index()
    {
        if(!isset($_SESSION['nim'])){
            header("location: login");
            exit();
        }
        
        $data['url'] = 'dashboard';
        $data['title'] = 'Dashboard - LDK Karisma';
        $this->viewDashboard('dashboard/index', $data);
    }
}