<?php include('includes/header.php');?>
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">The Venus Blog<br>
      <small>Know more about the society you live today</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="../index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Blog Home</li>
    </ol>

    <!-- Blog Post -->
    <?php
      //$db->query("SELECT admin_msg FROM admin WHERE admin_name = :name_admin");
      //$db->bindValue(':name_admin', $c_email, PDO::PARAM_STR);
    $db->query("SELECT * FROM admin_post WHERE admin_area =:area AND admin_lga =:lga");
    $db->bindValue(':area', $my_area, PDO::PARAM_STR);
    $db->bindValue(':lga', $my_lga, PDO::PARAM_STR);
    
      $results = $db->fetchMultiple();
      
    ?>
    <?php if ($results) { ?>
    <?php  foreach($results as $result) : ?> 
    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-4 mb-4">
              <?php 
          $myo_img = $result['admin_postpic']; 
               //echo'<img src="admin/uploaded_image/' . $myo_img . '" height="400px!important;" width="200px!important;" id="output">';
          ?>
          <img img class="img-fluid rounded" src="uploaded_image/<?php echo $myo_img ?>" height="200" width="200">
            
          </div>
          <div class="col-lg-2 mb-2">
          </div>
          <div class="col-lg-6 mb-6">
            <h4 class="card-title"><?php echo $result['admin_heading']; ?></h4>
            <p class="card-text"><?php echo $result['admin_msg']; ?></p>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        Posted on <?php echo $result['time']; ?> by
        <a href="#">The Venus</a>
      </div>
    </div>
<?php endforeach ; ?>
<?php }
 else{
  echo "<h3 style='color : red;'>My Area news not yet in your area you can contact us to bring your community news to your area</h3>";
}  ?>
  <!-- /.container -->
<div class="row">
      <div class="col-lg-6">
        <h2>The Venus Community</h2>
        <p>Get more from our social media community:</p>
        <ul>
          <li>
            <strong>Follow us on <i class='fa fa-instagram' style='font-size:24px'></i></strong>
          </li>
          <a href="https://twitter.com/theveenuss"><li>Follow us on <i class='fa fa-twitter-square' style='font-size:24px'></i></li></a>
          <a href="https://web.facebook.com/theveenuss"><li>Like us on <i class='fa fa-facebook-square' style='font-size:24px'></i></li></a>
          <li>email us on tundeajayi@ymail.com</li>
        </ul>
        <p>Get involved and know more about the society you live in...you own it and we can only get the best from it in unity. Get motivated and meet people in your area to begin a better Community.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="" alt="">
      </div>
    </div>
     <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p></p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#" name="submit">Back to top</a>
      </div>
    </div>
  <?php include('includes/footer.php'); ?>