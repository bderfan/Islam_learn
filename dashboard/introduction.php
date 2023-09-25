<?php
  include('sidebar.php');
?>
 

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="background-image:url('../images/introduction.jpeg'); background-position:center; background-size:cover; background-repeat:no-repeat;">
     <form class="d-flex justify-content-end py-3" method="post">
        <button type="submit" class="btn btn-light" name="logout">লগআউট করুন</button>
     </form>
     <div class="pt-5">
        <div class="pt-5">
          <div class="pt-5">
       
          </div>
        </div>
     </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      
    </main>
  </div>
</div>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>

<?php
  include('footer.php');
?>