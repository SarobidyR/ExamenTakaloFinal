<!-- 
// class Page extends CI_Controller{
//   function __construct(){
//     parent::__construct();
//     if($this->session->userdata('logged_in') !== TRUE){
//       redirect('login');
//     }
//   }
 
//   function index(){
//     //Allowing access to admin only
//       if($this->session->userdata('profil')==='1'){
//           $this->load->view('dashboard_view');
//       }else{
//           echo "Access Denied";
//       }
 
//   }
 
//   function staff(){
//     //Allowing akses to user only
//     if($this->session->userdata('profil')==='0'){
//       $this->load->view('dashboard_view');
//     }else{
//         echo "Access Denied";
//     }
//   }
//   function author(){
//     //Allowing akses to author only
//     if($this->session->userdata('profil')==='3'){
//       $this->load->view('dashboard_view');
//     }else{
//         echo "Access Denied";
//     }
//   }
 