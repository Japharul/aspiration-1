<?php
include "header.php";
include "navbar.php";
?>

  <body>

    <!-- Header Start -->
    <div class="container-fluid page-header">
      <div class="container">
        <div
          class="d-flex flex-column align-items-center justify-content-center py-5"
          style="min-height: 400px"
        >
          <div class="h3 text-white text-uppercase text-center">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Necessitatibus!
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
      <?php
      //include 'sessiom.php';
      include 'header.php';
      include 'admin/database/db.php';

      if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $query = "SELECT title, sub, content, images, created_at FROM blogs WHERE id = $id";
          $result = mysqli_query($conn, $query);
          
          if ($result && mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_assoc($result);
              // Display the full blog content using $row['title'], $row['sub'], etc.
              echo '<h4>' . htmlspecialchars($row['title']) . '</h4>';        
              // Decode JSON images and display
              $image_paths = json_decode($row['images']);
              if (!empty($image_paths)) {
                  foreach ($image_paths as $image_path) {
                      echo '<img src="'. htmlspecialchars($image_path) . '" alt="Blog Image" class="img-fluid medium-image">';
                  }
              }
              echo '<p>' . nl2br(htmlspecialchars($row['sub'])) . '</p>';
              echo '<p>' . nl2br(htmlspecialchars($row['content'])) . '</p>';
              echo '<p>Publish Date: ' . htmlspecialchars($row['created_at']) . '</p>';
              
          } else {
              echo 'Blog not found.';
          }
          
          mysqli_free_result($result);
      } else {
          echo 'Invalid request.';
      }

      $conn->close();
      ?>
      </div>
    </div>
    <!-- Blog End -->
    <?php
    include "news-subscriber.php";
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
  <?php
    include "footer.php";
  ?>
</html>
