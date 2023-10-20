
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require '../vendor/autoload.php';


if(isset($_POST["sendEmail"])){
$message = $_POST['senderMessage'];
$replyTo = $_POST['replyTo'];
$senderSubject = $_POST['senderSubject'];
$senderName = $_POST['senderName'];

  $mail = new PHPMailer(true);   
  // Passing `true` enables exceptions
try {
//Server settings
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ojtteam04@gmail.com';     // Your Email/ Server Email
$mail->Password = 'sgkycqwaincxncrh';                     // Your Password
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);                         
$mail->SMTPSecure = 'ssl';                           
$mail->Port = 465;                                   

//Send Email
//eto ang mag front  notificationsys01@gmail.com

//Recipients
$mail->addAddress('ojtteam04@gmail.com');              
$mail->addReplyTo($replyTo);

//Attachment

// if(!empty($filename)){
//     $mail->addAttachment($location, $filename); 
// }

//Content
$mail->isHTML(true);                                  
$mail->Subject = $senderSubject;
$mail->Body    = $senderName .'<br>'.$message;
$mail->send();
$_SESSION['message'] = 'Message has been sent';
// echo $_SESSION['message'];
echo '<script>alert("Message has been sent")</script>';
// header("location: form.php");
} catch (Exception $e) {
$_SESSION['message'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
echo '<script>alert("Message could not be sent. Mailer Error")</script>';


}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N5PFTTLRPF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-N5PFTTLRPF');
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elecsys</title>
    <link rel="shortcut icon" href="../resources/img/Elecsys Images/elecsys-site-logo-1.png">
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" /> -->
    <link rel="stylesheet" href="../fontawesome-free-6.2.0-web/css/all.min.css">
  
     <!-- tailwind play cdn -->
    <script src="https://cdn.tailwindcss.com"></script>

     <!-- from flowbite cdn -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    
    <script src="../node_modules/tw-elements/dist/js/index.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- browser logo -->
    <link rel="shortcut icon" href="../resources/img/logo.png">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../node_modules/aos/dist/aos.css" />
    <script src="../node_modules/aos/src/js/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.2.0/zepto.min.js"></script>
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollToPlugin.min.js"></script>
    <script src="../node_modules/tw-elements/dist/js/index.min.js"></script>

    <!-- back on top button css -->

<style>
 @keyframes dissolve {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }

  .dissolve-animation {
    animation: dissolve 1s forwards;
    transition: background-image 1s ease-in-out;
  }
#myBtn {
      opacity: 0; /* Hidden by default */
      position: fixed; /* Fixed/sticky position */
      bottom: 50px; /* Place the button at the bottom of the page */
      right: 30px; /* Place the button 30px from the right */
      z-index: 99; /* Make sure it does not overlap */
      border: none; /* Remove borders */
      outline: none; /* Remove outline */ 
      color: white; /* Text color */
      cursor: pointer; /* Add a mouse pointer on hover */
      padding: 15px; /* Some padding */
      border-radius: 50%; /* Rounded corners */
      font-size: 18px; /* Increase font size */
      transition: opacity 3s ease-out;
    }
    
    #myBtn:hover {
         background-color: #555; /* Add a dark-grey background on hover */
    }
    @keyframes slide-up {
  from {
    transform: translateY(100%);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

.animate-slide-up {
  animation: slide-up 0.5s ease-out;
}
.parent {
    display: flex;
    flex-direction: column;
  }

  .child {
    order: -1; /* Default order */
  }

  .image-container {
            width: 100%;
            height: 400px;
            background-size: cover;
            background-position: center;
            border-radius: 0.5rem;
        }

        #thumbnailContainer {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1rem;
        }

        .thumbnail {
            width: 100%;
            height: 100px;
            background-size: cover;
            background-position: center;
            border-radius: 0.5rem;
            cursor: pointer;
        }

</style>
    











    <!-- darkmode -->
    <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>



</head>
<body class="static  bg-white dark:bg-white"  >

<!-- button go to top -->

<a onclick="topFunction()" id="myBtn" class="bg-blue-600"  title="Go to top"><svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75L12 3m0 0l3.75 3.75M12 3v18" />
</svg></a> 





    <!-- nav -->
    <?php require_once 'megamenu.php';?>
    <script>
      var activepage = document.getElementById("activeNav");
activepage.classList.add("border-b-4");
activepage.classList.add("border-cyan-500");
activepage.classList.add("text-cyan-500");





    </script>


<!-- main -->







 <!--banner section start -->
 <!-- Container for demo purpose -->
<div >
<div class="h-screen">
<!-- Section: Design Block -->
<div class="relative overflow-hidden  h-4/5 lg:h-full">
<div class="relative bg-gray-900 h-full"> 
<div class="px-0 lg:px-0 bg-gradient-to-r from-sky-950 to-transparent via-gray-900 h-full">
    <!-- <div id="slideshow" class="absolute inset-0 bg-cover bg-no-repeat h-full"></div> -->
<div class="relative pt-20 pb-4 isolate w-full p-4 lg:px-8 bg-gradient-to-r from-sky-950 from-10% to-transparent to-90% h-full"  style="background-image: url('../resources/img/Wolrd Map1.png'); background-position: center center;background-repeat: no-repeat;background-size: cover;">


<!--    
    <section class=" text-gray-600 body-font relative h-full w-full">
  <div class="absolute inset-0 bg-gray-300">
    <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Elecsys Mfg. Corp, Lot 1B, Block 6, Phase II PEZA, Rosario, 4106 Cavite&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style=""></iframe>
  </div>
  
</section> -->
 
  </div>
</div>
  </div>


</div>

<div class="container px-0 sm:px-6 mx-auto" id="contact">
<div class="container my-0 sm:my-16  px-0 sm:px-6 mx-auto">

  <!-- Section: Design Block -->
  <section id="emailform" class="mb-8 text-gray-800">
    <div class="flex justify-center">
      <div class="text-center lg:max-w-3xl md:max-w-xl">
        <h2 class="text-4xl font-bold mb-12 px-6">Contact us</h2>
      </div>
    </div>

    <div class="flex justify-center w-full">
      <div class="hidden grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6">
        <form action="main.php" method="POST">
          <div class="form-group mb-6">
            <input type="text" name="senderSubject" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
              placeholder="Subject">
          </div>
          <div class="form-group mb-6">
            <input type="text" name="senderName" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
              placeholder="Name">
          </div>
          <div class="form-group mb-6">
            <input type="email" name="replyTo" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
              placeholder="Your email address">
          </div>
          <div class="form-group mb-6">
            <textarea name="senderMessage" class="
            form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
          " id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
          </div>

          <button type="submit" name="sendEmail" style="background-color: #0f142a" class="
          w-full
          px-6
          py-2.5
          
          text-blue-500
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md

          ease-in-out">Send</button>
        </form>
      </div>

      <div class="grow-0 shrink-0 basis-auto w-full ">
        <div class="grid grid-col-1 sm:grid-cols-2 lg:grid-cols-3">
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full  px-3 lg:px-6">
            <div class="flex items-start">
              <div class="shrink-0">
                <div style="background-color: #0f142a"
                  class="p-4 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                  <a href="#" class="text-white hover:text-gray-200 dark:hover:text-white">
                    <i class="fa-solid fa-location-dot fa-lg"></i>
                  </a>
                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Location</p>
                <p class="text-gray-500">Lot 1B Block 6 Phase II, PEZA Rosario, Cavite, Philippines 4106</p>

              </div>
            </div>
          </div>
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full  px-3 lg:px-6">
            <div class="flex items-start">
              <div class="shrink-0">
                <div style="background-color: #0f142a"
                  class="p-4  rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                  <a href="#" class="text-white hover:text-gray-200 dark:hover:text-white">
                    <i class="fa-solid fa-envelope fa-lg"></i>
                  </a>

                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Email</p>

                <p class="text-gray-500">sales@elecsysmfg.com</p>
              </div>
            </div>
          </div>
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full  px-3 lg:px-6">
            <div class="flex align-start">
              <div class="shrink-0">
                <div style="background-color: #0f142a"
                  class="p-4  rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                  <a href="#" class="text-white hover:text-gray-200 dark:hover:text-white">
                    <i class="fa-solid fa-phone fa-lg"></i>
                  </a>

                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Telephone</p>
                <p class="text-gray-500">+63 (046) 458 1703</p>
                <p class="text-gray-500">+63 (046) 437 7697</p>
                <p class="text-gray-500">+63 (046) 437 7698</p>


              </div>
            </div>
          </div>
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full  px-3 lg:px-6">
            <div class="flex align-start">
              <div class="shrink-0">
                <div style="background-color: #0f142a"
                  class="p-4  rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                  <a  href="https://www.messenger.com/t/100028355195877" target="_blank"  class="text-white hover:text-gray-200 dark:hover:text-white">
                    <i class="fa-brands fa-facebook fa-lg"></i>
                  </a>

                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Facebook</p>
                <a  href="https://www.messenger.com/t/100028355195877" target="_blank"  class="text-gray-500">Elecsys Manufacturing Corporation</a>

              </div>
            </div>
          </div>
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full  px-3 lg:px-6">
            <div class="flex items-start">
              <div class="shrink-0">
                <div style="background-color: #0f142a"
                  class="p-4 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                  <a href="#" class="text-white hover:text-gray-200 dark:hover:text-white">
                    <i class="fa-brands fa-skype fa-lg"></i>
                  </a>
                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Skype</p>
                <p class="text-gray-500">Lot 1B Block 6 Phase II, PEZA Rosario, Cavite, Philippines 4106</p>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


  </section>

<!-- Section: Design Block -->
<section id="emailform" class="mb-8 text-gray-800">
    <div class="flex justify-center">
      <div class="text-center lg:max-w-3xl md:max-w-xl">
        <h2 class="text-4xl font-bold mb-12 px-6">International Sites</h2>
      </div>
    </div>
    <div class="lg:flex justify-left hidden ">
      <div class="text-center lg:max-w-3xl md:max-w-xl">
        <h2 class="text-3xl font-bold mb-12 px-6">Australia</h2>
      </div>
    </div>
    <div class="flex flex-wrap">
      <div class="grow-0 shrink-0 basis-auto  mb-4 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6">
        
      <!-- <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Elecsys Mfg. Corp, Lot 1B, Block 6, Phase II PEZA, Rosario, 4106 Cavite&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style=""></iframe> -->
        <!-- <iframe width="100%" height="100%" class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=993&amp;height=400&amp;hl=en&amp;q=Repco Hoxton Park&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> -->
        
          <iframe class="gmap_iframe" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Suite 9, 138-140, Elizabeth Drive Liverpool N.S.W. 2170, Australia&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>





      </div>
      <div class="lg:hidden justify-left flex ">
      <div class="text-center lg:max-w-3xl md:max-w-xl">
        <h2 class="text-3xl font-bold mb-12 px-6">Australia</h2>
      </div>
    </div>
      <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
        <div class="flex flex-wrap">
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex items-start">
              <div class="shrink-0">
                <div style="background-color: #0f142a"
                  class="p-4 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                  <a href="#" class="text-white hover:text-gray-200 dark:hover:text-white">
                    <i class="fa-solid fa-location-dot fa-lg"></i>
                  </a>
                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Location</p>
                <p class="text-gray-500">Suite 9, 138-140, Elizabeth Drive Liverpool N.S.W. 2170, Australia</p>

              </div>
            </div>
          </div>
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex items-start">
              <div class="shrink-0">
                <div style="background-color: #0f142a"
                  class="p-4  rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                  <a href="#" class="text-white hover:text-gray-200 dark:hover:text-white">
                    <i class="fa-solid fa-envelope fa-lg"></i>
                  </a>

                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Email</p>

                <p class="text-gray-500">sales@elecsysmfg.com</p>
              </div>
            </div>
          </div>
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex align-start">
              <div class="shrink-0">
                <div style="background-color: #0f142a"
                  class="p-4  rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                  <a href="#" class="text-white hover:text-gray-200 dark:hover:text-white">
                    <i class="fa-solid fa-phone fa-lg"></i>
                  </a>

                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Telephone</p>
                <p class="text-gray-500">1 300 412 270</p>


              </div>
            </div>
          </div>
          
          

        </div>
      </div>
    </div>
    <br>
    <br>
    <br>

    <div class="hidden lg:flex justify-left">
      <div class="text-center lg:max-w-3xl md:max-w-xl">
        <h2 class="text-2xl font-bold mb-12 px-6">United States of America</h2>
      </div>
    </div>
    <div class="flex flex-wrap">
      <div class="grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6">
        

        
          <iframe width="100%" height="100%" class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=993&amp;height=400&amp;hl=en&amp;q=5424 Sunol Blvd 10 243 Pleasanton, CA 94566 USA&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
         




      </div>
      <div class="flex lg:hidden justify-left">
      <div class="text-center lg:max-w-3xl md:max-w-xl">
        <h2 class="text-2xl font-bold mb-12 px-6">United States of America</h2>
      </div>
    </div>
      <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
        <div class="flex flex-wrap">
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex items-start">
              <div class="shrink-0">
                <div style="background-color: #0f142a"
                  class="p-4 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                  <a href="#" class="text-white hover:text-gray-200 dark:hover:text-white">
                    <i class="fa-solid fa-location-dot fa-lg"></i>
                  </a>
                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Location</p>
                <p class="text-gray-500">5424 Sunol Blvd 10 243 Pleasanton, CA 94566 USA</p>

              </div>
            </div>
          </div>
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex items-start">
              <div class="shrink-0">
                <div style="background-color: #0f142a"
                  class="p-4  rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                  <a href="#" class="text-white hover:text-gray-200 dark:hover:text-white">
                    <i class="fa-solid fa-envelope fa-lg"></i>
                  </a>

                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Email</p>

                <p class="text-gray-500">sales@elecsysmfg.com</p>
              </div>
            </div>
          </div>
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex align-start">
              <div class="shrink-0">
                <div style="background-color: #0f142a"
                  class="p-4  rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                  <a href="#" class="text-white hover:text-gray-200 dark:hover:text-white">
                    <i class="fa-solid fa-phone fa-lg"></i>
                  </a>

                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Telephone (Toll Free)</p>
                <p class="text-gray-500">1-866-8993532</p>


              </div>
            </div>
          </div>
          
          

        </div>
      </div>
        </div>
        <br>
    <br>
    <br>
        <div class="flex flex-wrap">
      <div class="grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6">
        

      <iframe class="gmap_iframe" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=14019 S GESSNER, STE D MISSOURI CITY, TX 77489&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
          <!-- <iframe width="100%" height="100%" class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=993&amp;height=400&amp;hl=en&amp;q=5424 Sunol Blvd 10 243 Pleasanton, CA 94566 USA&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> -->
<!--          
<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=14019 S GESSNER, STE D MISSOURI CITY, TX 77489&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections NYT</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
 -->


      </div>
      
      <!-- <div class="flex lg:hidden justify-left">
      <div class="text-center lg:max-w-3xl md:max-w-xl">
        <h2 class="text-2xl font-bold mb-12 px-6">United States of America</h2>
      </div>
    </div> -->
      <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
        <div class="flex flex-wrap">
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex items-start">
              <div class="shrink-0">
                <div style="background-color: #0f142a"
                  class="p-4 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                  <a href="#" class="text-white hover:text-gray-200 dark:hover:text-white">
                    <i class="fa-solid fa-location-dot fa-lg"></i>
                  </a>
                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Location</p>
                <p class="text-gray-500">5424 Sunol Blvd 10 243 Pleasanton, CA 94566 USA</p>

              </div>
            </div>
          </div>
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex items-start">
              <div class="shrink-0">
                <div style="background-color: #0f142a"
                  class="p-4  rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                  <a href="#" class="text-white hover:text-gray-200 dark:hover:text-white">
                    <i class="fa-solid fa-envelope fa-lg"></i>
                  </a>

                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Email</p>

                <p class="text-gray-500">sales@elecsysmfg.com</p>
              </div>
            </div>
          </div>
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex align-start">
              <div class="shrink-0">
                <div style="background-color: #0f142a"
                  class="p-4  rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                  <a href="#" class="text-white hover:text-gray-200 dark:hover:text-white">
                    <i class="fa-solid fa-phone fa-lg"></i>
                  </a>

                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Telephone (Toll Free)</p>
                <p class="text-gray-500">1-866-8993532</p>


              </div>
            </div>
          </div>
          
          

        </div>
      </div>
        </div>
    </section>

  
</div>

</div>



  
<!-- Container -->


<footer style="background-color: #0f142a"class="p-4 ">
    <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="../resources/img/logo/elecsys-logo-colored.png" class="h-8 mr-3" alt="Elecsys Logo" />
                <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
            </a>
        </div>
        
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <div class="flex items-center justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">2023 <a href="https://flowbite.com/" class="hover:underline">Elecsys</a>
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a  href="https://www.messenger.com/t/100028355195877" target="_blank"  class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Facebook page</span>
            </a>
           
           
        </div>
    </div>
</footer>

</div>


</div>
<!-- end of about us -->









<!-- latest -->




<!-- end of main -->
<script>
          const mainImageContainer = document.getElementById('mainImageContainer');
        const thumbnails = document.querySelectorAll('.thumbnail');

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                mainImageContainer.style.backgroundImage = thumbnail.style.backgroundImage;
            });
        });
    </script>
<script>
  const slideshow = document.getElementById('slideshow');
  const images = ['../resources/img/Background Images/home_no_1_min.jpg', '../resources/img/Background Images/home_no_2_min.jpg', '../resources/img/Background Images/home_no_3_min.jpg', '../resources/img/Background Images/home_no_4_min.jpg', '../resources/img/Background Images/home_no_5_min.jpg', '../resources/img/Background Images/home_no_6_min.jpg']; // Add your image URLs here
  let currentImageIndex = 0;
  
  function changeBackgroundImage() {
    const nextImageIndex = (currentImageIndex + 1) % images.length;
    const nextImage = `url('${images[nextImageIndex]}')`;

    slideshow.style.backgroundImage = nextImage; // Set the new image
    slideshow.classList.add('dissolve-animation');

    setTimeout(() => {
      // slideshow.classList.remove('dissolve-animation');
      currentImageIndex = nextImageIndex;
    }, 2000); // Adjust this duration to match the animation duration
  }

  // Run the transition immediately on page load
  changeBackgroundImage();

  // Run the transition every 5 seconds
  setInterval(changeBackgroundImage, 5000);
</script>
<script src="../sample.js"></script>


<script>
  
// Get the button
let mybutton = document.getElementById("myBtn");
// mybutton.style.display = "none";
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
// mybutton.style.display = "none";
function scrollFunction() {
 
  if (document.body.scrollTop >1000 || document.documentElement.scrollTop > 1000) {
    mybutton.style.opacity = 100;
  } else {
    mybutton.style.opacity = 0;
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


</script>



    

<!-- flowbite javascript -->
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js">

  
</script>






<script src="https://unpkg.com/aos@next/dist/aos.js"></script>


<script>
    AOS.init();
  </script>





</body>
</html>