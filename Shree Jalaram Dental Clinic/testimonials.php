<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.PNG" />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Testimonials | Shree Jalaram Dental Clinic</title>
</head>
<body>
    <!-- Navigation Bar Start -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="assets/img/logo.PNG" alt="logo" width="220px"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown" style="max-width: 200px;">
                        <a style="position: relative;padding-right: 50px;" class="nav-link" href="about.html">About</a>
                        <span class="dropdown-toggle" data-bs-toggle="dropdown"></span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" style="max-width: 200px;">
                        <a class="nav-link" href="service.html" style="position: relative;padding-right: 50px;">Service</a>
                        <span class="dropdown-toggle" data-bs-toggle="dropdown"></span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="implant.html">Implant</a></li>
                            <li><a class="dropdown-item" href="rct.html">RCT</a></li>
                            <li><a class="dropdown-item" href="teeth-whitening.html">Teeth Whitening</a></li>
                            <li><a class="dropdown-item" href="diagnosis.html">Diagnosis</a></li>
                            <li><a class="dropdown-item" href="crown-and-bridge.html">Crown & Bridge</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="testimonials.php">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation Bar End -->
    <!-- Welcome Page Start -->
    <div class="s_welcome_page">
        <h1 data-aos="flip-up">TESTIMONIALS</h1>
    </div>
    <!-- Welcome Page End -->
    <!-- Testimonials Page Start -->
    <div class="container t_content">
        
    <?php
$server = "localhost";
$username = "root";
$password="Harshil#2@9723032911";
$con = mysqli_connect($server , $username , $password);
$sql = "SELECT * FROM `shreejalaramdentalclinic`.`feedback_db`";
$query = mysqli_query($con , $sql);
while($res = mysqli_fetch_array($query)){
    if($res['sr_no']%2 !=0){
    ?>
    <div class="row">
        <div class="col-md-6">
            <div class="t" style="position: relative">
                <p> <?php echo $res['feedback']; ?> </p>
                <h1 style="position: absolute;bottom: 20px;right: 20px;"> <?php echo $res['name']; ?> </h1>
            </div>
        </div>
    <?php
    }
    else{
        ?>
        <div class="col-md-6">
        <div class="t" style="position: relative">
                <p> <?php echo $res['feedback']; ?> </p>
                <h1 style="position: absolute;bottom: 20px;right: 20px;"> <?php echo $res['name']; ?> </h1>
            </div>
        </div>
    </div>
        <?php
    }
}
?>
        <div class="row">
            <div class="col-12">
                <h1>Give your Feedback</h1>
                <form method="POST" action="t_form.php">
                    <div class="form-group">
                        <label for="name">Name (required)</label>
                        <input type="text" name="name" placeholder="Enter your name" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="message">Message (required)</label>
                        <input type="text" name="message" placeholder="Enter your message" required class="form-control" />
                    </div>
                    <input type="submit" class="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <!-- Testimonials Page End -->
    <!-- Footer Start -->
    <footer>
        <div class="info">
           <div class="box" id="b0">
               <img src="assets/img/logo.PNG" width="100%">
               <p>One of Ahmedabad's best dental surgeons is Dr. Nivya Chudasama A well-trained and qualified cosmetic and implant dental surgeon provides healthy and high quality standards of affordable dental treatment.</p>
           </div>
           <div class="box" id="b1">
               <h1>Quick Links</h1>
               <ul>
                   <li><a href="index.html">Home</a></li>
                   <li><a href="about.html">About</a></li>
                   <li><a href="service.html">Service</a></li>
                   <li><a href="testimonials.php">Testimonials</a></li>
                   <li><a href="contact.html">Contact</a></li>
               </ul>
           </div>
           <div class="box" id="b2">
               <h1>Services</h1>
               <ul>
                   <li><a href="implant.html">Implant</a></li>
                   <li><a href="rct.html">RCT</a></li>
                   <li><a href="diagnosis.html">Diagnosis</a></li>
                   <a href="service.html"><button>View All</button></a>
               </ul>
           </div>
           <div class="box" id="b3">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.0320888120855!2d72.61573981447087!3d23.059285120742597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e87593d072357%3A0xf8b06e7eb15e5633!2sShree%20Jalaram%20Dental%20Clinic!5e0!3m2!1sen!2sin!4v1612752086108!5m2!1sen!2sin" class="map" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           </div>
       </div>
       <div class="f_cp">
           <h3>Copyright &copy; <span id="year"></span>. All Rights Reserved</h3>
           <h3>Design & Developed by <b><i>Harshil Chudasama</i></b></h3>
       </div>
   </footer>
   <!-- Footer End -->

   <!-- JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


   <script>
       AOS.init();
       let year = new Date().getFullYear();
       document.getElementById("year").innerHTML = year;
   </script>
</body>
</html>