<?php include("includes/header.php") ?>

<section class="home">
    <div class="content">
        <h3>This House is Waiting for You</h3>
        <p>Discover your new home, a place full of potential and possibilities.</p>
        <a href="#" class="btn text-white" style="background:#c5722b">discover more</a>
    </div>
    <div class="controls">
        <span class="vid-btn active" data-src="videos/11.mp4"></span>
        <?php 
            foreach($aderts as $adert) : $id = $adert['id']; $status=$adert['status']; 
            $publishedDate = new DateTime($adert['published_date']);
            $endDate = new DateTime($adert['end_date']);
            $currentDate = new DateTime();
            if ($currentDate >= $publishedDate && $currentDate <= $endDate) {
                ?><span class="vid-btn" data-src="Admin/AdvertVideos/<?=$adert['video'] ?>"></span><?php
            }

        ?>
        <?php endforeach; ?>
    </div>
    <div class="video-container">
        <video src="videos/10.mp4" id="video-slider" loop autoplay muted></video>
    </div>
</section>

<section class="Weekly">
    <div class="container">
        <div class="events-header text-center">
            <h2>Recent Activities(weekly) | Updates & News.</h2>
            <p class="sub-text text-center">Embrace Rwanda, Let’s build a brighter future for every family.</p>
        </div>
    </div>
    <div class="row">
        <?php
            foreach($cards as $card) : $id = $card['id'];
            $date = $card['date'];
            $newDate = date("M d, Y",strtotime($date));

            $getImage = mysqli_query($con, "SELECT * FROM `card_images` WHERE card_id='$id'");
            $row = mysqli_fetch_assoc($getImage);
        ?>
        <div class="col-md-6 shadow mb-3">
            <div id="1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner" style="height:370px;">
                    <div class="carousel-item active">
                        <img src="images/1.jpg" class="d-block w-100" alt="Image 1" style="height: 100%; object-fit: cover;">
                    </div>
                    <?php foreach(json_decode($row['image']) as $image) : ?>
                        <div class="carousel-item">
                            <img src="Admin/cardImages/<?= $image ?>" class="d-block w-100" alt="Image 2" style="height: 100%; object-fit: cover;">
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#1" data-bs-slide="prev" style="background:black">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#1" data-bs-slide="next" style="background:black">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body text-center mb-3">
                <p style="text-align: justify;"><?= $card['description'] ?></p>
                <a href="view.php?id=<?= $id ?>" class="btn text-white" style="background:#c5722b">Read More</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="events-header text-center">
            <h2>Our Offered Programms.</h2>
            <p class="sub-text text-center">Embrace Rwanda, The Healthy Mums Program (HMP) has five components:</p>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3 card" style="border:2px solid #c5722b">
                <img src="images/logo.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <i class="fas fa-heartbeat" style="color:grey;font-size:43px"></i>
                    <h5 class="card-title">HNG</h5>
                    <p class="card-text">Healing the next generation<b>(Parent & Childreen).</b></p>
                    <p>
                        <ol>
                            <li>Biblical healing</li>
                            <li>Conseling healing</li>
                        </ol>
                    </p>
                </div>
            </div>
            <div class="col-md-3 mb-3 card" style="border:2px solid #c5722b">
                <img src="images/logo.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <i class="fas fa-users" style="color:grey;font-size:43px"></i>
                    <h5 class="card-title">FHN</h5>
                    <p class="card-text">Family Health & Nutrition<b>(Parent & Childreen)</b></p>
                    <p>
                        <ol>
                            <li>Home balance diet</li>
                        </ol>
                    </p>
                </div>
            </div>
            <div class="col-md-3 mb-3 card" style="border:2px solid #c5722b">
                <img src="images/logo.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <i class="fas fa-credit-card" style="color:grey;font-size:43px"></i>
                    <h5 class="card-title">PISE</h5>
                    <p class="card-text">Promotion of Initiatives for self Employment<b>(Parent)</b></p>
                    <p>
                        <ol>
                            <li>Saving & Credit</li>
                            <li>Investment & Busines</li>
                        </ol>
                    </p>
                </div>
            </div>
            <div class="col-md-3 mb-3 card" style="border:2px solid #c5722b">
                <img src="images/logo.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <i class="fas fa-graduation-cap" style="color:grey;font-size:43px"></i>
                    <h5 class="card-title">ECBF</h5>
                    <p class="card-text">Early childhood for the bright future<b>(Childreen)</b></p>
                </div>
            </div>
            <div class="col-md-12 mb-3 card" style="border:2px solid #c5722b">
                <img src="images/logo.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <i class="fas fa-globe" style="color:grey;font-size:43px"></i>
                    <h5 class="card-title">VT/HCM</h5>
                    <p class="card-text">Vocational Training<b>(Parent & Childreen)</b></p>
                    <p>
                        <ol>
                            <li>joining tvt school</li>
                            <li>promote their our comes</li>
                            <li>selling their products & services</li>
                        </ol>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="updates">
    <div class="container">
        <div class="events-header text-center">
            <h2>Upcoming Activities | Updates & News.</h2>
            <p class="sub-text text-center">Embrace Rwanda, Let’s build a brighter future for every family.</p>
        </div>
        <div class="card about" style="border:none">
            <?php
                foreach($upcomings as $upcoming) : $id = $upcoming['id'];
                $date = $upcoming['date'];
                $newDate = date("M d, Y",strtotime($date));
            ?>
            <div class="row shadow-sm mb-3" style="border:2px solid #f2f4f4;border-radius:10px">
                <div class="col-md-6 img-col">
                    <img src="Admin/upcomingImages/<?= $upcoming['image'] ?>" style="width:100%;height:300px;object-fit:cover;border-radius:20px">
                </div>
                <div class="col-md-6 text-col">
                    <div class="card-header">
                        <h3 class="text-center"><?= $upcoming['title'] ?></h3>
                    </div>
                    <p style="line-height:1.6;text-align:justify"><?= $upcoming['description'] ?></p>
                    <a href="donate" class="btn text-white" style="background:#c5722b">Participate</a>
                    <b class="float-end"><?= $newDate ?></b>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<script>
    const videoSlider = document.getElementById('video-slider');
    const videoButtons = document.querySelectorAll('.vid-btn');
    let currentVideoIndex = 0;

    function changeVideo() {
        // Update the currentVideoIndex and get the new video source
        currentVideoIndex = (currentVideoIndex + 1) % videoButtons.length;
        const newSrc = videoButtons[currentVideoIndex].getAttribute('data-src');
        
        // Change the video source and play the new video
        videoSlider.src = newSrc;
        videoSlider.play();

        // Update the active button class
        document.querySelector('.controls .active').classList.remove('active');
        videoButtons[currentVideoIndex].classList.add('active');
    }
    setInterval(changeVideo, 5000); // Change video every 5 seconds
</script>
<?php include("includes/footer.php") ?>