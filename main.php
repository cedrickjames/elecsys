
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
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
    <link rel="shortcut icon" href="./resources/img/Elecsys Images/elecsys-site-logo-1.png">
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" /> -->
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
  
     <!-- tailwind play cdn -->
    <script src="https://cdn.tailwindcss.com"></script>

     <!-- from flowbite cdn -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    
    <script src="node_modules/tw-elements/dist/js/index.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- browser logo -->
    <link rel="shortcut icon" href="resources/img/logo.png">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./node_modules/aos/dist/aos.css" />
    <script src="node_modules/aos/src/js/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.2.0/zepto.min.js"></script>
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollToPlugin.min.js"></script>
    <script src="node_modules/tw-elements/dist/js/index.min.js"></script>

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
    display: none; /* Hidden by default */
      position: fixed; /* Fixed/sticky position */
      bottom: 10px; /* Place the button at the bottom of the page */
      right: 10px; /* Place the button 30px from the right */
      z-index: 99; /* Make sure it does not overlap */
      border: none; /* Remove borders */
      outline: none; /* Remove outline */ 
      color: white; /* Text color */
      cursor: pointer; /* Add a mouse pointer on hover */
      padding: 0px; /* Some padding */
      border-radius: 50%; /* Rounded corners */
      font-size: 18px; /* Increase font size */
      transition: opacity 3s ease-out;
    }
    #chat{
      position: fixed; /* Fixed/sticky position */
      bottom: 50px; /* Place the button at the bottom of the page */
      right: 30px; /* Place the button 30px from the right */
      z-index: 999; 
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

  [data-modal-target="defaultModal"] {
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
<!-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-6f9dccb1-9d8a-4357-a070-ddebd4d201d0"></div> -->

<!-- <div class="FloatingButton__FloatingButtonContainer-sc-q5md4t-0 lbvXTF"><button role="button" tabindex="0" class="ButtonBase__ButtonContainer-sc-p43e7i-3 euBiGU Bubble__BubbleComponent-sc-13azvyr-0 geOiUc" type="button" style="border-radius: 100px; border-color: rgba(0, 0, 0, 0); color: rgb(255, 255, 255); font-family: inherit; font-weight: bold; font-size: 16px; background-color: rgb(0, 53, 133); border-width: 0px;"><span class="ButtonBase__Overlay-sc-p43e7i-4 jUXzLe" style="padding: 10px 25px; background-color: rgba(0, 0, 0, 0);"><div class="Icon__IconContainer-sc-11wrh3u-0 hPVtvf ButtonBase__ButtonIcon-sc-p43e7i-0 ButtonBase__LeftIcon-sc-p43e7i-1 gMSomS ilvJjM"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.993 14.47l-2.546-2.717-4.97 2.716 5.466-5.802 2.609 2.716 4.906-2.716-5.465 5.802zM12 2C6.478 2 2 6.146 2 11.26c0 2.913 1.454 5.513 3.727 7.21V22l3.405-1.868c.908.251 1.871.387 2.868.387 5.523 0 10-4.146 10-9.259C22 6.145 17.523 2 12 2z"></path></svg></div></div><span class="ButtonBase__Ellipsis-sc-p43e7i-5 dqiKFy"><div class="BubbleContent__NotificationBadge-sc-9iwasx-0 hKWkLV"></div><span class="BubbleContent__BubbleContentText-sc-9iwasx-1">Connect with us</span></span></span></button></div> -->
<!-- button go to top -->
<a  href="https://www.messenger.com/t/100028355195877" target="_blank"    id="myBtn"  >
<svg class="w-full h-full"   xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
<radialGradient id="8O3wK6b5ASW2Wn6hRCB5xa_YFbzdUk7Q3F8_gr1" cx="11.087" cy="7.022" r="47.612" gradientTransform="matrix(1 0 0 -1 0 50)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1292ff"></stop><stop offset=".079" stop-color="#2982ff"></stop><stop offset=".23" stop-color="#4e69ff"></stop><stop offset=".351" stop-color="#6559ff"></stop><stop offset=".428" stop-color="#6d53ff"></stop><stop offset=".754" stop-color="#df47aa"></stop><stop offset=".946" stop-color="#ff6257"></stop></radialGradient><path fill="url(#8O3wK6b5ASW2Wn6hRCB5xa_YFbzdUk7Q3F8_gr1)" d="M44,23.5C44,34.27,35.05,43,24,43c-1.651,0-3.25-0.194-4.784-0.564	c-0.465-0.112-0.951-0.069-1.379,0.145L13.46,44.77C12.33,45.335,11,44.513,11,43.249v-4.025c0-0.575-0.257-1.111-0.681-1.499	C6.425,34.165,4,29.11,4,23.5C4,12.73,12.95,4,24,4S44,12.73,44,23.5z"></path><path d="M34.992,17.292c-0.428,0-0.843,0.142-1.2,0.411l-5.694,4.215	c-0.133,0.1-0.28,0.15-0.435,0.15c-0.15,0-0.291-0.047-0.41-0.136l-3.972-2.99c-0.808-0.601-1.76-0.918-2.757-0.918	c-1.576,0-3.025,0.791-3.876,2.116l-1.211,1.891l-4.12,6.695c-0.392,0.614-0.422,1.372-0.071,2.014	c0.358,0.654,1.034,1.06,1.764,1.06c0.428,0,0.843-0.142,1.2-0.411l5.694-4.215c0.133-0.1,0.28-0.15,0.435-0.15	c0.15,0,0.291,0.047,0.41,0.136l3.972,2.99c0.809,0.602,1.76,0.918,2.757,0.918c1.576,0,3.025-0.791,3.876-2.116l1.211-1.891	l4.12-6.695c0.392-0.614,0.422-1.372,0.071-2.014C36.398,17.698,35.722,17.292,34.992,17.292L34.992,17.292z" opacity=".05"></path><path d="M34.992,17.792c-0.319,0-0.63,0.107-0.899,0.31l-5.697,4.218	c-0.216,0.163-0.468,0.248-0.732,0.248c-0.259,0-0.504-0.082-0.71-0.236l-3.973-2.991c-0.719-0.535-1.568-0.817-2.457-0.817	c-1.405,0-2.696,0.705-3.455,1.887l-1.21,1.891l-4.115,6.688c-0.297,0.465-0.32,1.033-0.058,1.511c0.266,0.486,0.787,0.8,1.325,0.8	c0.319,0,0.63-0.107,0.899-0.31l5.697-4.218c0.216-0.163,0.468-0.248,0.732-0.248c0.259,0,0.504,0.082,0.71,0.236l3.973,2.991	c0.719,0.535,1.568,0.817,2.457,0.817c1.405,0,2.696-0.705,3.455-1.887l1.21-1.891l4.115-6.688c0.297-0.465,0.32-1.033,0.058-1.511	C36.051,18.106,35.531,17.792,34.992,17.792L34.992,17.792z" opacity=".07"></path><path fill="#fff" d="M34.394,18.501l-5.7,4.22c-0.61,0.46-1.44,0.46-2.04,0.01L22.68,19.74	c-1.68-1.25-4.06-0.82-5.19,0.94l-1.21,1.89l-4.11,6.68c-0.6,0.94,0.55,2.01,1.44,1.34l5.7-4.22c0.61-0.46,1.44-0.46,2.04-0.01	l3.974,2.991c1.68,1.25,4.06,0.82,5.19-0.94l1.21-1.89l4.11-6.68C36.434,18.901,35.284,17.831,34.394,18.501z"></path>
</svg>
        <span class="sr-only">Open actions menu</span>
    </a>

<!-- <a onclick="topFunction()" id="myBtn" class="bg-blue-600"  title="Go to top"><svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75L12 3m0 0l3.75 3.75M12 3v18" />
</svg></a>  -->





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
    <video id="slideshow" autoplay muted loop class="absolute inset-0 object-cover w-full h-full">
  <source src="./resources/vid/elecsys.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
<div class="relative isolate w-full px-6 lg:px-8 bg-gradient-to-r from-sky-950 from-10% to-transparent to-90% h-full">
    <!-- <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#083344] to-[#082f49] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div> -->
    <div class=" pl-0 lg:pl-32 max-w-2xl  sm:py-24 py-32">
      <div class=" mb-8 text-center sm:text-left">
        <div class="relative rounded-full px-3 py-1 text-xs sm:text-sm leading-6 text-gray-100 ring-1 ring-gray-300/10 hover:ring-gray-300/20">
          You may send us inquiries <a href="contact" class="font-semibold text-sky-500"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
        </div>
      </div>
      <div class="text-center sm:text-left">
        <h1 class="text-4xl font-bold tracking-tight text-gray-200 sm:text-6xl">ELECSYS</h1>
        <h3 class="mt-4 text-2xl font-bold tracking-tight text-gray-200 text-xl sm:text-2xl">MANUFACTURING CORPORATION</h3>

        <p class="mt-6 text-lg leading-8 text-gray-300">Elecsys Manufacturing Corporation provides EMS solutions based in the Philippine Free Trade Zone</p>
        <div class="mt-10 flex items-center sm:items-left justify-center sm:justify-start gap-x-6">
          <a href="#home" class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Get started</a>
          <a href="#more" class="text-sm font-semibold leading-6 text-gray-300">Learn more <span aria-hidden="true">→</span></a>
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
 
<section class="mt-0 sm:mt-24 mb-22" id="capabilities">

  <div class="px-0 sm:px-32  py-12 md:px-32 bg-white text-gray-800 text-center lg:text-left">
    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span
        class="text-transparent bg-clip-text bg-gray-900">Manufacturing Capabilities</span>
    </h1>

    <p class="justify-center font-light text-xl text-gray-900 dark:text-gray-900">
    State-of-the-art equipment with highly skilled operators having over 30 years of experience. 
  </p>
    <div class="container">
      <div class="grid lg:grid-cols-2 gap-12 flex items-center">
        <div  class="mt-12 lg:mt-10 ">
        <h2 class="mb-2 text-3xl font-semibold text-gray-900 dark:text-gray-900 mb-4">Elecsys Capabilities</h2>
            <div class="text-lg ml-4">

            <ul class=" space-y-1 text-gray-500 list-inside dark:text-gray-900 flex flex-col gap-2">
                <li class="flex items-center text-justify">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    
                    <a   data-modal-target="defaultModal" data-modal-toggle="defaultModal" >Electronic and Microelectronics Assembly</a>
                </li>
                <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-16 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Electronic and Microelectronics Assembly
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal" >
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">           
            <video class="w-full h-auto max-w-full" muted  controls>
              <source src="resources/vid/samplevideo.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>

            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                
            </div>
        </div>
    </div>
</div>
                <li class="flex items-center text-justify">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <a   data-modal-target="defaultModal" data-modal-toggle="defaultModal" >Electro-Mechanical Assembly</a>

                    
                </li>
                <li class="flex items-center text-justify">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <a   data-modal-target="defaultModal" data-modal-toggle="defaultModal" >X-ray analysis system</a>
                    
                </li>
                <li class="flex items-center text-justify">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    
                    <a   data-modal-target="defaultModal" data-modal-toggle="defaultModal" >Seven fully equipped SMT lines with in-line soder paste inspection machine.</a>

                </li>
                <li class="flex items-center text-justify">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    RoHS or non-RoHS assemblies
                </li>
                <li class="flex items-center text-justify">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Nitrogen (N2) Reflow Oven and 12 Zone IR Reflow Oven
                </li>
                <li class="flex items-center text-justify">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Lead free full and selective wave solder machine
                </li>
                <li class="flex items-center text-justify">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Automated radial/axial insertion machines with selective wave soldering machine.
                </li>



                <li class="flex items-center text-justify">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Automated Radial Insertion machine
                </li>
                <li class="flex items-center text-justify">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Laser Etching machine
                </li>
                <li class="flex items-center text-justify">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Tape and Reel Capabilities.
                </li>
                <li class="flex items-center text-justify">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Automated Conformal Coating Line.
                </li>
                <li class="flex items-center text-justify">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Full Test Capabilities.
                </li>  <li class="flex items-center text-justify">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Full Turnkey and Consignment services.
                </li>

            </ul>
           
       
</div>
        </div>
        <div data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"  class="h-full">
          <img
            src="resources/img/Elecsys Images/elecsys-site-logo-1.png"
            class=" w-3/6 md:5/6 lg:w-full rounded-lg h-max  m-auto lg:my-20"
            alt=""
          />
        </div>
      </div>
    </div>
    <h2 class="hidden mt-10 mb-2 text-3xl font-semibold text-gray-900 dark:text-gray-900 mb-4"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ipsam! Eligendi neque ipsam a quo assumenda commodi amet magnam, sint optio velit atque porro cum iste laboriosam fugiat maxime accusantium?
</h2>
  </div>
</section>
<!-- Section: Design Block -->


</div>

<section class="overflow-hidden text-neutral-700 text-center" id="more">
<!-- <h1 class="m-auto text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span
                    class="text-transparent bg-clip-text bg-gray-900">Certification and Registrations</span>
            </h1> -->
  <div style=" " class=" mx-auto px-2 sm:px-8 py-2 lg:px-8 lg:pt-10">
    <div class="h-full grid grid-col-1 xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-4">
    <div style="height: 580px; background-color: #0f142a" class="h-full mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="./qualitysystem#certificates" class="h-2/5 block bg-cover bg-center" style="background-image: url('./resources/img/Elecsys Images/cert.png')">
        <!-- <img class="rounded-t-lg" src="./resources/img/Elecsys Images/cert.png" alt="" /> -->
    </a>
    <div class="h-3/5 p-5">
        <a href="./qualitysystem#certificates"  style="height: 23%" class="block">
            <h5 class="mb-2 text-2xl font-bold tracking-tight  text-white">IATF 16949: 2016 Certified</h5>
        </a>
        <p style="height: 57%" class="mb-3 font-normal text-gray-400">Elecsys Manufacturing Corporation has been assessed by NSF-ISR and found to be conformance to the following standard(s)</p>
        <div style="height: 20%">
          <a href="./qualitysystem#certificates" class=" inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-blue-600 dark:focus:ring-sky-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
  </div>
  
    </div>
</div>
<div style="height: 580px; background-color: #0f142a" class="h-full mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="./qualitysystem#certificates" class="h-2/5 block bg-cover bg-center" style="background-image: url('./resources/img/Elecsys Images/cert2.png')">
        <!-- <img class="rounded-t-lg" src="./resources/img/Elecsys Images/cert2.png" alt="" /> -->
    </a>
    <div class="h-3/5 p-5">
        <a href="./qualitysystem#certificates" style="height: 23%" class="block">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">ISO 9001 : 2015 Certified</h5>
        </a>
        <p style="height: 57%" class="mb-3 font-normal text-gray-400 ">This certifies that the Quality Management System of Elecsys Manufacturing Corporation has been assessed by NSF-ISR and found to be in conformance...</p>
        <div style="height: 20%">
          <a href="./qualitysystem#certificates" class=" inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-blue-600 dark:focus:ring-sky-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
  </div>
  
    </div>
</div>
<div style="height: 580px; background-color: #0f142a" class="h-full mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#" class="h-2/5 block bg-cover bg-center" style="background-image: url('./resources/img/Background Images/home_no_1_min.jpg')">
        <!-- <img class="rounded-t-lg h-52" src="./resources/img/Background Images/home_no_2_min.jpg" alt="" /> -->
    </a>
    <div class="h-3/5 p-5">
        <a href="./qualitysystem#mission" style="height: 23%" class="block">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Our Mission</h5>
        </a>
        <p style="height: 57%" class="mb-3 font-normal text-gray-400 ">Our mission is to exceed our customer's expectations by providing the highest quality products with the most competitive prices in a timely manner.</p>
        <div style="height: 20%">
          <a href="./qualitysystem#mission" class=" inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-blue-600 dark:focus:ring-sky-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
  </div>
  
    </div>
</div>
<div style="height: 580px; background-color: #0f142a" class="h-full mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="./qualitysystem#vission" class="h-2/5 block bg-cover bg-center" style="background-image: url('./resources/img/Elecsys Images/mission.png')">
        <!-- <img class="rounded-t-lg h-52" src="./resources/img/Background Images/home_no_2_min.jpg" alt="" /> -->
    </a>
    <div class="h-3/5 p-5">
        <a href="./qualitysystem#vission" style="height: 23%" class="block">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Our Vision</h5>
        </a>
        <p style="height: 57%" class="mb-3 font-normal text-gray-400 ">As a world-class electronic manufacturing company, our vision is not to be the biggest contract manfacturer but one of the best with leading edge ...</p>
        <div style="height: 20%">
          <a href="./qualitysystem#vission" class=" inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-blue-600 dark:focus:ring-sky-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
  </div>
  
    </div>
</div>
<div style="height: 580px; background-color: #0f142a" class="h-full mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="./qualitysystem#qualitypolicy" class="h-2/5 block bg-cover bg-center" style="background-image: url('./resources/img/Background Images/home_no_4_min.jpg')">
        <!-- <img class="rounded-t-lg h-52" src="./resources/img/Background Images/home_no_2_min.jpg" alt="" /> -->
    </a>
    <div class="h-3/5 p-5">
        <a href="./qualitysystem#qualitypolicy" style="height: 23%" class="block">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Quality Policy</h5>
        </a>
        <p style="height: 57%" class="mb-3 font-normal text-gray-400 ">Client focus is the approach of Elecsys to upgrade services and achieved product requirements sustain continual improvement of the Quality Management...</p>
        <div style="height: 20%">
          <a href="./qualitysystem#qualitypolicy" class=" inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-blue-600 dark:focus:ring-sky-800">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
  </div>
  
    </div>
</div>
    </div>


  </div>
</section>
<!-- Container -->


  


</div>
<!-- end of about us -->









<!-- latest -->
<div class="container py-12 px-2 sm:px-6 m-auto" id="latest">



<!-- Container for demo purpose -->




<!-- Container for demo purpose -->



<div class="container px-6 mx-auto">

  <!-- Section: Design Block -->
  <!-- Section: Design Block -->
</div>







<div class="hidden container px-0 sm:px-6 mx-auto" id="contact">
<div class="container my-0 sm:my-16  px-0 sm:px-6 mx-auto">

  <!-- Section: Design Block -->
  <section id="emailform"class="mb-8 text-gray-800">
    <div class="flex justify-center">
      <div class="text-center lg:max-w-3xl md:max-w-xl">
        <h2 class="text-3xl font-bold mb-12 px-6">Contact us</h2>
      </div>
    </div>

    <div class="flex flex-wrap">
      <div class="grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6">
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
          <div  class="form-group mb-6">
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

          <button type="submit" name="sendEmail"style="background-color: #0f142a" class="
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

      <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
        <div class="flex flex-wrap">
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex items-start">
              <div class="shrink-0">
              <div  style="background-color: #0f142a" class="p-4 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
              <a href="#" class="text-blue-500 hover:text-blue-900 dark:hover:text-white">
              <i class="fa-solid fa-location-dot fa-lg"></i>
            </a>
                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Location</p>
                <p class="text-gray-500">14/F Two Ecom Centre, MOA Complex Pasay City Pasay City, Philippines, Pasay City, Philippines</p>
          
              </div>
            </div>
          </div>
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex items-start">
              <div class="shrink-0">
              <div  style="background-color: #0f142a" class="p-4  rounded-md shadow-md w-14 h-14 flex items-center justify-center">
               <a href="#" class="text-blue-500 hover:text-blue-900 dark:hover:text-white">
               <i class="fa-solid fa-envelope fa-lg"></i>
              </a>
             
                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Email</p>
                
                <p class="text-gray-500">elecsys@elecsys.com</p>
              </div>
            </div>
          </div>
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex align-start">
              <div class="shrink-0">
              <div  style="background-color: #0f142a" class="p-4  rounded-md shadow-md w-14 h-14 flex items-center justify-center">
              <a href="#" class="text-blue-500 hover:text-blue-900 dark:hover:text-white">
              <i class="fa-solid fa-mobile-screen-button fa-lg"></i>
              </a>
             
                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Mobile</p>
                <p class="text-gray-500">0917 525 3067</p>
                
              </div>
            </div>
          </div>
          <div class="mb-12 grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex align-start">
              <div class="shrink-0">
                <div  style="background-color: #0f142a" class="p-4  rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                <a href="https://www.messenger.com/t/100028355195877" class="text-blue-500 hover:text-blue-900 dark:hover:text-white">
                <i class="fa-brands fa-facebook fa-lg"></i>
              </a>
                
                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Facebook</p>
                <a href="https://www.messenger.com/t/100028355195877" class="text-gray-500">Elecsys</a>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- 
  <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">
            <span class="font-semibold text-gray-400 uppercase">Our Partner Developers</span>
            <div class="flex flex-wrap justify-center items-center mt-8 text-gray-500 sm:justify-between">
                <a href="#" class="mr-5 mb-5 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
                    <svg class="h-8" viewBox="0 0 132 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M39.4555 5.17846C38.9976 3.47767 37.6566 2.13667 35.9558 1.67876C32.8486 0.828369 20.4198 0.828369 20.4198 0.828369C20.4198 0.828369 7.99099 0.828369 4.88379 1.64606C3.21571 2.10396 1.842 3.47767 1.38409 5.17846C0.566406 8.28567 0.566406 14.729 0.566406 14.729C0.566406 14.729 0.566406 21.2051 1.38409 24.2796C1.842 25.9804 3.183 27.3214 4.88379 27.7793C8.0237 28.6297 20.4198 28.6297 20.4198 28.6297C20.4198 28.6297 32.8486 28.6297 35.9558 27.812C37.6566 27.3541 38.9976 26.0131 39.4555 24.3123C40.2732 21.2051 40.2732 14.7618 40.2732 14.7618C40.2732 14.7618 40.3059 8.28567 39.4555 5.17846Z" fill="currentColor"/>
                        <path d="M16.4609 8.77612V20.6816L26.7966 14.7289L16.4609 8.77612Z" fill="white"/>
                        <path d="M64.272 25.0647C63.487 24.5413 62.931 23.7237 62.6039 22.5789C62.2768 21.4669 62.1133 19.9623 62.1133 18.1307V15.6122C62.1133 13.7479 62.3095 12.2434 62.6693 11.0986C63.0618 9.95386 63.6505 9.13618 64.4355 8.61286C65.2532 8.08954 66.2998 7.82788 67.6081 7.82788C68.8837 7.82788 69.9304 8.08954 70.7153 8.61286C71.5003 9.13618 72.0564 9.98657 72.4161 11.0986C72.7759 12.2107 72.9722 13.7152 72.9722 15.6122V18.1307C72.9722 19.995 72.8086 21.4669 72.4488 22.6116C72.0891 23.7237 71.533 24.5741 70.7481 25.0974C69.9631 25.6207 68.8837 25.8824 67.5427 25.8824C66.169 25.8496 65.057 25.588 64.272 25.0647ZM68.6875 22.3172C68.9164 21.7612 69.0146 20.8127 69.0146 19.5371V14.1077C69.0146 12.8648 68.9164 11.949 68.6875 11.3603C68.4585 10.7715 68.0988 10.5099 67.5427 10.5099C67.0194 10.5099 66.6269 10.8043 66.4307 11.3603C66.2017 11.949 66.1036 12.8648 66.1036 14.1077V19.5371C66.1036 20.8127 66.2017 21.7612 66.4307 22.3172C66.6269 22.8733 67.0194 23.1676 67.5754 23.1676C68.0987 23.1676 68.4585 22.906 68.6875 22.3172Z" fill="currentColor"/>
                        <path d="M124.649 18.1634V19.0465C124.649 20.1586 124.682 21.009 124.748 21.565C124.813 22.121 124.944 22.5462 125.173 22.7752C125.369 23.0368 125.696 23.1677 126.154 23.1677C126.743 23.1677 127.135 22.9387 127.364 22.4808C127.593 22.0229 127.691 21.2706 127.724 20.1913L131.093 20.3875C131.125 20.5511 131.125 20.7473 131.125 21.009C131.125 22.6117 130.7 23.8218 129.817 24.6068C128.934 25.3918 127.691 25.7843 126.089 25.7843C124.159 25.7843 122.818 25.1628 122.033 23.9527C121.248 22.7425 120.855 20.8782 120.855 18.327V15.2852C120.855 12.6686 121.248 10.7715 122.066 9.56136C122.883 8.35119 124.257 7.76245 126.187 7.76245C127.528 7.76245 128.574 8.02411 129.294 8.51472C130.013 9.00534 130.504 9.79032 130.798 10.8042C131.093 11.8509 131.223 13.29 131.223 15.1216V18.098H124.649V18.1634ZM125.14 10.837C124.944 11.0986 124.813 11.4911 124.748 12.0471C124.682 12.6032 124.649 13.4536 124.649 14.5983V15.8412H127.528V14.5983C127.528 13.4863 127.495 12.6359 127.43 12.0471C127.364 11.4584 127.201 11.0659 127.004 10.837C126.808 10.608 126.481 10.4772 126.089 10.4772C125.631 10.4445 125.336 10.5753 125.14 10.837Z" fill="currentColor"/>
                        <path d="M54.7216 17.8362L50.2734 1.71143H54.1656L55.7356 9.0052C56.1281 10.8041 56.4224 12.3414 56.6187 13.617H56.7168C56.8476 12.7011 57.142 11.1966 57.5999 9.0379L59.2353 1.71143H63.1274L58.6138 17.8362V25.5552H54.7543V17.8362H54.7216Z" fill="currentColor"/>
                        <path d="M85.6299 8.15479V25.5878H82.5554L82.2283 23.4619H82.1302C81.3125 25.0645 80.0369 25.8822 78.3688 25.8822C77.2241 25.8822 76.3737 25.4897 75.8177 24.7375C75.2617 23.9852 75 22.8077 75 21.1723V8.15479H78.9249V20.9434C78.9249 21.7284 79.023 22.2844 79.1865 22.6115C79.3501 22.9385 79.6444 23.1021 80.0369 23.1021C80.364 23.1021 80.6911 23.004 81.0181 22.775C81.3452 22.5788 81.5742 22.3171 81.705 21.99V8.15479H85.6299Z" fill="currentColor"/>
                        <path d="M105.747 8.15479V25.5878H102.673L102.346 23.4619H102.247C101.43 25.0645 100.154 25.8822 98.4861 25.8822C97.3413 25.8822 96.4909 25.4897 95.9349 24.7375C95.3788 23.9852 95.1172 22.8077 95.1172 21.1723V8.15479H99.0421V20.9434C99.0421 21.7284 99.1402 22.2844 99.3038 22.6115C99.4673 22.9385 99.7617 23.1021 100.154 23.1021C100.481 23.1021 100.808 23.004 101.135 22.775C101.462 22.5788 101.691 22.3171 101.822 21.99V8.15479H105.747Z" fill="currentColor"/>
                        <path d="M96.2907 4.88405H92.3986V25.5552H88.5718V4.88405H84.6797V1.71143H96.2907V4.88405Z" fill="currentColor"/>
                        <path d="M118.731 10.935C118.502 9.82293 118.11 9.03795 117.587 8.54734C117.063 8.05672 116.311 7.79506 115.395 7.79506C114.676 7.79506 113.989 7.99131 113.367 8.41651C112.746 8.809 112.255 9.36502 111.928 10.0192H111.896V0.828369H108.102V25.5552H111.34L111.732 23.9199H111.83C112.125 24.5086 112.582 24.9665 113.204 25.3263C113.825 25.6533 114.479 25.8496 115.232 25.8496C116.573 25.8496 117.521 25.2281 118.143 24.018C118.764 22.8078 119.091 20.8781 119.091 18.2942V15.5467C119.059 13.5516 118.96 12.0143 118.731 10.935ZM115.134 18.0325C115.134 19.3081 115.068 20.2893 114.97 21.0089C114.872 21.7285 114.676 22.2518 114.447 22.5461C114.185 22.8405 113.858 23.004 113.466 23.004C113.138 23.004 112.844 22.9386 112.582 22.7751C112.321 22.6116 112.092 22.3826 111.928 22.0882V12.2106C112.059 11.7527 112.288 11.3602 112.615 11.0331C112.942 10.7387 113.302 10.5752 113.662 10.5752C114.054 10.5752 114.381 10.7387 114.578 11.0331C114.807 11.3602 114.937 11.8835 115.036 12.6031C115.134 13.3553 115.166 14.402 115.166 15.743V18.0325H115.134Z" fill="currentColor"/>
                    </svg>                        
                </a>
                <a href="#" class="mr-5 mb-5 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
                    <svg class="h-11" viewBox="0 0 208 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M42.7714 20.729C42.7714 31.9343 33.6867 41.019 22.4814 41.019C11.2747 41.019 2.19141 31.9343 2.19141 20.729C2.19141 9.52228 11.2754 0.438965 22.4814 0.438965C33.6867 0.438965 42.7714 9.52297 42.7714 20.729Z" fill="currentColor"/>
                        <path d="M25.1775 21.3312H20.1389V15.9959H25.1775C25.5278 15.9959 25.8747 16.0649 26.1983 16.1989C26.522 16.333 26.8161 16.5295 27.0638 16.7772C27.3115 17.0249 27.508 17.319 27.6421 17.6427C27.7761 17.9663 27.8451 18.3132 27.8451 18.6635C27.8451 19.0139 27.7761 19.3608 27.6421 19.6844C27.508 20.0081 27.3115 20.3021 27.0638 20.5499C26.8161 20.7976 26.522 20.9941 26.1983 21.1281C25.8747 21.2622 25.5278 21.3312 25.1775 21.3312ZM25.1775 12.439H16.582V30.2234H20.1389V24.8881H25.1775C28.6151 24.8881 31.402 22.1012 31.402 18.6635C31.402 15.2258 28.6151 12.439 25.1775 12.439Z" fill="white"/>
                        <path d="M74.9361 17.4611C74.9361 16.1521 73.9305 15.3588 72.6239 15.3588H69.1216V19.5389H72.6248C73.9313 19.5389 74.9369 18.7457 74.9369 17.4611H74.9361ZM65.8047 28.2977V12.439H73.0901C76.4778 12.439 78.3213 14.7283 78.3213 17.4611C78.3213 20.1702 76.4542 22.4588 73.0901 22.4588H69.1216V28.2977H65.8055H65.8047ZM80.3406 28.2977V16.7362H83.3044V18.2543C84.122 17.2731 85.501 16.4563 86.9027 16.4563V19.3518C86.6912 19.3054 86.4349 19.2826 86.0851 19.2826C85.1039 19.2826 83.7949 19.8424 83.3044 20.5681V28.2977H80.3397H80.3406ZM96.8802 22.3652C96.8802 20.6136 95.8503 19.0955 93.9823 19.0955C92.1364 19.0955 91.1105 20.6136 91.1105 22.366C91.1105 24.1404 92.1364 25.6585 93.9823 25.6585C95.8503 25.6585 96.8794 24.1404 96.8794 22.3652H96.8802ZM88.0263 22.3652C88.0263 19.1663 90.2684 16.4563 93.9823 16.4563C97.7198 16.4563 99.962 19.1655 99.962 22.3652C99.962 25.5649 97.7198 28.2977 93.9823 28.2977C90.2684 28.2977 88.0263 25.5649 88.0263 22.3652ZM109.943 24.3739V20.3801C109.452 19.6316 108.378 19.0955 107.396 19.0955C105.693 19.0955 104.524 20.4265 104.524 22.366C104.524 24.3267 105.693 25.6585 107.396 25.6585C108.378 25.6585 109.452 25.1215 109.943 24.3731V24.3739ZM109.943 28.2977V26.5697C109.054 27.6899 107.841 28.2977 106.462 28.2977C103.637 28.2977 101.465 26.1499 101.465 22.3652C101.465 18.6993 103.59 16.4563 106.462 16.4563C107.793 16.4563 109.054 17.0177 109.943 18.1843V12.439H112.932V28.2977H109.943ZM123.497 28.2977V26.5925C122.727 27.4337 121.372 28.2977 119.526 28.2977C117.052 28.2977 115.884 26.9431 115.884 24.7473V16.7362H118.849V23.5798C118.849 25.1451 119.666 25.6585 120.927 25.6585C122.071 25.6585 122.983 25.028 123.497 24.3731V16.7362H126.463V28.2977H123.497ZM128.69 22.3652C128.69 18.9092 131.212 16.4563 134.67 16.4563C136.982 16.4563 138.383 17.4611 139.131 18.4886L137.191 20.3093C136.655 19.5153 135.838 19.0955 134.81 19.0955C133.011 19.0955 131.751 20.4037 131.751 22.366C131.751 24.3267 133.011 25.6585 134.81 25.6585C135.838 25.6585 136.655 25.1915 137.191 24.4203L139.131 26.2426C138.383 27.2702 136.982 28.2977 134.67 28.2977C131.212 28.2977 128.69 25.8456 128.69 22.3652ZM141.681 25.1915V19.329H139.813V16.7362H141.681V13.6528H144.648V16.7362H146.935V19.329H144.648V24.3975C144.648 25.1215 145.02 25.6585 145.675 25.6585C146.118 25.6585 146.541 25.495 146.702 25.3087L147.334 27.5728C146.891 27.9714 146.096 28.2977 144.857 28.2977C142.779 28.2977 141.681 27.2238 141.681 25.1915ZM165.935 28.2977V21.454H158.577V28.2977H155.263V12.439H158.577V18.5577H165.935V12.4398H169.275V28.2977H165.935ZM179.889 28.2977V26.5925C179.119 27.4337 177.764 28.2977 175.919 28.2977C173.443 28.2977 172.276 26.9431 172.276 24.7473V16.7362H175.241V23.5798C175.241 25.1451 176.058 25.6585 177.32 25.6585C178.464 25.6585 179.376 25.028 179.889 24.3731V16.7362H182.856V28.2977H179.889ZM193.417 28.2977V21.1986C193.417 19.6333 192.602 19.0963 191.339 19.0963C190.172 19.0963 189.285 19.7504 188.77 20.4045V28.2985H185.806V16.7362H188.77V18.1843C189.495 17.3439 190.896 16.4563 192.718 16.4563C195.217 16.4563 196.408 17.8573 196.408 20.0523V28.2977H193.418H193.417ZM199.942 25.1915V19.329H198.076V16.7362H199.943V13.6528H202.91V16.7362H205.198V19.329H202.91V24.3975C202.91 25.1215 203.282 25.6585 203.936 25.6585C204.38 25.6585 204.802 25.495 204.965 25.3087L205.595 27.5728C205.152 27.9714 204.356 28.2977 203.119 28.2977C201.04 28.2977 199.943 27.2238 199.943 25.1915" fill="currentColor"/>
                    </svg>                       
                </a>
                <a href="#" class="mr-5 mb-5 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
                    <svg class="h-11" viewBox="0 0 120 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.058 40.5994C31.0322 40.5994 39.9286 31.7031 39.9286 20.7289C39.9286 9.75473 31.0322 0.858398 20.058 0.858398C9.08385 0.858398 0.1875 9.75473 0.1875 20.7289C0.1875 31.7031 9.08385 40.5994 20.058 40.5994Z" fill="currentColor"/>
                        <path d="M33.3139 20.729C33.3139 19.1166 32.0101 17.8362 30.4211 17.8362C29.6388 17.8362 28.9272 18.1442 28.4056 18.6424C26.414 17.2196 23.687 16.2949 20.6518 16.1765L21.9796 9.96387L26.2951 10.8885C26.3429 11.9793 27.2437 12.8567 28.3584 12.8567C29.4965 12.8567 30.4211 11.9321 30.4211 10.7935C30.4211 9.65536 29.4965 8.73071 28.3584 8.73071C27.5522 8.73071 26.8406 9.20497 26.5086 9.89271L21.6954 8.87303C21.553 8.84917 21.4107 8.87303 21.3157 8.94419C21.1972 9.01535 21.1261 9.13381 21.1026 9.27613L19.6321 16.1999C16.5497 16.2949 13.7753 17.2196 11.7599 18.6662C11.2171 18.1478 10.495 17.8589 9.74439 17.86C8.13201 17.86 6.85156 19.1639 6.85156 20.7529C6.85156 21.9383 7.56272 22.9341 8.55897 23.3849C8.51123 23.6691 8.48781 23.9538 8.48781 24.2623C8.48781 28.7197 13.6807 32.348 20.083 32.348C26.4852 32.348 31.6781 28.7436 31.6781 24.2623C31.6781 23.9776 31.6543 23.6691 31.607 23.3849C32.6028 22.9341 33.3139 21.9144 33.3139 20.729ZM13.4434 22.7918C13.4434 21.6536 14.368 20.729 15.5066 20.729C16.6447 20.729 17.5694 21.6536 17.5694 22.7918C17.5694 23.9299 16.6447 24.855 15.5066 24.855C14.368 24.8784 13.4434 23.9299 13.4434 22.7918ZM24.9913 28.2694C23.5685 29.6921 20.8653 29.7872 20.083 29.7872C19.2768 29.7872 16.5736 29.6683 15.1742 28.2694C14.9612 28.0559 14.9612 27.7239 15.1742 27.5105C15.3877 27.2974 15.7196 27.2974 15.9331 27.5105C16.8343 28.4117 18.7314 28.7197 20.083 28.7197C21.4346 28.7197 23.355 28.4117 24.2324 27.5105C24.4459 27.2974 24.7778 27.2974 24.9913 27.5105C25.1809 27.7239 25.1809 28.0559 24.9913 28.2694ZM24.6116 24.8784C23.4735 24.8784 22.5488 23.9538 22.5488 22.8156C22.5488 21.6775 23.4735 20.7529 24.6116 20.7529C25.7502 20.7529 26.6748 21.6775 26.6748 22.8156C26.6748 23.9299 25.7502 24.8784 24.6116 24.8784Z" fill="white"/>
                        <path d="M108.412 16.6268C109.8 16.6268 110.926 15.5014 110.926 14.1132C110.926 12.725 109.8 11.5996 108.412 11.5996C107.024 11.5996 105.898 12.725 105.898 14.1132C105.898 15.5014 107.024 16.6268 108.412 16.6268Z" fill="currentColor"/>
                        <path d="M72.5114 24.8309C73.7446 24.8309 74.4557 23.9063 74.4084 23.0051C74.385 22.5308 74.3373 22.2223 74.29 21.9854C73.5311 18.7133 70.8756 16.2943 67.7216 16.2943C63.9753 16.2943 60.9401 19.6853 60.9401 23.8586C60.9401 28.0318 63.9753 31.4228 67.7216 31.4228C70.0694 31.4228 71.753 30.5693 72.9622 29.2177C73.5549 28.5538 73.4365 27.5341 72.7249 27.036C72.1322 26.6329 71.3972 26.7752 70.8517 27.2256C70.3302 27.6765 69.3344 28.5772 67.7216 28.5772C65.825 28.5772 64.2126 26.941 63.8568 24.7832H72.5114V24.8309ZM67.6981 19.1637C69.4051 19.1637 70.8756 20.4915 71.421 22.3173H63.9752C64.5207 20.468 65.9907 19.1637 67.6981 19.1637ZM61.0824 17.7883C61.0824 17.0771 60.5609 16.5078 59.897 16.3894C57.8338 16.0813 55.8895 16.8397 54.7752 18.2391V18.049C54.7752 17.1717 54.0636 16.6267 53.3525 16.6267C52.5697 16.6267 51.9297 17.2667 51.9297 18.049V29.6681C51.9297 30.427 52.4985 31.0908 53.2574 31.1381C54.0875 31.1854 54.7752 30.5454 54.7752 29.7154V23.7162C54.7752 21.0608 56.7668 18.8791 59.5173 19.1876H59.802C60.5131 19.1399 61.0824 18.5233 61.0824 17.7883ZM109.834 19.306C109.834 18.5233 109.194 17.8833 108.412 17.8833C107.629 17.8833 106.989 18.5233 106.989 19.306V29.7154C106.989 30.4981 107.629 31.1381 108.412 31.1381C109.194 31.1381 109.834 30.4981 109.834 29.7154V19.306ZM88.6829 11.4338C88.6829 10.651 88.0429 10.011 87.2602 10.011C86.4779 10.011 85.8379 10.651 85.8379 11.4338V17.7648C84.8655 16.7924 83.6562 16.3182 82.2096 16.3182C78.4632 16.3182 75.4281 19.7091 75.4281 23.8824C75.4281 28.0557 78.4632 31.4466 82.2096 31.4466C83.6562 31.4466 84.8893 30.9485 85.8613 29.9761C85.9797 30.6405 86.5729 31.1381 87.2602 31.1381C88.0429 31.1381 88.6829 30.4981 88.6829 29.7154V11.4338ZM82.2334 28.6245C80.0518 28.6245 78.2971 26.5145 78.2971 23.8824C78.2971 21.2742 80.0518 19.1399 82.2334 19.1399C84.4151 19.1399 86.1698 21.2504 86.1698 23.8824C86.1698 26.5145 84.3912 28.6245 82.2334 28.6245ZM103.527 11.4338C103.527 10.651 102.887 10.011 102.104 10.011C101.322 10.011 100.681 10.651 100.681 11.4338V17.7648C99.7093 16.7924 98.5 16.3182 97.0534 16.3182C93.307 16.3182 90.2719 19.7091 90.2719 23.8824C90.2719 28.0557 93.307 31.4466 97.0534 31.4466C98.5 31.4466 99.7327 30.9485 100.705 29.9761C100.824 30.6405 101.416 31.1381 102.104 31.1381C102.887 31.1381 103.527 30.4981 103.527 29.7154V11.4338ZM97.0534 28.6245C94.8717 28.6245 93.1174 26.5145 93.1174 23.8824C93.1174 21.2742 94.8717 19.1399 97.0534 19.1399C99.235 19.1399 100.99 21.2504 100.99 23.8824C100.99 26.5145 99.235 28.6245 97.0534 28.6245ZM117.042 29.7392V19.1637H118.299C118.963 19.1637 119.556 18.6656 119.603 17.9779C119.651 17.2428 119.058 16.6267 118.347 16.6267H117.042V14.6347C117.042 13.8758 116.474 13.2119 115.715 13.1646C114.885 13.1173 114.197 13.7573 114.197 14.5874V16.6501H113.011C112.348 16.6501 111.755 17.1483 111.708 17.836C111.66 18.571 112.253 19.1876 112.964 19.1876H114.173V29.7631C114.173 30.5454 114.814 31.1854 115.596 31.1854C116.426 31.1381 117.042 30.5216 117.042 29.7392Z" fill="currentColor"/>
                    </svg>                                                   
                </a>         
            </div>
        </div>  -->
  <!-- Section: Design Block -->

</div>

</div>

</div> 


<footer style="background-color: #0f142a"class="p-4 ">
    <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="resources/img/logo/elecsys-logo-colored.png" class="h-8 mr-3" alt="FlowBite Logo" />
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
  // const slideshow = document.getElementById('slideshow');
  // const images = ['resources/img/Background Images/home_no_1_min.jpg', 'resources/img/Background Images/home_no_2_min.jpg', 'resources/img/Background Images/home_no_3_min.jpg', 'resources/img/Background Images/home_no_4_min.jpg', 'resources/img/Background Images/home_no_5_min.jpg', 'resources/img/Background Images/home_no_6_min.jpg']; // Add your image URLs here
  // let currentImageIndex = 0;
  
  // function changeBackgroundImage() {
  //   const nextImageIndex = (currentImageIndex + 1) % images.length;
  //   const nextImage = `url('${images[nextImageIndex]}')`;

  //   slideshow.style.backgroundImage = nextImage; // Set the new image
  //   slideshow.classList.add('dissolve-animation');

  //   setTimeout(() => {
  //     // slideshow.classList.remove('dissolve-animation');
  //     currentImageIndex = nextImageIndex;
  //   }, 2000); // Adjust this duration to match the animation duration
  // }

  // // Run the transition immediately on page load
  // changeBackgroundImage();

  // // Run the transition every 5 seconds
  // setInterval(changeBackgroundImage, 5000);

  const video = document.getElementById('slideshow');

function changeBackgroundVideo() {
  video.play();
}

// Run the video immediately on page load
changeBackgroundVideo();

// Run the video continuously
video.addEventListener('ended', function () {
  video.currentTime = 0; // Restart the video
  changeBackgroundVideo();
});
</script>
<script src="sample.js"></script>


<script>
  
// Get the button
let mybutton = document.getElementById("myBtn");
// mybutton.style.display = "none";
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
// mybutton.style.display = "none";
function scrollFunction() {
 
  if (document.body.scrollTop >1000 || document.documentElement.scrollTop > 1000) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "block";
  }
}
mybutton.style.transition = "opacity 3s";
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