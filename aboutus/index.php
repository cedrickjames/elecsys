
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
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollToPlugin.min.js"></script>

    <!-- browser logo -->
    <link rel="shortcut icon" href="resources/img/logo.png">
    <link rel="stylesheet" href="../css/style.css" />


    <script src="../node_modules/tw-elements/dist/js/index.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- back on top button css -->

<style>
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
#home{
    background-image: url('../resources/img/Air-Residences-Mall-Facade.jpg');

    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;

}
.elementor-background-overlay {
    background-color: transparent;
    background-image: linear-gradient(180deg,rgba(0,35,55,.17) 0%,rgba(0,35,55,.8) 100%);
    opacity: 1;
}
.title{
    font-family: var(--e-global-typography-583e54c-font-family),Sans-serif;
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
<body  class="static  bg-white dark:bg-white"  >
<a onclick="topFunction()" id="myBtn" class="bg-blue-600"  title="Go to top"><svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75L12 3m0 0l3.75 3.75M12 3v18" />
</svg></a> 

<!-- button go to top -->





    <!-- nav -->
    <?php require_once 'megamenu.php';?>
    <script>
      var activepage = document.getElementById("activeNav");
activepage.classList.add("border-b-4");
activepage.classList.add("border-cyan-600");
activepage.classList.add("text-cyan-600");





    </script>


<!-- main -->







 <!--banner section start -->
 <!-- Container for demo purpose -->
<div>


<div class="bg-gradient-to-r from-sky-950 from-10% to-transparent to-90% relative isolate overflow-hidden bg-gray-900  py-16 sm:py-24 md:py-20">
  <!-- <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center"> -->
  <svg viewBox="0 0 1097 845" aria-hidden="true" class="hidden transform-gpu blur-3xl sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:w-[68.5625rem]">
    <path fill="url(#10724532-9d81-43d2-bb94-866e98dd6e42)" fill-opacity=".2" d="M301.174 646.641 193.541 844.786 0 546.172l301.174 100.469 193.845-356.855c1.241 164.891 42.802 431.935 199.124 180.978 195.402-313.696 143.295-588.18 284.729-419.266 113.148 135.13 124.068 367.989 115.378 467.527L811.753 372.553l20.102 451.119-530.681-177.031Z" />
    <defs>
      <linearGradient id="10724532-9d81-43d2-bb94-866e98dd6e42" x1="1097.04" x2="-141.165" y1=".22" y2="363.075" gradientUnits="userSpaceOnUse">
        <stop stop-color="#776FFF" />
        <stop offset="1" stop-color="#FF4694" />
      </linearGradient>
    </defs>
  </svg>
  <svg viewBox="0 0 1097 845" aria-hidden="true" class="absolute left-1/2 -top-52 -z-10 w-[68.5625rem] -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu">
    <path fill="url(#8ddc7edb-8983-4cd7-bccb-79ad21097d70)" fill-opacity=".2" d="M301.174 646.641 193.541 844.786 0 546.172l301.174 100.469 193.845-356.855c1.241 164.891 42.802 431.935 199.124 180.978 195.402-313.696 143.295-588.18 284.729-419.266 113.148 135.13 124.068 367.989 115.378 467.527L811.753 372.553l20.102 451.119-530.681-177.031Z" />
    <defs>
      <linearGradient id="8ddc7edb-8983-4cd7-bccb-79ad21097d70" x1="1097.04" x2="-141.165" y1=".22" y2="363.075" gradientUnits="userSpaceOnUse">
        <stop stop-color="#776FFF" />
        <stop offset="1" stop-color="#FF4694" />
      </linearGradient>
    </defs>
  </svg>
  <!-- <div style="height: 450px" class="hidden md:block relative bg-white bg-opacity-0 w-full mx-auto max-w-7xl p-6 lg:p-8">
  <div style="height: 400px;" class="relative rounded-lg bg-white bg-opacity-10 w-full max-w-7xl px-6 lg:px-8">
  <div class="p-5 md:p-10 pr-2 lg:pr-10 max-w-lg md:max-w-xl lg:max-w-2xl absolute inset-y-0 right-0">
      <h2 class="text-right text-xl md:text-4xl font-bold tracking-tight text-white sm:text-6xl">Juan Dela Cruz</h2>
      <p class="justify text-right right-0 mt-6 text-lg leading-8 text-gray-300">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, consectetur! Culpa accusamus odit doloribus iste consequatur adipisci, unde impedit ad tenetur, dicta sint repudiandae dolor nulla accusantium. Ea, nobis quae!</p>
      <dd class="text-right text-2xl font-bold leading-9 tracking-tight text-white">Elecsys President</dd>
    </div>
</div>
<div style="height: 450px; background-image:url('../resources/img/ceo2.png'); background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
" class="rounded-lg left-10 lg:left-20 xl:left-40 top-0 absolute bg-amber-900 w-1/4 max-w-7xl px-6 lg:px-8">

</div>
<img class="h-auto max-w-lg rounded-lg" src="../resources/img/condominium-tall-blue-sky-skyscraper.jpg" alt="image description">

</div> -->
<!-- <h2 class="text-center mb-10 text-2xl font-bold tracking-tight text-white sm:text-4xl">Virtual Tour</h2> -->

<div class="flex justify-center">

<div id="default-carousel" class="relative w-full sm:w-4/5" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../resources/img/Background Images/home_no_1_min.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../resources/img/Background Images/home_no_2_min.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../resources/img/Background Images/home_no_3_min.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../resources/img/Background Images/home_no_4_min.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="../resources/img/Background Images/home_no_5_min.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

</div>

<!-- <section style=" height: 450px; background-image:url('../resources/img/ceo2.png'); background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;" class="block md:hidden top-0 block bg-white md:hidden m-10 " >
</section> -->

<!-- <div class="text-center block md:hidden p-5 md:p-10  w-full inset-y-0 right-0">
      <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Juan Dela Cruz</h2>
      <p class="justify  mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua. Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
      <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Elecsys President</dd>
    </div> -->

    <section class="mt-16 sm:mt-24 mb-22 " id="aboutus">
    <div class="mx-auto  w-5/6">
      <h2 class="text-2xl font-bold tracking-tight text-white sm:text-4xl">Excellence</h2>
      <p class="mt-6 text-lg text-justify leading-8 text-gray-300">Since its inception, Electronic Systems Manufacturing Corp. (Elecsys MFG) has developed an outstanding reputation for customer service, on time delivery and producing high quality products at very competitive prices. We are able to provide consignment and turnkey manufacturing solutions for through hole and surface mount assemblies, testing and right through to complete box builds.</p>
    </div>
    <div class="mx-auto  w-5/6">
      <h2 class="text-2xl font-bold tracking-tight text-white sm:text-4xl">Collaborative Manufacturing</h2>
      <p class="mt-6 text-lg text-justify leading-8 text-gray-300">When you work with Electronic Systems Manufacturing Corp (Elecsys MFG), you really do work with us. Creating working partnerships  with our customers enables us to better meet their individual needs whiles delivering products that exceed their expectations. We offer the skills and expertise of much larger contract manufacturers with flexibility, service and attention to detail.
</p>
    </div>
    <div class="mx-auto  w-5/6">
      <h2 class="text-2xl font-bold tracking-tight text-white sm:text-4xl">Adaptable Production Support</h2>
      <p class="mt-6 text-lg text-justify leading-8 text-gray-300">We understand that at times Engineering Change orders need to be applied to product that is already on the production floor or  that some rework may be required for various reasons. Electronic Systems Manufacturing Corp (Elecsys MFG) are more than happy to assist in this area giving our customer's every opportunity to achieve their goal.</p>
    </div>
    <div class="mx-auto  w-5/6">
      <h2 class="text-2xl font-bold tracking-tight text-white sm:text-4xl">Comprehensive Manufacturing Expertise</h2>
      <p class="mt-6 text-lg text-justify leading-8 text-gray-300">Our experienced staff with over 30 years' experience in the manufacturing of electronic assemblies offer assistance in providing design and manufacturing solutions for new product indroduction (NPI), Limited Pilot Production (LPP) all the way to mass production. We understand that not all customers have high volume and as such accommodate low and medium volumes as well as high mix low volume products. Electronic Systems Manufacturing Corp (Elecsys MFG) as standard practise will offer recommendations for manufacturing cost reductions. This will ensure that all our customers' products are manufactured not only at the highest quality but also for the best possible price.</p>
    </div>

  </section>

<div class="mx-auto mt-20  w-5/6">
<a type="button" href="../resources/documents/Elecsys-Profile-08042023-Revision-11.pdf" download="ElecSys Company Profile.pdf" class="w-full justify-center px-6 py-3.5 text-base font-medium text-white inline-flex items-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80">

  <svg lass="w-4 h-4 text-white mr-2"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
</svg>
Download Company Profile
</a>
</div>

<section class="mt-10 sm:mt-24 mb-22 flex justify-center p-2 sm:p-20  lg:p-0" id="virtual Tour">


<a href="../main.php#capabilities" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="../resources/img/Elecsys Images/mission.png" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Manufacturing Capabilities</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">State-of-the-art equipment with highly skilled operators having over 30 years of experience.</p>
    </div>
</a>

</section>
</div>


<!-- Section: Design Block -->

<!-- Container for demo purpose -->

</div>
<!-- Container -->



<!-- about us -->

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






<script src="../sample.js"></script>



    

<!-- flowbite javascript -->
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js">

  
</script>


<script>
  let mybutton = document.getElementById("myBtn");
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











</body>
</html>