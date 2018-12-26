<?php
    include 'php/header.php';
    //include 'navbar.php';
?>
<div class="content">
    <h1>IntaWood Products Ltd</h1>
    <div class="courasel_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>This is a caption here</h5>
                        <p>followed by a sub caption!</p>
                    </div>
                    <img src="images/cnc2.jpg" class="d-block w-100" alt="...">
                </div>
            <div class="carousel-item">
                <img src="images/AlphaCam2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                        <h5>This is a caption here</h5>
                        <p>followed by a sub caption!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/kitchenDesign2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                        <h5>This is a caption here</h5>
                        <p>followed by a sub caption!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
    <div class="company_description">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lacus libero, vulputate ac leo ut, sodales tincidunt nisl. Donec vel euismod lectus. Morbi a quam sit amet nibh faucibus ultricies. Phasellus pellentesque nisi eu ante laoreet, et rutrum erat varius. Maecenas venenatis iaculis pharetra. Aliquam tempus diam leo, sit amet cursus ex varius in. Integer pellentesque id justo ac sagittis. Nam id pretium est.</p>
    </div>
</div>    
<?php
    include 'php/footer.php';
?>