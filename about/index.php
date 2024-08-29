<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | PLM Solutions</title>
    <link rel="stylesheet" href="/assets/css/style.css" />
    <style>
        #about{
            color:#333333;
        }
        #abou:hover{
            color:white;
        }
        /* hero section  */
       
        .hero-section{
            height: 350px;
    background: center center no-repeat fixed;
    
    background-size: cover;
    /* z-index: -3; */
    /* text-align: center; */
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url("/assets/images/services_images/ship-agency.jpg");
}
.hero-section .overlay{
    position: absolute;
    width: 100%;
    height: 350px;
    background-color: black;
    opacity: 0.7;
    z-index: 2;
}
.hero-section h1{
    position: relative;
    z-index: 9;
    color: white;
    font-size: 35px;
    width: 100%;
    padding: 0 10%;
    letter-spacing: 1px;
}

/* content section  */
.content-section{
    display:flex;
    justify-content:center;
    align-items:center;
    color:#453E3E;
    padding:70px 0px;
    line-height:20px;
}
.content-section div{
    width:90%;
    max-width:1200px;
    
}
.content-section div a{
    color:var(--main-color);
}
    </style>
</head>
<body>
    
    <?php include("../assets/components/header.php") ?>

    <div class="hero-section">
        <div class="overlay"></div>
        <h1>ABOUT <strong>US</strong></h1>
    </div>

    <!-- content section  -->

    <div class="content-section">
        <div>
    <p><strong>PLM Solutions Private Limited is a trusted partner for all your logistics and transportation needs. With over 12 years of experience & industry expertise with a commitment to excellence, we are dedicated to delivering reliable and efficient logistics solutions that drive your business forward.</strong></p>
    <br>
    <br>
    <p>PLM Solutions is a leading Freight and logistics company specializing in imports and export of goods from / to the UAE worldwide, with a office South Africa and over 150 agent office in other neighboring countries. 
<br>
With having offices in Pakistan, USA, and UAE, we are integrated in Air freight, Sea freight, Land Transport, Customs brokerage, Warehousing & all Logistics solutions round the world. <br>
We are semi established with extensive network of over 220 countries and territories around the globe.Our team of experienced professionals is passionate about logistics and committed to providing top-notch service. We leverage advanced technologies and industry best practices to optimize your transportation, streamline operations, and enhance overall efficiency. With our extensive network of partners and strategic alliances, we offer global reach, ensuring seamless coordination of your imports, exports, and freight forwarding needs.</p>
<br>
<p>We look forward to your inquiry.</p>
<br>
<p>Feel free to drop an email: <a href="mailto:info@plm-pk.com">info@plm-pk.com</a> or contact us at <a href="tel:+923154069455">+92 000 0000000</a></p>
<br>
<br>
<strong>From Us To The World!</strong>
</div>
</div>


    <?php include("../assets/components/footer.php") ?>

    <script
      src="https://kit.fontawesome.com/32278cd1a4.js"
      crossorigin="anonymous"
    ></script>
    <script src="/assets/js/script.js"></script>
</body>
</html>