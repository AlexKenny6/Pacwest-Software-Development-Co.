<?php require_once("../resources/config.php");  ?>
<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>
<section class="top-container">
    <header class="showcase showcase-services">
        <h1>How We Can Help You</h1>
        <p>We offer many services to help you build the project you want. We will help you from the initial stages all the way into post launch.</p>
    </header>
    <?php include(TEMPLATE_FRONT . DS . "side_nav.php");  ?>
</section>
<!--Boxes-->
<h2><big>Our Services</big></h2>
<section class="boxes boxes-services">
    <a href="web-dev.php">
        <div class="box">
            <i class="fas fa-desktop fa-4x"></i>
            <h3>Web Development</h3>
            <p><i class="fas fa-check"></i> We will do both front end and back end web development!</p>
            <p><i class="fas fa-check"></i> Have an idea about a website? Let's visualize it with Adobe Illustrator and XD!</p>
        </div>
    </a>
    <a href="ios-dev.php">
        <div class="box">
            <i class="fas fa-mobile-alt fa-4x"></i>
            <h3>iOS Development</h3>
            <p><i class="fas fa-check"></i> We will start from the drawing board with Adobe XD and Pen/Paper!</p>
            <p><i class="fas fa-check"></i> Next, we'll begin by coding away in XCode!</p>
        </div>
    </a>
    <a href="hosting.php">
        <div class="box">
            <i class="fas fa-home fa-4x"></i>
            <h3>Hosting/Domain</h3>
            <p><i class="fas fa-check"></i> We will host your website on our secure server with AWS!</p>
            <p><i class="fas fa-check"></i> We will get your domain up and running without a hitch!</p>
        </div>
    </a>
    <a href="seo-ga.php">
        <div class="box">
            <i class="fas fa-chart-line fa-4x"></i>
            <h3>SEO/Google Analytics</h3>
            <p><i class="fas fa-check"></i> We will take the steps to get your website ranked on Google Search!</p>
            <p><i class="fas fa-check"></i> Want to know how popular your site is? You'll know by having Google Analytics on your site.</p>
        </div>
    </a>
</section>
<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>