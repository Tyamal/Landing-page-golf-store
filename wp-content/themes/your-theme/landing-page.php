<?php
/*
Template Name: Landing Page
*/
get_header(); ?>

<div class="landing-page">
    <div class="product-slider">
        <h2>Featured Products</h2>
        <div class="slider">
            <!-- Add your product slides here -->
            <div class="slide"><img src="path/to/product1.jpg" alt="Product 1"></div>
            <div class="slide"><img src="path/to/product2.jpg" alt="Product 2"></div>
            <div class="slide"><img src="path/to/product3.jpg" alt="Product 3"></div>
        </div>
    </div>

    <div class="contact-info">
        <h2>Contact Us</h2>
        <p>Email: support@example.com</p>
        <p>Phone: (123) 456-7890</p>
    </div>

    <div class="order-info">
        <h2>Order Information</h2>
        <p>Track your order <a href="#">here</a>.</p>
    </div>

    <div class="buttons">
        <button class="buy-button">Buy Now</button>
        <button class="post-button">Post Product</button>
    </div>

    <div class="product-gallery">
        <h2>Product Gallery</h2>
        <div class="gallery">
            <!-- Add your product images here -->
            <img src="path/to/gallery1.jpg" alt="Gallery Image 1">
            <img src="path/to/gallery2.jpg" alt="Gallery Image 2">
            <img src="path/to/gallery3.jpg" alt="Gallery Image 3">
        </div>
    </div>
</div>

<?php get_footer(); ?>