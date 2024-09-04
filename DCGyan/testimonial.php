<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profiles</title>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,400);
    @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);

    .bannerContainer {
    width: 1340px;
    display: flex;
    padding-left: 7px;
    justify-content: center;
    height: 600px;
    overflow: hidden;
    margin-left: 10px;
}

.bann1 {
  display: none;
    width: 40%;
    /* background-image: url(http://demos.thementic.com/opencart/OPC02/OPC0200079/image/cache/catalog/demo/banners/main-banner-02-1903x838.jpg); */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.bann2 {
    width: 40%;
    display: none;
    /* background-image: url(http://demos.thementic.com/opencart/OPC02/OPC0200079/image/cache/catalog/demo/banners/main-banner-03-1903x838.jpg); */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.bann3 {
  display: none;
    /* background-image: url(http://demos.thementic.com/opencart/OPC02/OPC0200079/image/cache/catalog/demo/banners/main-banner-01-1903x838.jpg); */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

#slider {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 600px;
    top: 0;
    /* z-index: -11; */
    /* position: absolute; */
}

.slide.active {
    display: flex;
}

.slide {
    display: none;
    /* position: absolute; */
    width: 90%;
    justify-content: space-around;
    align-items: center;
    height: 600px;
    left: 0px;
    top: 0px;
}

.prev {
    position: absolute;
    transform: translateX(600px) translateY(230px);
    width: 4%;
    padding: 1vmax;
    outline: none;
    font-size: 25px;
    border: none;
    background: none;
    
}

.next {
    position: absolute;
    transform: translateX(-600px) translateY(230px);
    outline: none;
    border: none;
    width: 4%;
    padding: 1vmax;
    font-size: 25px;
    background: none;
    
}


.body {
     
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    width: 100%;
  }

  .profile{
    width: 200px;
    border-radius: 50%;
    height: 110px;
  }

  .profiles-container {width: 80%;
    display: flex;
    justify-content: space-around;
  }

  figure.test {
    font-family: 'Roboto', Arial, sans-serif;
    position: relative;
    overflow: hidden;
    margin: 10px;
    min-width: 230px;
    max-width: 315px;
    width: 100%;
    color: #000000;
    text-align: center;
    font-size: 16px;
    background-color: #2C3447;
    padding: 30px;
    background-image: linear-gradient(-25deg, rgba(0, 0, 0, 0.2) 0%, rgba(255, 255, 255, 0.1) 100%);
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }

  figure.test *,
  figure.test *:before,
  figure.test *:after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.35s ease;
    transition: all 0.35s ease;
  }

  figure.test figcaption {
    width: 100%;
  }

  figure.test h2,
  figure.test h4,
  figure.test blockquote {
    margin: 0;
  }

  figure.test h2,
  figure.test h4 {
    font-weight: 300;
  }

  figure.test h2 {
    color: #ffffff;
  }

  figure.test h4 {
    color: #a6a6a6;
  }

  figure.test blockquote {
    font-size: 1em;
    padding: 45px 20px 80px 50px;
    margin-top: 30px;
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: inset -1.4px -1.4px 2px rgba(0, 0, 0, 0.3);
    text-align: left;
    position: relative;
    height: 200px;
  }

  figure.test blockquote:before {
    font-family: 'FontAwesome';
    content: "\201C";
    position: absolute;
    font-size: 70px;
    opacity: 0.25;
    font-style: normal;
    top: 0px;
    left: 20px;
  }

  figure.test .profile {
    width: 100px;
    border-radius: 50%;
    display: inline-block;
    box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.4);
    margin-bottom: 10px;
    border: solid 5px #A6A57A;
  }

  .testimonialcard {
    height: 500px;
    background-color: rgba(107, 103, 103, 0.349);
  }
  </style>
</head>
<body>
<div class="banner">
        <div class="bannerContainer">
            <div id="slider">
                <div class="slide bann1">
                    <div class="testimonialcard">
                        <figure class="snip1390 hover test">
                            <img src="images/testimonial-1.jpg" alt="profile-sample5" class="profile" />
                            <figcaption>
                            <h2 style="overflow: hidden;">Akash Kumar</h2>
                              <h4>Civil Court Clerk/Reader</h4>
                              <blockquote style="overflow: hidden;"><div style= margin-right: 14px; overflow: hidden; height: 120px;">
                              Thanks to DCGYAN, their excellent typing training prepared me for success as a Civil Court Clerk/Reader."
</div></blockquote>
                            </figcaption>


                               
                          </figure>
                    </div>
                    
                    <div class="testimonialcard">
                        <figure class="snip1390 hover test">
                            <img src="images/testimonial-2.png" alt="profile-sample5" class="profile" />
                            <figcaption>
                            <h2 style="overflow: hidden;">Chandramani Kumar</h2>
                              <h4>BSSC</h4>
                              <blockquote style="overflow: hidden;"><div style= margin-right: 14px; overflow: hidden; height: 120px;">Appreciation to DCGYAN for the outstanding BSSC exam preparation, truly a catalyst in my path to success!"</div></blockquote>
                            </figcaption>
                          </figure>
                    </div>
                    <div class="testimonialcard">
                        <figure class="snip1390 hover test">
                            <img src="images/testimonial-3.png" alt="profile-sample5" class="profile" />
                            <figcaption>
                              <h2 style="overflow: hidden;">Deep Shikha</h2>
                              <h4>Civil Court Clerk/Reader</h4>
                              <blockquote style="overflow: hidden;"><div style= margin-right: 14px; overflow: hidden; height: 120px;">Thanks to DCGYAN for practical training, shaping my readiness for the Civil Court Clerk/Reader position!"</div></blockquote>
                            </figcaption>
                          </figure>
                    </div>
                </div>
                <div class="slide bann2">
                    <div class="testimonialcard">
                        <figure class="snip1390 hover test">
                            <img src="images/testimonial-4.png" alt="profile-sample5" class="profile" />
                            <figcaption>
                            <h2 style="overflow: hidden;">Pranav Kumar</h2>
                              <h4>Civil Court Clerk/Reader</h4>
                              <blockquote style="overflow: hidden;"><div style= margin-right: 14px; overflow: hidden; height: 120px;">Gratitude to DCGYAN for the transformative training, shaping my success journey as a Civil Court Clerk/Reader.






</div> </blockquote>
                            </figcaption>
                          </figure>
                    </div><div class="testimonialcard">
                        <figure class="snip1390 hover test">
                            <img src="images/testimonial-5.png" alt="profile-sample5" class="profile" />
                            <figcaption>
                            <h2 style="overflow: hidden;">Gautam Kumar</h2>
                              <h4>Civil Court Clerk/Reader</h4>
                              <blockquote style="overflow: hidden;"><div style= margin-right: 14px; overflow: hidden; height: 120px;">Deep appreciation to DCGYAN for molding my success journey as a Civil Court Clerk/Reader through transformative training."






</div></blockquote>
                            </figcaption>
                          </figure>
                    </div><div class="testimonialcard">
                        <figure class="snip1390 hover test">
                            <img src="images/testimonial-6.png" alt="profile-sample5" class="profile" />
                            <figcaption>
                            <h2 style="overflow: hidden;">Ravi Shankar Kumar</h2>
                              <h4>SSC CGL/CHSL</h4>
                              <blockquote style="overflow: hidden;"><div style= margin-right: 14px; overflow: hidden; height: 120px;">Thanks to DCGYAN for excellent typing training. The specialized curriculum prepared me well for the SSC CGL typing test. </div></blockquote>
                            </figcaption>
                          </figure>
                    </div>
                </div>
                <div class="slide active bann3">
                    <div class="testimonialcard">
                        <figure class="snip1390 hover test">
                            <img src="images/testimonial-7.png" alt="profile-sample5" class="profile" />
                            <figcaption>
                            <h2 style="overflow: hidden;">Chandan Kumar</h2>
                              <h4>SSC CGL</h4>
                              <blockquote style="overflow: hidden;"><div style= margin-right: 14px; overflow: hidden; height: 120px;">Thanks to DCGYAN for excellent SSC CGL training, instrumental in my preparation and success in the exam!






</div></blockquote>
                            </figcaption>
                          </figure>
                    </div><div class="testimonialcard">
                        <figure class="snip1390 hover test">
                            <img src="images/testimonial-8.png" alt="profile-sample5" class="profile" />
                            <figcaption>
                            <h2 style="overflow: hidden;">Sanu Kumar</h2>
                              <h4>BSSC</h4>
                              <blockquote style="overflow: hidden;"><div style= margin-right: 14px; overflow: hidden; height: 120px;">A heartfelt thank you to DCGYAN for their outstanding BSSC exam training, playing a crucial role in my success!</div></blockquote>
                            </figcaption>
                          </figure>
                    </div><div class="testimonialcard">
                        <figure class="snip1390 hover test">
                            <img src="images/testimonial-9.png" alt="profile-sample5" class="profile" />
                            <figcaption>
                            <h2 style="overflow: hidden;">Anjani Kumari</h2>
                              <h4>SSC Stenographer</h4>
                              <blockquote style="overflow: hidden;"><div style= margin-right: 14px; overflow: hidden; height: 120px;">Extending my gratitude to DCGYAN for the exceptional training that significantly contributed to my success in the SSC Stenographer exam!</div></blockquote>
                            </figcaption>
                          </figure>
                    </div>
                </div>
            </div>
            <button class="prev">&#10095;</button>
            <button class="next">&#10094;</button>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  /* Demo purposes only */
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );

  const slides = document.querySelectorAll('.slide');
let index = 0;

function prevSlide(){
    console.log("prev2")
    slides[index].classList.remove('active');
    console.log(slides)
    index--;

    if(index < 0)
        index = slides.length -1;

    slides[index].classList.add('active');      
}

document.querySelector('.prev').addEventListener('click', e => {
    prevSlide();
});

function nextSlide(){
    console.log("next2")
    slides[index].classList.remove('active');
    console.log(slides);
    index++;

    if(index > slides.length -1)
        index = 0;

    slides[index].classList.add('active');      
}

document.querySelector('.next').addEventListener('click', e => {
    nextSlide();
});

</script>

</body>
</html>
