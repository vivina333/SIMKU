<?php 
   class benchmark extends CI_Controller {
  	 
      public function index() {
	
         //mmengenable profiler 
         $this->output->enable_profiler(TRUE); 
         
         /*meload view "phpview" untuk melihat tampilan view sekaligus
         menampilkan profiler dari view ini*/
         $this->load->view('phpview'); 
      } 
  
      public function disable() {
	
         //mendisable profiler 
         $this->output->enable_profiler(FALSE); 
         
         /*jika profiler di disable maka hanya akan muncul tampilan 
         view htmlnya saja tanpa profiler*/
         $this->load->view('phpview'); 
      }
		
   } 
?>  