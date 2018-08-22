<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html >
          <?php
            $this->load->view('templates/header-script');
          ?>
  <body>
      <div id="app">
                    <?php
                    
                    $this->load->view('templates/header-leftmenu');
                    $this->load->view('templates/header-menu');
                    $this->load->view($page);                               
                    $this->load->view('templates/footer');                    
                    $this->load->view('templates/footer-script');
                  ?>
      </div>
  </body>
  

</html>