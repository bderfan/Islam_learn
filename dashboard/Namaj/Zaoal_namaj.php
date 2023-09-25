<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-extensions.css">
    <link rel="stylesheet" href="../../css/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <title>Islam</title>
    <style>
       /* back to top btn */
       .back-to-top {
	       position: fixed;
	       bottom:  20px;
	       right: 20px;
	       z-index: 9999;
	       display: none;
       }
       .back-to-top i {
	       width: 40px;
	       height: 40px;
	       background: #fff;
	       color: #8688FF;
	       border-radius: 50%;
	       line-height: 40px;
	       text-align: center;
	       font-size: 24px;
       }
       .back-to-top i:hover{
         background: #cecccc; 
         transition: all linear .5s;
       }
    </style>
  </head>
  <body>
    <header>
      
    </header>
    <main>
      <section style="background-color: #8688FF;">
         <div class="d-flex justify-content-end py-3 px-2">
           <a href="../Namaj.php"><button class="btn btn-light">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:20px; height:20px;">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
               </svg>
            </button></a>
         </div>
         <div class="container">
           <div class="row">
             <div class="col-8 mx-auto py-5 text-white">
               <h1 class="text-center fw-bold">যাওয়াল নামাজের বিবরণ</h1>
               <hr style="border:2px solid #fff;">
               <h4>যাওয়ালের নামাজ আদায়কারী অসংখ্য সওয়াব লাভ করিয়া থাকে । বর্ণিত আছে, এই নামাজ আদায়কারীর সহিত ৭০ সহস্র ফেরেশতা শরীক হইয়া থাকে এবং তাহার জন্য রাত পর্যন্ত আল্লাহর দরবারে মাগফিরাত কামনা করিয়া থাকে । হযরত নবী কারীম (সাঃ) এই নামাজ আদায় করিতেন </h4>
               <br>
               <h4><span class="fw-bold">হাদিসঃ </span>'যাওয়ালের নামাজের সময় আসমানের দরজা উন্মুক্ত হইয়া যায় এবং আমার ইচ্ছা এই যে, এখনই আমার আ'মল আসমানে পৌছিয়া যায় । এই নামাজের ওয়াক্ত সূর্য পশ্চিম দিকে গড়াইবার সঙ্গে সঙ্গে আরম্ভ হইয়া আছরের পূর্ব পর্যন্ত থাকে । এই নামাজ চার রাকাআত এবং এ্ক নিয়তে আদায় করিতে হয় । সূরা ফাতিহার পরে যে কোন সূরা মিলাইয়া এই নামাজ আদায় করা যায় ।'</h4>
               <br>
               <h3 class="fw-bold mt-5">যাওয়াল নামাজের নিয়ত</h3>
               <h2 style="line-height:1.8;">نَوَيْتُ اَنْ اُصَلِّىَ لِلّٰهِ تَعاَلٰى اَرْبَعَ رَكَعاَتِ صَلٰوةِ الزَّوَالِ سُنَّةُ رَسُوْلِ اللّٰهِ تَعاَلٰى ـ مُتَوَجِّهاً اِلٰى جِهَةِ الْكَعْبَةِ الشَّرِيْفَةِ اَللّٰهُ اَكْبَرُ .</h2>
               <h4><span class="fw-bold">উচ্চারণঃ </span>নাওয়াইতু আন উছাল্লিয়া লিল্লাহি তাআ'লা আরবায়া' রাকায়াতি সালাতিয যাওয়ালি সুন্নাতু রাসূ্লিল্লাহি তাআ'লা মুতাওয়াজ্জিহান ইলা জিহাতিল কা'বাতিশ শারীফাতি আল্লাহু আকবার ।</h4>
               <h4><span class="fw-bold">বাংলায় নিয়তঃ </span>আমি কেবলামুখী হইয়া আল্লাহর উদ্দেশ্যে চার রাকাআত যাওয়াল নামাজ আদায়ের নিয়ত করিলাম, আল্লাহু আকবার</h4>
             </div>
           </div>
         </div>
         <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
      </section>
    </main>
    <footer>
      
    </footer>
  </body> 
    <script src="../../js/jquery-1.12.4.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/sweetalert2@11.js"></script>
</html>
<script>
     $(function(){
        // sticky menu
        $(window).on('scroll', function(){
        var scrolling = $(this).scrollTop();
        var back2top = $(".back-to-top");
        if(scrolling > 100){
        back2top.fadeIn(1000);	
        }
        else {
	        back2top.fadeOut(1000);
        }
        });	
         
        // back to top
        var html_body = $('html, body');
        back2top.on('click', function(){
        html_body.animate({scrollTop:0},5000);	
        });
      });  
</script>