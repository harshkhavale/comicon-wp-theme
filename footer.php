<?php
/**
 * @package Aquila
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer with Font Awesome and Bootstrap</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUa59J0sXTpPxot8vKfyJZOM7hDT+jp0D2ewryi30uD4Tx0iQQvP1pA2wujS" crossorigin="anonymous">
   
    <?php wp_head(); ?>
</head>
<body>
    <footer class="text-center text-lg-start">
            <div class="footer p-4">
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <p class="subtext text-uppercase">Follow Us</p>
                    <div class="d-flex justify-content-center justify-content-lg-start social-icons">
                        <a href="https://www.facebook.com" target="_blank" class="fab fa-facebook-f mx-2"></a>
                        <a href="https://www.twitter.com" target="_blank" class="fab fa-twitter mx-2"></a>
                        <a href="https://www.instagram.com" target="_blank" class="fab fa-instagram mx-2"></a>
                        <a href="https://www.linkedin.com" target="_blank" class="fab fa-linkedin-in mx-2"></a>
                    </div>
                </div>
                <!-- Useful Links -->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <p class="subtext text-uppercase">Useful Links</p>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <!-- Contact Info -->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <p class="subtext text-uppercase">Contact Us</p>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Main Street, Anytown, USA</p>
                    <p><i class="fas fa-phone-alt"></i> (123) 456-7890</p>
                    <p><i class="fas fa-envelope"></i> info@example.com</p>
                </div>
            </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);font-weight:bold">
            © 2024 Comicon. All Rights Reserved.
        </div>
        <?php wp_footer(); ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
