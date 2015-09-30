<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ADD / UPDATE / DELETE</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/cm_style2.css"); ?>"  />
    </head>
    <body>
          
      
          <div class='maindiv'>
          <div class='form_div'>
            <?php echo validation_errors(); ?>
            <?php  
              echo form_open('welcome/save',array('name'=>'myform'));
            ?>
            <!--    <form method='post' action='submit'>-->
                  <div class='title'>
          <h2>Data Insertion</h2>
                </div>
                <label>FirstName</label><br>
                <input type='text' name='firstname' class='input'><br>
                <label>LastName</label><br>
                <input type='text' name='lastname' class='input'><br>
                <label>Contact</label><br>
                <input type='text' name='contact' class='input'><br>
                <label>Email</label><br>
                <input type='input' name='email' class='input'><br>
                <input type='submit'value='Insert' name='submit' class='submit' >

            <!--</form>-->
            <?php 
              echo form_close(); 
            ?> 
            </div>
            </div>
            <br>
      
      	<?php 
            //require_once 'select_view.php';
            //include 'data_view';   
           // $this->load->view('welcome/data_view');
            //echo loadView('data_view');
          //$this->view('data_view');
         // global $h;
          //$this->load->view('select_view.php',$h,TRUE);
         ?>
      
        
    </body>
</html>
