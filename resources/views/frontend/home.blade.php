<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img height="60" src="./img/logo.png" alt="image" />
        <button
          class="navbar-toggler"
          data-target="#my_navigation"
          data-toggle="collapse"
        >
          click
        </button>
        <div class="collapse navbar-collapse" id="my_navigation">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Product/Service</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">News</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <div id="carousels" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/slide1.png" class="d-block" style="width: 1350px" alt="slide1" />
          </div>
          <div class="carousel-item">
            <img src="./img/slide2.jpg" class="d-block" style="width: 1350px" alt="slide2" />
          </div>
          <div class="carousel-item">
            <img src="./img/slide1.jpg" class="d-block" style="width: 1350px"  alt="slide3"/>
          </div>
        </div>
        <div class="carousel-control-prev" type="button" data-bs-target="#carousels" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </div>
        <div class="carousel-control-next" type="button" data-bs-target="#carousels" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </div>
      </div>
      <div class="container">
        <div>
          <h2>Company Info</h2>
          <p>
            Example text Example text Example text Example text Example text
            Example text
          </p>
        </div>
        <h2>Latest News</h2>
        <div class="row">
          <div class="col-3">
            <img
              src="./img/news1.jpg"
              alt=""
              style="width: 260px; height: 200px; border-radius: 5px"
            />
            <div class="p-3">
              <p style="font: 1.2em sans-serif">News1</p>
              <p>Example text here</p>
            </div>
          </div>
          <div class="col-3">
            <img
              src="./img/news2.jpg"
              alt=""
              style="width: 260px; height: 200px; border-radius: 5px"
            />
            <div class="p-3">
              <p style="font: 1.2em sans-serif">News2</p>
              <p>Example text here</p>
            </div>
          </div>
          <div class="col-3">
            <img
              src="./img/news3.jpg"
              alt=""
              style="width: 260px; height: 200px; border-radius: 5px"
            />
            <div class="p-3">
              <p style="font: 1.2em sans-serif">News3</p>
              <p>Example text here</p>
            </div>
          </div>
          <div class="col-3">
            <img
              src="./img/news4.jpg"
              alt=""
              style="width: 260px; height: 200px; border-radius: 5px"
            />
            <div class="p-3">
              <p style="font: 1.2em sans-serif">News4</p>
              <p>Example text here</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <h2>Latest Video</h2>
        <div class="row">
          <div class="col-4 ratio ratio-16x9">
            <iframe
              style="border-radius: 5px; width: 350px; height: 200px"
              src="https://www.youtube.com/embed/AT22Cq26zr0?si=1m1FLDCeGoRoAL9E"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
          <div class="col-4">
            <iframe
              style="border-radius: 5px; width: 350px; height: 200px"
              src="https://www.youtube.com/embed/dB4J_NgwC-s?si=qu512K5hiiSc6HBP"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
          <div class="col-4">
            <iframe
              style="border-radius: 5px; width: 350px; height: 200px"
              src="https://www.youtube.com/embed/xFQGM5yq1bw?si=kFiCHhWCUhbv4isd"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer -->
<footer class="bg-body-tertiary text-center bg-dark mt-4">
    <section class="container p-4 ">
      <section class="mb-4">
        <section class="" style="color: rgb(130, 126, 126);">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 ">
                        <h5 class="text-uppercase">Column 1</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="text-info" href="#!">Link 1</a>
                            </li>
                            <li>
                                <a class="text-info" href="#!">Link 2</a>
                            </li>
                            <li>
                                <a class="text-info" href="#!">Link 3</a>
                            </li>
                            <li>
                                <a class="text-info" href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Column 2</h5>
            
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="text-info" href="#!">Link 1</a>
                            </li>
                            <li>
                                <a class="text-info" href="#!">Link 2</a>
                            </li>
                            <li>
                                <a class="text-info" href="#!">Link 3</a>
                            </li>
                            <li>
                                <a class="text-info" href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Column 3</h5>
            
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="text-info" href="#!">Link 1</a>
                            </li>
                            <li>
                                <a class="text-info" href="#!">Link 2</a>
                            </li>
                            <li>
                                <a class="text-info" href="#!">Link 3</a>
                            </li>
                            <li>
                                <a class="text-info" href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Column 4</h5>
            
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="text-info" href="#!">Link 1</a>
                            </li>
                            <li>
                                <a class="text-info" href="#!">Link 2</a>
                            </li>
                            <li>
                                <a class="text-info" href="#!">Link 3</a>
                            </li>
                            <li>
                                <a class="text-info" href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </section>
      </section>
    </section>
  </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
