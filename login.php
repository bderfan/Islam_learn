 <?php
   include('header.php');

   if(isset($_POST['login'])){
       $old = $_POST;
       
       require('authenticate.php');
       
       $login = login();
       
       if($login['status'] == 'error'){
           $error = $login['message'];
       }
       if(isset($_SESSION['authenticate'])){
          header('Location:dashboard/introduction.php');
       }
   }
 ?>
    <main>
      <!--============================ Banner part ===============================-->
      <section id="Banner" style="background-image:url('images/login.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center;">
          <div class="container">
             <div class="row">
               <div class="col-6 mx-auto text-center py-5">
                  <div class="pt-5">
                    <div class="pt-5">
                      <div class="pt-5">
                        <div class="pt-5">
                            <div class="pt-5">
                              <div class="pt-5">
                                 <div class="pt-5">
                                   <div class="pt-5">
                                     <div class="pt-5">
                                        <form method="post" class="py-5 bg-dark-subtle rounded">
                                           <h2 class="fw-bold">লগইন পেইজ</h2>
                                           <div class="mb-3 px-5 mt-5 mx-auto">
                                               <label for="exampleFormControlInput1" class="form-label d-flex justify-content-start">আপনার ইমেইল</label>
                                               <input type="email" class="form-control ms-0 bg-body-secondary text-black" name="email" id="exampleFormControlInput1" placeholder="" style="width:100%;" value="<?php echo $old['email']?? ''; ?>"> 
                                           </div>
                                            <p class="text-success text-start px-5"><?php echo $error['email']?? ''; ?></p>
                                            <div class="my-3 px-5 mx-auto Pass4" style="position:relative;">
                                               <label for="exampleInputPassword1" class="form-label d-flex justify-content-start">আপনার ইমেইল পাসওয়ার্ড</label>
                                               <input type="password" class="form-control ms-0 bg-body-secondary text-black" id="exampleInputPassword1" placeholder="" name="password" value="<?php echo $old['password']??$_COOKIE['password']??'' ?>" style="width:100%;">
                                               <i class="fa-solid fa-eye-slash" id="eye3"></i>
                                             </div>
                                             <p class="text-success text-start px-5"><?php echo $error['password']?? ''; ?></p> 
                                             <p class="text-success text-start px-5"><?php echo $error['match']?? ''; ?></p> 
                                             <div class="mt-3 text-start px-5">
                                               <a href="registration.php" class="text-danger">আপনে নতুন ইউজার হলে রেজিষ্ট্রেশন করুন</a>
                                             </div>
                                             <div class="mt-5 d-flex justify-content-center">
                                               <button type="submit" class="btn btn-dark" name="login">লগইন করুন</button>
                                             </div>
                                             <a href="javascript:void(0)" onclick="fblogin()">Login with Facebook</a>
                                        </form>  
                                        <div class="d-flex justify-content-center py-3">
                                          <a href="index.php"><button type="button" class="btn btn-danger">
                                            পূর্ব পৃষ্ঠায় ফিরে যান    
                                          </button></a>
                                       </div>
                                     </div>  
                                   </div> 
                                 </div>
                               </div>  
                             </div>   
                         </div>  
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
  
  $('#eye3').click(function(){
       if($(this).hasClass('fa-eye-slash')){
           
          $(this).removeClass('fa-eye-slash');
          
          $(this).addClass('fa-eye');
          
          $('#exampleInputPassword1').attr('type','text');
            
        }else{
         
          $(this).removeClass('fa-eye');
          
          $(this).addClass('fa-eye-slash');  
          
          $('#exampleInputPassword1').attr('type','password');
        }
        
    });
});
    
    
 window.fbAsyncInit = function() {
    FB.init({
        appId      : '315174761066002',
        cookie     : true,
        xfbml      : true,
        version    : 'v17.0'
      });
      FB.AppEvents.logPageView();   
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "https://connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
    
    
    function fblogin(){
        FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
           FB.api('/me', function(response) {
           console.log(response);
        }
    });
    });
    }    
</script>