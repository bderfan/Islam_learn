 <?php
   include('header.php');

   
  
   if(isset($_POST['registration'])){
        $old = $_POST;
        require('authenticate.php');

        $registration = registration();
       
        if($registration['status'] == 'error'){
            $error = $registration['message'];
        }
        if($registration['status'] == 'success'){
          $success['success'] = $registration['message'];
        }
        
       
   }
 ?>
    <main>
      <!--============================ Banner part ===============================-->
      <section id="Banner" style="background-image:url('images/registration.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center;">
          <div class="container">
             <div class="row">
               <div class="col-6">
                 
               </div>
               <div class="col-6 text-center py-5">
                  <div class="pt-5">
                    <div class="pt-5">
                      <div class="pt-5">
                         <?php
                             if(isset($success)){
                          ?>
                          <div class="alert alert-danger" role="alert" name="success">
                            <?php print $success['success']; ?>
                          </div>
                          <?php
                             header('Refresh:5,url=login.php');
                             }
                          ?>
                         <form method="post" class="py-5 bg-dark-subtle rounded">
                            <h2 class="fw-bold">রেজিষ্ট্রেশন পেইজ</h2>
                            <div class="mb-3 px-5 mt-5 mx-auto">
                                <label for="exampleFormControlInput1" class="form-label d-flex justify-content-start">আপনার নাম</label>
                                <input type="text" class="form-control ms-0 bg-body-secondary text-black" id="exampleFormControlInput1" name="name" placeholder="" style="width:100%;" value="<?php echo $old['name']?? ''; ?>">
                            </div>
                            <p class="text-primary-emphasis text-start px-5"><?php echo $error['name']?? ''; ?></p>
                            <div class="mb-3 px-5 mt-5 mx-auto">
                                <label for="exampleFormControlInput1" class="form-label d-flex justify-content-start">আপনার ফোন নাম্বার</label>
                                <input type="text" class="form-control ms-0 bg-body-secondary text-black" id="exampleFormControlInput1" name="phone_no" placeholder="" style="width:100%;" value="<?php echo $old['phone_no']?? ''; ?>">
                            </div>
                            <p class="text-primary-emphasis text-start px-5"><?php echo $error['phone_no']?? ''; ?></p>
                            <div class="mb-3 px-5 mt-5 mx-auto">
                                <label for="exampleFormControlInput1" class="form-label d-flex justify-content-start">আপনার ঠিকানা</label>
                                <textarea type="text" class="form-control ms-0 bg-body-secondary text-black" name="address" style="width:100%; height: 150px;"><?php echo $old['address']?? ''; ?></textarea>
                            </div>
                            <p class="text-primary-emphasis text-start px-5"><?php echo $error['address']?? ''; ?></p>
                            <div class="mb-3 px-5 mt-5 mx-auto">
                                <label for="exampleFormControlInput1" class="form-label d-flex justify-content-start">আপনার ইমেইল</label>
                                <input type="email" class="form-control ms-0 bg-body-secondary text-black" id="exampleFormControlInput1" name="email" placeholder="" style="width:100%;" value="<?php echo $old['email']?? ''; ?>">
                            </div>
                            <p class="text-primary-emphasis text-start px-5"><?php echo $error['email']?? ''; ?></p>
                            <div class="mb-3 px-5 mt-5 mx-auto Pass5" style="position:relative;">
                                <label for="exampleInputPassword2" class="form-label d-flex justify-content-start">আপনার ইমেইল পাসওয়ার্ড</label>
                                <input type="password" class="form-control  ms-0 bg-body-secondary text-black" id="exampleInputPassword2" name="password" style="width:100%;" placeholder="" value="<?php echo $old['password']?? ''; ?>">
                                <i class="fa-solid fa-eye-slash" id="eye4"></i>
                             </div>
                             <p class="text-primary-emphasis text-start px-5"><?php echo $error['password']?? ''; ?></p>
                             <div class="mb-3 px-5 mt-5 mx-auto Pass6" style="position:relative;">
                                <label for="exampleInputPassword3" class="form-label d-flex justify-content-start">নিশ্চিত পাসওয়ার্ড</label>
                                <input type="password" class="form-control  ms-0 bg-body-secondary text-black" id="exampleInputPassword3" name="confirm_password" style="width:100%;" placeholder="" value="<?php echo $old['confirm_password']?? ''; ?>">
                                <i class="fa-solid fa-eye-slash" id="eye5"></i>
                             </div>
                             <p class="text-primary-emphasis text-start px-5"><?php echo $error['confirm_password']?? ''; ?></p> 
                             <div class="mt-3 text-start px-5">
                               <a href="login.php" class="text-danger">আপনে পুরাতন ইউজার হলে লগইন করুন</a>
                             </div>
                             <div class="mt-5 d-flex justify-content-center">
                               <button type="submit" class="btn btn-dark" name="registration">রেজিষ্ট্রেশন করুন</button>
                             </div>
                        </form>    
                      </div>  
                    </div> 
                   </div>   
                </div>
             </div>
           </div>  
      </section>
        
        
        
      
    </main>
<?php
  include('footer.php');
?>

<script>
$(function(){
  
  $('#eye4').click(function(){
       if($(this).hasClass('fa-eye-slash')){
           
          $(this).removeClass('fa-eye-slash');
          
          $(this).addClass('fa-eye');
          
          $('#exampleInputPassword2').attr('type','text');
            
        }else{
         
          $(this).removeClass('fa-eye');
          
          $(this).addClass('fa-eye-slash');  
          
          $('#exampleInputPassword2').attr('type','password');
        }
        
    });
    
     $('#eye5').click(function(){
       if($(this).hasClass('fa-eye-slash')){
           
          $(this).removeClass('fa-eye-slash');
          
          $(this).addClass('fa-eye');
          
          $('#exampleInputPassword3').attr('type','text');
            
        }else{
         
          $(this).removeClass('fa-eye');
          
          $(this).addClass('fa-eye-slash');  
          
          $('#exampleInputPassword3').attr('type','password');
        }
        
    });
});
</script>