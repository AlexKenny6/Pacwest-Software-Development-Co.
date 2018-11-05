<?php require_once("config.php");  ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>

<!-- Top Container -->
    <section class="top-container">
        <header class="showcase top-top">
        <h1><small>Pacwest Software Development LLC</small></h1>
        <p>We love to create and design websites</p>
        <a href="blog.html" class="btn">Read More</a>
        </header>
        <?php include(TEMPLATE_FRONT . DS . "side_nav.php");  ?>
    </section> 
    <style>
        .top-top {
            background-image: url("img/coding_background.jpg");
            background-size: cover;
            background-position: center;
        }
    </style>   
    <!--Info-->
    <section class="info">
        <img src="" alt="Home Page Gif">
        <div>
            <h2>Our Values</h2>
            <h3>Mission:</h3>
            <p>We strive to develop code that works flawlessly making sure every customer is left more than satisfied with their website.</p>
            <h3>Vision:</h3>
            <p>
                We believe 
                <ul>
                    <li><i class="fas fa-code"></i> that we are here to create beautiful websites and constantly adapting to new innovations in the software industry.</li>
                    <li><i class="fas fa-code"></i> in focusing on each project with our full attention to provide the care that it deserves and having the courage to admit when we are wrong and to learn from our mistakes.</li>
                    <li><i class="fas fa-code"></i> in the company and the reputation we have built.</li>
                </ul>
            </p>
            <a href="blog.php" class="btn">Learn More at Our Blog</a>
        </div>
    </section>

    <!--Boxes-->
    <h2><big>What We Do</big></h2>
    <section class="boxes">
        <div class="box">
            <i class="fas fa-paint-brush fa-4x"></i>
            <h3>Designing</h3>
            <p>We will design your websites and iOS apps</p>
        </div>
        <div class="box">
            <i class="fas fa-cog fa-4x"></i>
            <h3>Development</h3>
            <p>We will develop and code your websites and iOS apps</p>
        </div>
        <div class="box">
            <i class="fas fa-globe fa-4x"></i>
            <h3>Marketing</h3>
            <p>We will market your website or app with SEO</p>
        </div>
        <div class="box">
            <i class="fas fa-users fa-4x"></i>
            <h3>Support</h3>
            <p>We will give you the best support and treat you like family</p>
        </div>
    </section>

<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>