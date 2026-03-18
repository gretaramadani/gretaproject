<?php

get_header(); ?>
<div id="content" class="site-content">
    <main id="main" class="site-main">
        <section class="contact-hero">
            <div class="container">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you! Send us a message below.</p>
            </div>
        </section>
        <section class="contact-form-section">
            <div class="container">
                <form action="" method="post" class="contact-form">
                    <p>
                        <label for="name">Your Name:</label><br>
                        <input type="text" id="name" name="name" required>
                    </p>
                    <p>
                        <label for="email">Your Email:</label><br>
                        <input type="email" id="email" name="email" required>
                    </p>
                    <p>
                        <label for="subject">Subject:</label><br>
                        <input type="text" id="subject" name="subject" required>
                    </p>
                    <p>
                        <label for="message">Message:</label><br>
                        <textarea id="message" name="message" required></textarea>
                    </p>
                    <p>
                        <input type="submit" name="submit_contact" value="Send Message">
                    </p>
                </form>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>