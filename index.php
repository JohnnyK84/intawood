<!--Header file and navbar included here-->
<?php
    include 'php/header.php';
?>

<div class="content">
  <!--courasel container-->
  
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-ride="carousel"
    >
      <ol class="carousel-indicators">
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div
            class="carousel-caption d-none d-md-block rounded"
            id="carousel_caption"
          >
            <h4>CNC Router</h4>
            <h5 class="courasel_caption">Unmatched Production Speed and Quality of Work</h5>
          </div>
          <img src="assets/images/cnc2.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img
            src="assets/images/AlphaCam2.jpg"
            class="d-block w-100 rounded"
            alt="..."
          />
          <div
            class="carousel-caption d-none d-md-block rounded"
            id="carousel_caption"
          >
            <h4>Precision Cutting</h4>
            <h5 class="courasel_caption">Computer designed plans are cut with efficiency and precision</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="assets/images/kitchenDesign2.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div
            class="carousel-caption d-none d-md-block rounded"
            id="carousel_caption"
          >
            <h4>Software aided design</h4>
            <h5 class="courasel_caption">Our advanced software allows us to tailor any kitchen or cabinetry design</h5>
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  
  <!--Primary Content-->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-4">Intawood Products Limited</h1>
      <p class="lead">
        Our advanced CNC Router is capable of cutting any design specifications with unmatched accuracy and precision.
      </p>
      <hr class="my-4" />
      <p>
        It uses utility classes for typography and spacing to space content out
        within the larger container.
      </p>
      <a class="btn btn-secondary btn-lg" href="#" role="button">Learn more</a>
    </div>
  </div>
  <!--Secondary Text Container-->
  <div class="container" id="company_description">
    <p class="lead">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lacus
      libero, vulputate ac leo ut, sodales tincidunt nisl. Donec vel euismod
      lectus. Morbi a quam sit amet nibh faucibus ultricies. Phasellus
      pellentesque nisi eu ante laoreet, et rutrum erat varius. Maecenas
      venenatis iaculis pharetra. Aliquam tempus diam leo, sit amet cursus ex
      varius in. Integer pellentesque id justo ac sagittis. Nam id pretium est.
    </p>
  </div>
  <!--Cards Container-->
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card text-white bg-secondary mb-3">
          <img src="./assets/images/custom_furniture.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Custom Furniture</h5>
            <p class="card-text">
              With supporting text below as a natural lead-in to additional
              content.
            </p>
            <a href="#" class="btn btn-light">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-secondary mb-3">
          <img src="./assets/images/kitchens.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Kitchens</h5>
            <p class="card-text">
              With supporting text below as a natural lead-in to additional
              content.
            </p>
            <a href="#" class="btn btn-light">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-secondary mb-3">
          <img src="./assets/images/display_cabinetry.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Custom Cabinetry</h5>
            <p class="card-text">
              With supporting text below as a natural lead-in to additional
              content.
            </p>
            <a href="#" class="btn btn-light">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="container">
    <div class="card-body">
      <h5 class="card-title">We hand make luxury Lujo&trade; furniture</h5>
      <img src="./assets/images/lujo.jpg" class="card-img-top" alt="..." />
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-secondary">Go somewhere</a>
    </div>
  </div>
</div>
</div>

<!--Footer file attached-->
<?php
    include 'php/footer.php';
?>
