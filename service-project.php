<?php include("./includes/db.php") ?>
 
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>

<body class="service-details-page" onblur="self.close();">
  <!-- ใช้ Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<a href="JavaScript:window.close()" style="position: fixed; right:15px;"><i class="fa-solid fa-rectangle-xmark fa-3x" style="color:red;"></i></a>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


    <!-- Page Title -->


    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

      <div class="row">

            <?php
            $the_project_id = $_GET['id'];
            $lan = $_GET['lan'];
 
            $query = "SELECT * FROM tbl_projects"
                           . " inner join tbl_project_cat"
                           . " on tbl_projects.project_category_id = tbl_project_cat.id_project"
                           . " and  tbl_projects.project_id =  $the_project_id "
                           . " order by tbl_project_cat.id_project desc ";                                 
   
            $fetch_posts_data = mysqli_query($connection, $query);
            while ($Row = mysqli_fetch_assoc($fetch_posts_data)) {
                
                $the_project_image = $Row['project_image'];
                $the_project_content = base64_decode($Row['project_content']);
                if ($lan == 'en') {
                    $the_project_title = base64_decode($Row['project_title']);
                } else if ($lan == 'ch') {
                    $the_project_title = base64_decode($Row['project_title_china']);
                }else{
                     $the_project_title = base64_decode($Row['project_title_thai']);
                }
            ?>

           <div class="text-center mx-auto wow fadeInUp section-title mt-5" data-wow-delay="0.1s" style="max-width: 800px;">
                <h2 class="display-5 mb-4"><?php // echo constant('page_activity_2') ?></h2>
                <p class="mb-0 fs-5"><?php //=echo $the_activity_title ?></p>
         </div>
            <div class="rounded-4 service-item text-center p-4 flex-column align-items-center mt-5">
                        <div class="blog-item"  >
                             <p style="width:100%"><?php echo $the_project_content ?></p>
                        </div>
           </div>
            <?php } ?>
        </div>     
      </div>

    </section><!-- /Service Details Section -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

