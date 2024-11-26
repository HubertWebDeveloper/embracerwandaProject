<style>
    .form-control.text {
    width: 100%; /* Full width */
    background-image: url('images/logo.png');
    background-size: contain; /* Ensures the image covers the entire textarea */
    background-position: center; /* Centers the background image */
    background-repeat: no-repeat; /* Prevents tiling of the background */
    color: #000; /* Adjust text color for readability */
    font-size: 16px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    resize: none; /* Prevents resizing, optional */
}

.form-control.text::placeholder {
    color: #555; /* Adjust placeholder text color for readability */
    opacity: 0.8;
}
</style>
<!-- FAQs -->
<div class="FAQs" style="background-image:url('images/back.jpg'); background-size: cover;">
    <div class="categ_header text-center">
        <h3 class="mt-3 mb-3 text-light" style="text-shadow: 0.3rem .5rem rgba(0,0,0,.1);">Leave a comment</h3>
        <span></span>
    </div>
    <div class="container row mx-auto">
        <div class="col-md-6">
            <form action="EditCode.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                       <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Name: </span>
                            <input type="text" name="name" class="form-control" placeholder="Eg: Example" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                       <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Email: </span>
                            <input type="email" name="email" class="form-control" placeholder="Eg: example12@gmail.com">
                        </div>
                    </div>
                    <div class="col-md-12">
                       <div class="input-group mb-3">
                            <textarea name="message" rows="10" class="form-control text" placeholder="Write Your Comment here..." required></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" name="comment" class="btn text-white" style="background:#c5722b">Send Comment <i class="fas fa-share"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6 mb-4">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button  style="background:#c5722b;color:white" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#default" aria-expanded="false" aria-controls="default">
                            embracerwandainfo@gmail.com | CEO
                        </button>
                    </h2>
                    <div id="default" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                            Welcome to Embrace Rwanda, where we champion healthier, 
                            happier families through care, compassion, and community. Together, 
                            we nurture well-being with essential health and nutrition support. 
                            Let’s build a brighter future for every family, one step at a time.
                            </p>
                        </div>
                    </div>
                </div>
                <?php foreach($comments as $comment) : $id = $comment['id']; ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button"   style="background:#c5722b;color:white" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $id ?>" aria-expanded="true" aria-controls="<?php echo $id ?>">
                                <?= $comment['name'] ?> | <?= $comment['email'] ?>
                            </button>
                        </h2>
                        <div id="<?php echo $id ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p><?= $comment['comment'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<footer class="footer" style="background:#c5722b">
    <div class="container" style="padding:20px 0">
        <div class="footer__inner">
            <div class="footer__item">
            <!-- after make an action target="_blank" -->
                <form action="#" method="post">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <div class="form-group">
                            <h5 class="mb-1 text-white">Learn More About Embrace Rwanda</h5>
                            <div class="form-text mt-0 text-white">
                                Embrace Rwanda is a grassroots community development partnership between Canada and Rwanda.
                                Embrace Rwanda provides a remarkable example of how developing relationships,
                                establishing partnerships and building on the strengths and resilience of a 
                                very vulnerable population has created an environment for healing and growth</div>
                        </div>
                        <div class="d-flex align-items-start">
                            <button class="btn" type="submit" style="margin-right:5px;background:#eeb351;color:white">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button class="btn" type="submit" style="margin-right:5px;background:#eeb351;color:white">
                                <i class="fab fa-instagram"></i>
                            </button>
                            <button class="btn" type="submit" style="margin-right:5px;background:#eeb351;color:white">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button class="btn" type="submit" style="margin-right:5px;background:#eeb351;color:white">
                                <i class="fab fa-whatsapp"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <hr style="color:white">
            <div class="footer__item d-lg-flex justify-content-lg-between align-items-lg-center">
                <ul id="menu-seller-footer" class="nav sub-nav footer__sub-nav">
                    <li class="nav-item">
                       <a class="nav-link text-light" aria-current="page" href="#">Mission&Vision</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link text-light" aria-current="page" href="#">About-Us</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link text-light" aria-current="page" href="ContactUs.php">Contact-Us</a>
                    </li>
                </ul>
                <p class="hidden-sm-down d-none d-lg-block text-secondary">Developed and Designed By <a href="#" class="text-light">Hubert Developer.</a></p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- --------- slick slide -------- -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    let videoBtn = document.querySelectorAll('.vid-btn');

    videoBtn.forEach(btn =>{
        btn.addEventListener('click', ()=>{
            document.querySelector('.controls .active').classList.remove('active');
            btn.classList.add('active');
            let src = btn.getAttribute('data-src');
            document.querySelector('#video-slider').src = src
        });
    });

</script>
<script>
    
    $(document).ready(function(){
        $('.slick-slider').slick({
            slidesToShow: 5, // Default number of slides
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            dots: true,
            responsive: [
                {
                    breakpoint: 1200, // Below 1200px wide
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 992, // Below 992px wide
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768, // Below 768px wide (tablet)
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 576, // Below 576px wide (mobile)
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    var sliderNav = function(manual){
        btns.forEach((btn) => {
            btn.classList.remove("active");
        });

        slides.forEach((slide) => {
            slide.classList.remove("active");
        });

        btns[manual].classList.add("active");
        slides[manual].classList.add("active");
    }
    btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            sliderNav(i);
        });
    });
    // --------------- slider images -----------
    $(document).ready(function() {
        $(".MyTextarea").summernote({
            height: 250,
            display: none
        });
        $(".MyText").summernote({
            height: 100
        });
        $(".largeText").summernote({
            height: 550
        });
        $('.dropdown-toggle').dropdown();
    });
    $(document).ready(function() {
    $('.mySelect2').select2();
    });
    $(document).ready( function () {
      $('#myTable').DataTable();
    });$(document).ready( function () {
      $('#myTable_customer').DataTable();
    });$(document).ready( function () {
      $('#myTable_categ').DataTable();
    });$(document).ready( function () {
      $('#myTable_prod').DataTable();
    });
    // =============== allow to use multiple input ===============
    
  </script>
</body>

</html>
