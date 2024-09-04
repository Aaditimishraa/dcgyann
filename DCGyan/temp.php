<?php
include 'admin/config7.php';
$tbl_name = "dc_certificate"; 

// Fetch testimonials from the database
$result = mysqli_query($con, "SELECT * FROM $tbl_name WHERE hide='0'");

// Check if the query was successful
if ($result) {
    $testimonials = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    // Handle the error (you might want to log it or show a specific message)
    echo "Error: " . mysqli_error($con);
    // You might want to exit the script here if the query fails
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial Slider</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #FFFFFF;
            overflow: hidden;
        }

        .swiper-container {
            position: relative;
            width: 100%;
            padding: 20px;
            margin-left: 100px;
            margin-right: 100px;
        }

        .swiper-slide {
            width: 300px;
            height: 450px;
            background-color: #E9ECEF;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin: 30px;
        }

        .testimonial-image {
            border-radius: 50%;
            margin-bottom: 15px;
            height: 100px;
            overflow: hidden;
        }

        .testimonial-text {
            font-size: 20px;
            color: #555;
            margin-bottom: 15px;
            text-align: center;
            padding: 5%;
            overflow: hidden;
        }

        .testimonial-author {
            font-weight: bold;
            color: #333;
        }

        .testimonial-course {
            color: #777;
        }

        .swiper-button-next,
        .swiper-button-prev {
            position: absolute;
            top: 50%;
            width: 30px;
            height: 30px;
            color: #fff;
            background-color: #FFFFFF;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            transform: translateY(-50%);
        }

        .swiper-button-next {
            right: 5%;
            transform: translateX(50%) translateY(-50%);
        }

        .swiper-button-prev {
            left: 5%;
            transform: translateX(-50%) translateY(-50%);
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            display: none;
        }
    </style>
</head>

<body>

    <div class="swiper-container">
        <div class="swiper-wrapper" id="testimonialContainer">
            <!-- Testimonial Cards will be dynamically added here -->
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next">
            <img src="images/next-arrow.png" alt="Next">
        </div>
        <div class="swiper-button-prev">
            <img src="images/previous-arrow.png" alt="Previous">
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Testimonials data fetched from PHP
            const testimonials = <?php echo json_encode($testimonials); ?>;

            const testimonialContainer = document.getElementById("testimonialContainer");
            const fragment = document.createDocumentFragment();

            testimonials.forEach(testimonial => {
                if (testimonial['review']) {
                    const truncatedText = testimonial['review'].slice(0, 160);

                    const div = document.createElement("div");
                    div.className = "swiper-slide";
                    div.innerHTML = `
                        <img src="https://www.dcgyan.in/admin/images/pdf/${testimonial['pic']}" alt="Candidate Image" class="testimonial-image" width="100">
                        <div class="testimonial-overlay"></div>
                        <div class="testimonial-content">
                            <p class="testimonial-author">${testimonial['name']}</p>
                            <p class="testimonial-text">${truncatedText}</p>
                        </div>
                    `;

                    fragment.appendChild(div);
                }
            });

            testimonialContainer.appendChild(fragment);

            // Initialize Swiper
            const swiper = new Swiper('.swiper-container', {
                slidesPerView: 'auto',
                spaceBetween: 10,
                freeMode: true,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>

</body>

</html>
