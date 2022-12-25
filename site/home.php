<?php
include "header.php";
?>
<title>Home</title>
<!-- Swiper-->
<div align="center">
    <div class="col-lg-9">
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"> <img class="d-block img-fluid" src="images/slider/1.jpg"
                        style="height: 350px;" alt="First slide"> </div>
                <div class="carousel-item"> <img class="d-block img-fluid" src="images/slider/2.jpg"
                        style="height: 350px;" alt="Second slide"> </div>
                <div class="carousel-item"> <img class="d-block img-fluid" src="images/slider/3.jpg"
                        style="height: 350px;" alt="Third slide"> </div>
                <div class="carousel-item"> <img class="d-block img-fluid" src="images/slider/4.jpg"
                        style="height: 350px;" alt="fourth slide"> </div>
            

            </div>
            <style>
            .carousel-control-next,
            .carousel-control-prev

            /*, .carousel-indicators */
                {
                filter: invert(100%);
            }
            </style>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span
                    class="carousel-control-prev-icon" aria-hidden="true"></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                    class="sr-only">Previous</span> </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                    class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        </div>
    </div>
</div>



<!-- Our Products-->
<section class="section section-md bg-default text-center">
    <div class="container">
        <div class="isotope-wrap isotope-modern-wrap">
            <!-- Section Header-->
            <div class="section__header">
                <h2>Our Products</h2>
           
            </div>
            <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="products">
                <div class="row row-offset-2">
                    <div class="col-6 col-md-4 col-lg-3 isotope-item" data-filter="Category 1">
                        <!-- Product-->
                        <article class="product"> <a class="product__image-wrap" href="#"><img class="product__image"
                                    src="images/products/1.png" alt="" width="210" height="200" /></a>
                            <div class="product__main">
                                <p class="product__title"><a href="#">1 KG Curd</a></p>
                                <p class="product__price">from ₹350</p>
                            </div>
                            <div class="product__footer"><a class="button button-xs button-gray-2" href="#">details</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 isotope-item" data-filter="Category 2">
                        <!-- Product-->
                        <article class="product"> <a class="product__image-wrap" href="#"><img class="product__image"
                                    src="images/products/2.png" alt="" width="210" height="200" /></a>
                            <div class="product__main">
                                <p class="product__title"><a href="#">1 KG Butter</a></p>
                                <p class="product__price">from ₹450</p>
                            </div>
                            <div class="product__footer"><a class="button button-xs button-gray-2" href="#">details</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 isotope-item" data-filter="Category 1">
                        <!-- Product-->
                        <article class="product"> <a class="product__image-wrap" href="#"><img class="product__image"
                                    src="images/products/3.png" alt="" width="210" height="200" /></a>
                            <div class="product__main">
                                <p class="product__title"><a href="#">Premium Ice-Cream</a></p>
                                <p class="product__price">from ₹250</p>
                            </div>
                            <div class="product__footer"><a class="button button-xs button-gray-2" href="#">details</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 isotope-item" data-filter="Category 2">
                        <!-- Product-->
                        <article class="product"> <a class="product__image-wrap" href="#"><img class="product__image"
                                    src="images/products/4.png" alt="" width="210" height="200" /></a>
                            <div class="product__main">
                                <p class="product__title"><a href="#">A2 Cow Ghee</a></p>
                                <p class="product__price">from ₹590</p>
                            </div>
                            <div class="product__footer"><a class="button button-xs button-gray-2" href="#">details</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Page Footer-->
<?php
    include "footer.php";
      ?>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>