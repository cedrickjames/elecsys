
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
<div>

<!-- Section: Design Block -->
<div class="relative overflow-hidden h-1/2 lg:h-screen">
<div class="relative bg-gray-900 h-full"> 
<div class="px-0 lg:px-0 bg-gradient-to-r from-sky-950 to-transparent via-gray-900 h-full">
    <!-- <div id="slideshow" class="absolute inset-0 bg-cover bg-no-repeat h-full"></div> -->
<div class="relative isolate w-full p-6 lg:px-8 bg-gradient-to-r from-sky-950 from-10% to-transparent to-90% h-full">


    <div class="grid md:grid-cols-2 gap-0 md:gap-12 flex items-center">
    <div class=" max-w-2xl pt-32 md:pt-0  md:pb-64 pb-10">

      <div class="text-center sm:text-left">
        <h1 class="text-4xl font-bold tracking-tight text-gray-200 sm:text-6xl">Quality System</h1>
        <h3 class="mt-4 text-2xl font-bold tracking-tight text-gray-200 text-xl sm:text-2xl">Making sure we provide the highest quality.</h3>

        <p class="text-justify mt-6 text-lg leading-8 text-gray-300"> Electronic Systems Manufacturing Corp. (Elecsys MFG) has developed an outstanding reputation for customer service, on time delivery and producing high quality products at very competitive prices. We are able to provide consignment and turnkey manufacturing solutions for through hole and surface mount assemblies, testing and right through to complete box builds.</p>
        <!-- <div class="mt-10 flex items-center sm:items-left justify-center sm:justify-start gap-x-6">
          <a href="#home" class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Get started</a>
          <a href="#more" class="text-sm font-semibold leading-6 text-gray-300">Learn more <span aria-hidden="true">→</span></a>
        </div> -->
      </div>
    </div>
    <div class=" max-w-2xl  sm:py-14 py-0">
  
<div class="hidden md:grid grid-cols-3 gap-3">
    <div class="grid gap-4">
        <div class="h-24">
            <!-- <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt=""> -->
        </div >
        <div class="h-72 bg-cover bg-center rounded-lg" style="background-image: url('../resources/img/Background Images/home_no_1_min.jpg')"  >
            <!-- <img class="h-auto max-w-full rounded-lg" src="../resources/img/Background Images/home_no_1_min.jpg" alt=""> -->
        </div>
        <div  class=" h-0 md:h-24">
            <!-- <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt=""> -->
        </div>
    </div>
    <div class="grid gap-4">
    <div >
            <!-- <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt=""> -->
        </div>
        <div class="h-72 bg-cover bg-center rounded-lg" style="background-image: url('../resources/img/Background Images/home_no_2_min.jpg')"  >
            <!-- <img class="h-auto max-w-full rounded-lg" src="../resources/img/Background Images/home_no_1_min.jpg" alt=""> -->
        </div>
        <div class="h-56 bg-cover bg-center rounded-lg" style="background-image: url('../resources/img/Background Images/home_no_4_min.jpg')"  >
            <!-- <img class="h-auto max-w-full rounded-lg" src="../resources/img/Background Images/home_no_1_min.jpg" alt=""> -->
        </div>
        <div class="h-0 md:h-72"></div>
    
    </div>
    <div class="grid gap-2 md:gap-4">
    <div class="h-52 bg-cover bg-center rounded-lg" style="background-image: url('../resources/img/Background Images/home_no_5_min.jpg')"  >
            <!-- <img class="h-auto max-w-full rounded-lg" src="../resources/img/Background Images/home_no_1_min.jpg" alt=""> -->
        </div>
        <div class="h-72 bg-cover bg-center rounded-lg" style="background-image: url('../resources/img/Background Images/home_no_6_min.jpg')"  >
            <!-- <img class="h-auto max-w-full rounded-lg" src="../resources/img/Background Images/home_no_1_min.jpg" alt=""> -->
        </div>
        <div class="h-0 md:h-80"></div>

    </div>

</div>

<div class="block md:hidden grid grid-cols-2 md:grid-cols-4 gap-4">
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="../resources/img/Background Images/home_no_1_min.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="../resources/img/Background Images/home_no_2_min.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="../resources/img/Background Images/home_no_4_min.jpg" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="../resources/img/Background Images/home_no_5_min.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="../resources/img/Background Images/home_no_6_min.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="../resources/img/Background Images/home_no_5_min.jpg" alt="">
        </div>
    </div>

</div>

    </div>
  </div>

    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#083344] to-[#082f49] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
  </div>
</div>
  </div>


</div>
<section class="overflow-hidden text-neutral-700 text-center" id="certificates">
  <div class=" mx-auto p-2 md:px-10 md:py-4 lg:px-10 lg:py-10">
  <h1 class=" text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span
        class="text-transparent bg-clip-text bg-gray-900">Certifications</span>
    </h1>
    <div class="container">
      <div class="grid lg:grid-cols-2 gap-12 flex items-center">
        <div  class="mt-4 sm:mt-12 lg:mt-0 ">
        <div >
      <div class=" mb-8 text-center sm:text-left">
      <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
          NSF International Strategic Registrations
        </div>
      </div>
      <div class="text-center sm:text-left">
      <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">IATF 16949:2016</h1>
        <p class="text-justify mt-6 text-lg leading-8 text-gray-600">This certifies that the Quality Management System of Elecsys Manufacturing Corporation has been assessed by NSF-ISR and found to be in conformance to the IATF 16949:2016</p>
        <h3 class="text-left mt-4 text-2xl font-bold tracking-tight text-gray-600 text-xl sm:text-2xl">	Scope of Registration:</h3>
        <p class="text-justify  mt-2 text-lg leading-8 text-gray-600">Manufacture of printed circuit board assembly (PCBA)
</p>

        <!-- <div class="mt-10 flex items-center sm:items-left justify-center sm:justify-start gap-x-6">
          <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
        </div> -->
      </div>
    </div>
        </div>
        <div data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"  class="h-full">
          <img
            src="../resources/img/Elecsys Images/cert.png"
            class=" w-full rounded-lg h-max  m-auto lg:my-20"
            alt=""
          />
        </div>
      </div>
  </div>
  <div class="container" id="certificates2">
      <div class="grid lg:grid-cols-2 gap-12 flex items-center">
        <div  class="mt-12 lg:mt-0 ">
        <div >
      <div class=" mb-8 text-center sm:text-left">
      <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
      NSF International Strategic Registrations
        </div>
      </div>
      <div class="text-center sm:text-left">
      <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">ISO 9001:2015</h1>
        <p class="text-justify  mt-6 text-lg leading-8 text-gray-600">This certifies that the Quality Management System of Elecsys Manufacturing Corporation has been assessed by NSF-ISR and found to be in conformance to the ISO 9001:2015</p>
        <h3 class="text-left  mt-4 text-2xl font-bold tracking-tight text-gray-600 text-xl sm:text-2xl">	Scope of Registration:</h3>
        <p class="text-justify  mt-2 text-lg leading-8 text-gray-600">	Manufacture of display modules, security system RFID and printed circuit board assembly(PCBA)</p>

        <!-- <div class="mt-10 flex items-center sm:items-left justify-center sm:justify-start gap-x-6">
          <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
        </div> -->
      </div>
    </div>
        </div>
        <div data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"  class="h-full">
          <img
            src="../resources/img/Elecsys Images/cert2.png"
            class="w-full rounded-lg h-max  m-auto lg:my-20"
            alt=""
          />
        </div>
      </div>
  </div>
  <div class="hidden grid gap-4">
        <div class="image-container" id="mainImageContainer" style="background-image: url('../resources/img/Elecsys Images/cert.png');">
        </div>
        <div class="grid" id="thumbnailContainer">
            <div class="thumbnail" style="background-image: url('../resources/img/Elecsys Images/cert.png');"></div>
            <div class="thumbnail" style="background-image: url('../resources/img/Elecsys Images/cert2.png');"></div>
            <div class="thumbnail" style="background-image: url('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg');"></div>
            <div class="thumbnail" style="background-image: url('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg');"></div>
            <div class="thumbnail" style="background-image: url('https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg');"></div>
        </div>
    </div>


  </div>
  </section>

  <section id="mission"  class=" mb-20 m-2.5">
    <div class="grid grid-cols-3 bg-red ">
        <div  class="col-span-3 md:col-span-2 m-2 sm:mx-10">
            <!-- <p class="ml-1 my-4 text-lg text-gray-500">License: HLURB LTS No. 30729</p> -->
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-4xl"><span class="text-transparent bg-clip-text bg-gray-900">Our Mission</span>
            </h1>

            <p class="justify-center font-light text-2xl text-gray-900 dark:text-gray-900">
            Our mission is to exceed curtomer's expectations by providing the highest quality products with the most competitive prices  in a timely manner.
            </p>
            <div class="inline-flex items-center justify-center w-full">
                <hr id="vission" class="w-full h-px my-8 bg-gray-200 border-0 dark:bg-gray-300">
            </div>
            <h1  class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-4xl"><span class="text-transparent bg-clip-text bg-gray-900">Our Vission</span>
            </h1>

            <p class="justify-center font-light text-2xl text-gray-900 dark:text-gray-900">
           As a world-class electronic manufacturing company, our vission is not to be the biggest contract manufacturer but one of the best with leading edge technology as a standard while not forgetting our roots.
            </p>
            <div class="text-lg ml-4">

          
</h2>
            <p class="font-light text-xl text-gray-900 dark:text-gray-900">
            </p>
</div>
  </div>
  <div class="hidden md:block col-span-1 ">

<div style="background-image: url('../resources/img/Background Images/home_no_3_min.jpg');background-position:center;  background-repeat: no-repeat; background-size: cover;" class="w-full h-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    
</div>

</div>
  </div>
  
  </section>
  <section id="qualitypolicy"class=" mb-22 m-0  bg-gray-900  ">
    <div class=" grid grid-cols-3 bg-gradient-to-r from-sky-950 from-10% to-transparent to-90%">
        <div  class="  col-span-3 md:col-span-2 m-2 sm:m-10">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gray-100">Quality Policy</span>
            </h1>
            <div  class="">
            <p class=" mb-4 text-white text-sm  md:text-5xl lg:text-xl"><span class="text-5xl font-extrabold font-serif"  style="color: #ffffff61;">C</span>lient focus is the 
            approach of Elecsys to
            </p>
            <p class=" mb-4 text-white text-sm  md:text-5xl lg:text-xl"><span class="text-5xl font-extrabold font-serif"  style="color: #ffffff61;">U</span>pgrade services and achieved product requirements
           
            </p><p class=" mb-4 text-white text-sm  md:text-5xl lg:text-xl"><span class="text-5xl font-extrabold font-serif"  style="color: #ffffff61;">S</span>ustain continual improvement of the Quality Management System by providing necessary trainings; Implement
           
            </p><p class=" mb-4 text-white text-sm  md:text-5xl lg:text-xl"><span class="text-5xl font-extrabold font-serif"  style="color: #ffffff61;">T</span>ime bound to meet delivery; Use
           
            </p><p class=" mb-4 text-white text-sm  md:text-5xl lg:text-xl"><span class="text-5xl font-extrabold font-serif"  style="color: #ffffff61;">0</span>pportunity and strength to advance and ensure continuous improvement; We
           
            </p><p class=" mb-4 text-white text-sm  md:text-5xl lg:text-xl"><span class="text-5xl font-extrabold font-serif"  style="color: #ffffff61;">M</span>easure performance to guarantee customer satisfaction;
           
            </p><p class=" mb-4 text-white text-sm  md:text-5xl lg:text-xl"><span class="text-5xl font-extrabold font-serif"  style="color: #ffffff61;">E</span>nhance quality awareness of employees at all level of all organization;
           
            </p><p class=" mb-4 text-white text-sm  md:text-5xl lg:text-xl"><span class="text-5xl font-extrabold font-serif"  style="color: #ffffff61;">R</span>esult driven to ensure customers, shareholders and employees have their expectation exceeded while complying to related statutory and regulatory requirements.
           
            </p>
            </div>
         
           <div >


    </div>
          
          

  </div>
  <div class="hidden md:block col-span-1 m-10">

<div style="background-image: url('../resources/img/Background Images/home_no_4_min.jpg');background-position:center;  background-repeat: no-repeat; background-size: cover;" class="w-full h-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    
</div>

</div>
  </div>
  
  </section>
<section class="hidden overflow-hidden text-neutral-700 text-center" id="more">
<!-- <h1 class="m-auto text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span
                    class="text-transparent bg-clip-text bg-gray-900">Certification and Registrations</span>
            </h1> -->
  <div class=" mx-auto px-2 sm:px-8 py-2 lg:px-8 lg:pt-10">
    <div class="grid grid-col-1 lg:grid-cols-4 md:grid-cols-2 gap-4">
    <div style="background-color: #0f142a" class="mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#" class="block bg-cover bg-center h-60" style="background-image: url('../resources/img/Elecsys Images/cert.png')">
        <!-- <img class="rounded-t-lg" src="./resources/img/Elecsys Images/cert.png" alt="" /> -->
    </a>
    <div class="p-5">
        <a href="#" >
            <h5 class="mb-2 text-2xl font-bold tracking-tight  text-white">IATF 16949: 2016 Certified</h5>
        </a>
        <p class="mb-3 font-normal text-gray-400">Elecsys Manufacturing Corporation has been assessed by NSF-ISR and found to be conformance to the following standard(s)</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-blue-600 dark:focus:ring-sky-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>
<div style="background-color: #0f142a" class="mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#" class="block bg-cover bg-center h-60" style="background-image: url('../resources/img/Elecsys Images/cert2.png')">
        <!-- <img class="rounded-t-lg" src="./resources/img/Elecsys Images/cert2.png" alt="" /> -->
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">ISO 9001 : 2015 Certified</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Manufacture of Display Modules and PCBA has been assessed and registered by NQA agaist the provisions of BS EN ISO 9001  ...</p>
        <a href="#" class=" inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-blue-600 dark:focus:ring-sky-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>
<div style="background-color: #0f142a" class="mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#" class="block bg-cover bg-center h-60" style="background-image: url('../resources/img/Background Images/home_no_1_min.jpg')">
        <!-- <img class="rounded-t-lg h-52" src="./resources/img/Background Images/home_no_2_min.jpg" alt="" /> -->
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Our Mission</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Our mission is to exceed our customer's expectations by providing the highest quality products with the most competitive prices in a timely manner.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-blue-600 dark:focus:ring-sky-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>
<div style="background-color: #0f142a" class="mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#" class="block bg-cover bg-center h-60" style="background-image: url('../resources/img/Elecsys Images/mission.png')">
        <!-- <img class="rounded-t-lg h-52" src="./resources/img/Background Images/home_no_2_min.jpg" alt="" /> -->
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Our Vission</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">As a world-class electronic manufacturing company, our vision is not to be the biggest contract manfacturer but one of the best with leading edge ...</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-blue-600 dark:focus:ring-sky-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>

    </div>


  </div>
</section>
<!-- Container -->







</div>
<!-- end of about us -->












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