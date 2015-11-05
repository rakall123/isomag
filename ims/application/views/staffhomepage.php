
<!DOCTYPE>
<html>
    
    <body>
   <?php $this->load->view('includes/staff_navbar1'); ?>

    
   
         <?php
        
        $location = $this->Staff_model->get_User_location($this->session->userdata('username'));
        if($location === 'UK')
        {
        
         $this->load->view('viewworkorderuk'); 
        }
        else 
        {
            $this->load->view('viewworkorder'); 
        }
    ?>
    
             
            
 
<?php $this->load->view('includes/footer'); ?>
</body>
</html>