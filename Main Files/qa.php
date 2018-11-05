<?php require_once("../resources/config.php");  ?>
<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>
<section class="top-container">
    <header class="showcase showcase-qa">
        <h1>Questions/Answers</h1>
        <p>
            Hello, we have some FAQ to help answer any of your quick questions you might have. 
            If your question is not listed here or you would like to receive more information, feel free to email us and we'll get back to you!
        </p>
    </header>
    <?php include(TEMPLATE_FRONT . DS . "side_nav.php");  ?>
</section>
<!--Article Boxes-->
<h2><big>Frequently Asked Questions</big></h2>

<section class="boxes boxes-qa">
    <div class="box-qa">
        <button class="accordion">How can a website or app help me out?</button>
        <div class="panel">
            <p>
                A website is used to help spread your business or topic information to an audience unreachable outside of face to face communication.
            </p>
        </div>

        <button class="accordion">How long have we been around and where we are located?</button>
        <div class="panel">
            <p>
                We were founded in December 2017 and our one year birthday will be on December 4th, 2018. 
                However, we became an LLC on April 26th, 2018. We are located in Everett, Washington and we are able to serve clients located anywhere.
                <br><br>
                As long as you have an internet connection, we will help you out!
            </p>
        </div>

        <button class="accordion">Do you just build the website or do you do other things?</button>
        <div class="panel">
            <p>
                Once we design and build the website, we will maintain it until the internet blows up or until our contact ends. We also build iOS apps too!
            </p>
        </div>

        <button class="accordion">How do you compare to companies that build a website like wix?</button>
        <div class="panel">
            <p>
                Companies that build websites like wix are great for anyone starting out and wanting a super simple website. 
                Yet, once you begin to add more content and make it more customized, you will need to hire a designer/developer to create that customized and unique feeling for your website.
            </p>
        </div>

        <button class="accordion">Why would I go with an up and coming company like you, when I can work with an established company as aforementioned?</button>
        <div class="panel">
            <p>
                By working with us, we will treat you like family and keep in communication. 
                Besides from website and iOS app development, we are always there to help in any situation whether it is answering a question that is tech related or not. 
                Bigger companies that have a large number of clients may set aside a minimal amount of time to help their clients. 
            </p>
        </div>

        <button class="accordion">Can you custom design a website?</button>
        <div class="panel">
            <p>
                Yes, we can custom design a website. After the discussion/collaboration phase where we get on the same page, will be begin to write custom Cascading Style Sheet or CSS.
            </p>
        </div>

        <button class="accordion">What if I am a company that doesn't sell items, but still needs a website. Can you build one for me?</button>
        <div class="panel">
            <p>
                We will build websites for clients who may not have an online store. 
                If you are looking for a resume site to display your proudest moments in life, we will happily build that for you.
            </p>
        </div>

        <button class="accordion">I have a large website; is your team large enough to work with me?</button>
        <div class="panel">
            <p>Yes, our team is large enough to work on and edit a larger than normal website.</p>
        </div>

        <button class="accordion">My company isn't based in the Pacific Northwest, but I am an online shopping focused company. How does your sales tax rates accommodate that?</button>
        <div class="panel">
            <p>
                We use PayPal to process all transactions and we send the product information to them. 
                They will handle the money transaction and credit card information is safely managed on their servers.
                <br><br>
                Since the transaction is being made in your city, we will include that city’s sales tax. 
                On PayPal, we can edit the individual sales tax percentage to comply with state and city tax code.
            </p>
        </div>
    </div>
</section>
<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
