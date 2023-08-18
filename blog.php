  <?php
  include "header.php";
  include "navbar.php";
  ?>
    <body>

      <!-- Blog Start -->
      <div class="container-fluid py-5">
    
        <div class="container py-5 mt-3">
        <h1> Latest Blog</h1>
          <div class="row">
              <div class="col-lg-12">
                <div class="row">
                    <?php
                    include 'admin/database/db.php'; // Include your database connection
                    $query = "SELECT id, created_at, title, images, sub, content FROM blogs";
                    $result = mysqli_query($conn, $query);
                    if ($result && mysqli_num_rows($result) > 0) {          
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-md-4 mb-4">';
                            echo '<div class="blog-entry">';
                            echo '<h4>' . htmlspecialchars($row['title']) . '</h4>';
                    
                            // Decode JSON images and display
                            $image_paths = json_decode($row['images']);
                            if (!empty($image_paths)) {
                                foreach ($image_paths as $image_path) {
                                    echo '<img src="'. htmlspecialchars($image_path) . '" alt="Blog Image" class="img-fluid medium-image">';
                                }
                            }
                            echo '<p>' . nl2br(htmlspecialchars($row['sub'])) . '</p>';
                            //echo '<p>' . nl2br(htmlspecialchars($row['content'])) . '</p>';
                            echo '<p>Publish Date: ' . htmlspecialchars($row['created_at']) . '</p>';
                            echo '<a href="blog-detail.php?id=' . $row['id'] . '" class="btn btn-primary">Read More</a>';// Add Read More button
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo 'No blogs found.';
                    }
                    
                    mysqli_free_result($result);
                    $conn->close();
                    ?>
                </div>
            </div>

                 <div class="row pb-3 test"></div>
                   <div class="row">
                    <div class="col-12">
                      <nav aria-label="Page navigation">
                        <ul
                          class="pagination pagination-lg justify-content-center mb-0"
                          style="padding: 30px"
                        >
                          <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                   </div>
                 </div>
              </div>
           </div>
         </div>
       </div>
      <!-- Blog End -->

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

      <!-- custom script -->
      <script>
        $(document).ready(function () {
          function newdiv() {
            var j, i;
            for (i = 0; i <= 10; i++, j = i + 1) {
              var appendElement = `
                <div class="col-md-4 mb-4 pb-2" id="blog-${i}">
                  <div class="blog-item">
                    <div class="position-relative">
                      <img class="img-fluid w-100" src="img/blog-1.jpg" alt="" />
                      <div class="blog-date">
                        <h6 class="font-weight-bold mb-n1">${i}</h6>
                        <small class="text-white text-uppercase">Jan</small>
                      </div>
                    </div>
                    <div class="bg-white p-4">
                      <div class="d-flex mb-2">
                        <a
                          class="text-primary text-uppercase text-decoration-none"
                          href="blogdetail.html"
                          >Nozarashi Rai</a
                        >
                      </div>
                      <a class="h5 m-0 text-decoration-none" href="blogdetail.html"
                        >Dolor justo sea kasd lorem clita justo diam amet</a
                      >
                    </div>
                  </div>
                </div>`;

              $(".test").append(appendElement);
            }
          }

          newdiv();
        });
      </script>
    </body>
    <?php
      include "footer.php";
    ?>
  </html>
