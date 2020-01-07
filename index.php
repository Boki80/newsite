<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400&display=swap" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" />
    <title>Bojan Dev - Full Stack Developer</title>
</head>
<body>
    <header>
        <div class="content">
            <h1>Bojan <span class="color1 h1">Dev</span></h1>
            <i class="fab fa-2x fa-instagram"></i>
            <i class="fab fa-2x fa-wordpress-simple"></i>
            <i class="far fa-2x fa-envelope"></i>
            <p>The man behind Bojan Dev is Bojan, 23 years old Full Stack Developer, Software engineering Student and Software Quality Engineer at SKIDATA AG and Digital Elektronik GmbH. Most interested in PHP, MySQL, CSS, Sass, Bootstrap, WordPress. Projects that he usually works on are custom made Content Management Systems demanded with specific requirements.</p>
        </div>
    </header>
    
    <section class="cta">
        <div class="content">
            <p>Are you looking for a new design for your Website, or you need a complete Website developed? Maybe some pieces of advice on your existing or brand-new project? Feel free to contact me!</p>
            <a href="#">Contact me</a>
        </div>
    </section>

    <section class="recent">
        <h2>Check out some of my recent work</h2>
        <div class="projects">
            <a href="#"><img src="https://via.placeholder.com/300"></a>
            <a href="#"><img src="https://via.placeholder.com/300"></a>
            <a href="#"><img src="https://via.placeholder.com/300"></a>
        </div>
    </section>

    <section class="things">
        <div class="content">
            <h2>Things I do</h2>
            <p>I design perfect layouts for the website, blog, CMS, etc. My designs are clean, simple and user-friendly. Clean typography, right contrast, and soft, dimmed colors are my priorities.</p>
            <p>I develop websites and CMS for various usages. Everything I build is clean, responsive, and functional.</p>
            <p>I consult people giving them a perfect solution to fulfill their requirements. Often you have more resources available than you need and vice versa.</p>
        </div>
    </section>

    <section class="contact">
        <div class="content">
            <h2>Feel free to contact me</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="text" name="name" id="name" placeholder="Name">
                <input type="text" name="mail" id="mail" placeholder="E-mail">
                <textarea name="msg" id="msg" placeholder="Message"></textarea>
            </form>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/8750b2dd06.js" crossorigin="anonymous"></script>
</body>
</html>