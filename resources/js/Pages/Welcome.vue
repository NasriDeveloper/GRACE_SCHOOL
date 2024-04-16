
<script setup>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';
import {  Link } from '@inertiajs/vue3';


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});


// Import Swiper styles

</script>
<template>
  <div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking website</title>
    <link rel="stylesheet" href="homes/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-color-primary text-color-white tracking-wider">
    <img src="homes/img/logo/logo.png" alt="Report Photo" width="150px" height="150px">
      <nav class="bg-red-700 text-white p-4 fixed top-0 w-full z-10">
  <div class="max-w-screen-xl mx-auto flex justify-between items-center">
    <a href="#" class="text-2xl font-semibold">
      <img src="homes/img/logo/logo.png" class="h-8" alt="Flowbite Logo" />
      Graceschools
    </a>
    
    <div class="flex items-center space-x-4">
      <div v-if="canLogin">
        <template v-if="$page.props.auth.user">
          <li><Link :href="route('dashboard')">Dashboard</Link></li>
        </template>
        <template v-else>
          <li><Link :href="route('login')">LOGIN</Link></li>
          <li v-if="canRegister"><Link :href="route('register')">REGISTER</Link></li>
        </template>
      </div>
    </div>
  </div>
</nav><br><br>
   

    <main>
        <section id="home" class="relative">

            <div class="blob1"></div>

            <div class="blob2"></div>

            <div class="container py-20">
                <div class="flex flex-col items-center z-20 md:flex-row">
                    <div class="text-center mb-12 md:text-left md:w-1/2 md:pr-10">
                      <h1 class="title mb-4" style="font-size: 3.5rem;">WELCOME TO</h1><br>
                      <h1 class="title mb-4" style="font-size: 3.5rem;">GRACESCHOOLS</h1><br>
                      <h1 class="title mb-4" style="font-size: 3.5rem;">KIGAMBONI.</h1><br><br><br>
                        <p class="leading-relaxed mb-10 text-white">
                         "Welcome to GraceSchools, where students from standards 1 through 7 
                         thrive under the guidance of experienced teachers dedicated 
                         to nurturing young minds for a bright future."</p>
                        <button class="btn">WELCOME</button>
                    </div>

                    <div class="md:w-1/2">
                        <img src="homes/img/logo/grace1.JPG" alt="" class="rounded-full">
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="bg-color-primary-light">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4" style="font-size: 4.5rem;">ABOUT US</h4><br>
                    <h1 class="title">Some Few Information About Us.</h1>
                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 lg:gap-8 px-4 sm:px-6 lg:px-8">
                    <!-- card no 1 -->
                    <div class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-calendar-days text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold py-4" style="font-size: 2.5rem;">SCHOOL LOCATION.</h3><br><br><br><br>
                        <p class="leading-relaxed text-white">"GraceSchools Kigamboni is located on Mbuyuni Kwa Mchina Street."</p>
                    </div>

                    <!-- card no 2 -->
                    <div class="bg-color-primary-dark border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-chart-column text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold py-4" style="font-size: 2.5rem;">SUBJECTS INFO.</h3><br><br><br><br>
                        <p class="leading-relaxed text-white">"GraceSchools Kigamboni offers eleven subjects and follows the Tanzania syllabus."</p>
                    </div>

                    <!-- card no 3 -->
                    <div class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-phone text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold py-4" style="font-size: 2.5rem;">BOARDING</h3><br><br><br><br>
                        <p class="leading-relaxed text-white">We have boarding services for standard seven only.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="saving-money">
            <div class="container py-20 relative">
                <div class="blob1"></div>

                <div class="blob2"></div>
                
                <div class="flex flex-col items-center justify-between md:flex-row">
                    <div class="mb-12 md:w-1/2">
                        <img src="homes/img/logo/grace1.JPG" alt="">
                    </div>

                    <div class="text-center md:text-left md:w-1/2 md:ml-20">
                        <h4 class="font-bold text-color-secondary mb-4" style="font-size: 4.5rem;">PAYMENT</h4><br>
                        <h4 class="font-bold text-color-secondary mb-4" style="font-size: 4.5rem;">MODELS</h4><br>
                        <h1 class="title mb-4">Pay Us Through This Way</h1>
                        <p class="leading-relaxed mb-10 text-white">"To facilitate payment for services at
                           GraceSchools Kigamboni, clients have the option to utilize the banking services provided by National Microfinance Bank (NMB) and Cooperative Rural Development Bank (CRDB), offering convenient and
                           secure transactions through these trusted financial institutions."</p>
                        <button class="btn"></button>
                    </div>
                </div>
            </div>
        </section>

        <section id="how-it-works" class="bg-color-primary-light">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4" style="font-size: 4.5rem;">WHY</h4><br>
                    <h4 class="font-bold text-color-secondary mb-4" style="font-size: 4.5rem;">US?</h4>
                    <h1 class="title">Why Student Should Learn At Graceshools?</h1>
                </div>

                <div class="flex flex-col items-center justify-between space-y-6 md:flex-row md:space-y-0 md:space-x-6">
                    <!-- card 1  -->
                    <div class="text-center cursor-pointer">
                        <div class="relative bg-color-primary-dark inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                            <p class="text-6xl lg:after:content-[''] lg:after:flex lg:after:bg-[url('/img/line.png')] lg:after:absolute lg:after:top-4 lg:after:left-32 2xl:after:left-52 lg:after:bg-no-repeat lg:after:h-7 lg:after:w-52">1</p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Holistic Learning Environment:</h3>
                        <p class="leading-relaxed">"At GraceSchools, we foster a holistic learning 
                          environment where students not only excel academically but also develop 
                          essential life skills, critical thinking abilities, and a passion for lifelong 
                          learning. Our comprehensive curriculum goes beyond textbooks, emphasizing real-world 
                          applications and hands-on experiences to 
                          prepare students for success in a dynamic global society."</p>
                    </div>

                    <!-- card 2  -->
                    <div class="text-center cursor-pointer">
                        <div class="relative inline-block px-6 py-3 rounded-lg cursor-pointer bg-color-secondary">
                            <p class="text-6xl lg:after:content-[''] lg:after:flex lg:after:bg-[url('/img/line-bottom.png')] lg:after:absolute lg:after:top-10 lg:after:left-32 2xl:after:left-52 lg:after:bg-no-repeat lg:after:h-7 lg:after:w-52">2</p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Experienced and Dedicated Faculty:</h3>
                        <p class="leading-relaxed">"Our team of experienced and dedicated educators is 
                          committed to nurturing the individual talents and potential of every student. 
                          With a focus on personalized attention and mentorship, our faculty members provide 
                          guidance, support, and encouragement, empowering students to achieve 
                          their goals and thrive academically, socially, and emotionally."</p>
                    </div>
                <!-- card 3  -->
                    <div class="text-center cursor-pointer">
                        <div class="relative bg-color-primary-dark inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                            <p class="text-6xl">3</p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Innovative Learning Resources and Facilities:</h3>
                        <p class="leading-relaxed">"At GraceSchools, we provide access to state-of-the-art 
                          learning resources and facilities designed to inspire curiosity, creativity, 
                          and exploration. From modern classrooms equipped with interactive technology 
                          to well-equipped laboratories, libraries, and extracurricular facilities, 
                          we offer students a stimulating environment where they can discover their passions, 
                          explore new interests, 
                          and reach their full potential."</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonial">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4" style="font-size: 4.5rem;">ABOUT THIS SYSTEM.</h4><br>
                    <h4 class="font-bold text-color-secondary mb-4" style="font-size: 4.5rem;">SYSTEM.</h4><br>
                    <h1 class="title">All About This GraceSchools System Explained Here.</h1>
                </div>

                <!-- review container  -->
                <div class="mt-8">
                    <div class="flex items-center justify-center flex-wrap">
                        <img src="homes/img/logo/grace1.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic active-pic" onclick="showReview()">
                        <img src="homes/img/logo/grace1.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                        <img src="homes/img/logo/grace1.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                        <img src="homes/img/logo/grace1.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                        <img src="homes/img/logo/grace1.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                    </div>

                    <div class="grid place-items-center text-center m-auto md:w-4/5 min-h-[40vh]">
                        <div class="user-text active-text">
                            <p class="md:text-2xl mb-6">At GraceSchools Kigamboni, 
                              we pride ourselves on our cutting-edge system designed to enhance communication and engagement between parents, students, and educators. Our robust platform not only facilitates academic progress tracking but also ensures seamless interaction between all stakeholders in the learning process.

One of the standout features of our system is its ability to generate 
comprehensive reports and deliver them directly to parents through the platform. These reports provide valuable insights into students' academic performance, attendance records, and overall progress. With just a few clicks, parents can access detailed information about their child's achievements, areas for improvement, and feedback from teachers.

However, with this convenience comes the responsibility for parents 
to safeguard their login credentials carefully. Given the sensitive nature of the data accessible through our system, it is imperative that parents treat their login credentials with the utmost care and caution. This includes choosing strong, unique passwords, refraining from sharing login information with others, and logging out of their accounts after each session.

Additionally, we encourage parents to regularly monitor their 
accounts for any suspicious activity and to promptly report any concerns to our support team. By taking proactive measures to protect their credentials, parents can help ensure the security and privacy of their child's academic information.

In conclusion, the system at GraceSchools Kigamboni empowers parents with convenient access to comprehensive reports and insights into their child's academic journey. However, it is crucial for parents to prioritize the security of their login credentials to safeguard the confidentiality and integrity of their child's data. 
Together, we can work towards creating a safe, supportive, and collaborative learning environment for every student at GraceSchools Kigamboni.</p>
                            
                        </div>

                        <div class="user-text">
                            <p class="md:text-2xl mb-6">"This should be used to tell a story and include any testimonials you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Vera Duncan</h4>
                            <p>Flutter developer</p>
                        </div>

                        <div class="user-text">
                            <p class="md:text-2xl mb-6">"This should be used to tell a story and include any testimonials you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Pirtle Karol</h4>
                            <p>Android developer</p>
                        </div>

                        <div class="user-text">
                            <p class="md:text-2xl mb-6">"This should be used to tell a story and include any testimonials you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Mark Joe</h4>
                            <p>React developer</p>
                        </div>

                        <div class="user-text">
                            <p class="md:text-2xl mb-6">"This should be used to tell a story and include any testimonials you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Leila Domniuc</h4>
                            <p>Angular developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


       

        <section id="contact">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Have A Questation</h4>
                    <h1 class="title">Get In Touch</h1>
                </div>


                <form>
                    <div class="w-full m-auto text-center md:w-2/3">
                        <div class="text-color-primary-dark grid gap-6 mb-6 md:grid-cols-2">
                            <input type="text" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Name">

                <input type="email" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Email">

                <input type="tel" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Phone">

                <input type="text" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Company">
                        </div>


                        <textarea rows="4" class="text-color-primary-dark bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Message"></textarea>

                        <button class="btn mt-10">Send Message</button>
                    </div>
                </form>
            </div>
        </section>

        <section id="footer">
            <div class="bg-color-primary-dark relative">
                <div class="container py-10">
                    <div class="grid gap-10 md:grid-cols-3 pb-10">
                        <div class="space-y-6">
                            <h4 class="font-bold text-lg">About App</h4>
                            <p class="leading-relaxed">This Should Be Used To Tell A Story And Include Any Testimonials You Might Have About Your Product Or Service For Your Clients</p>
                            <div class="flex gap-5 items-center">
                                <p>Follow Us</p>
                                    <i class="fa-brands fa-facebook-f cursor-pointer hover:text-color-secondary"></i>
                                    <i class="fa-brands fa-twitter cursor-pointer hover:text-color-secondary"></i>
                                    <i class="fa-brands fa-youtube cursor-pointer hover:text-color-secondary"></i>
                                    <i class="fa-brands fa-instagram cursor-pointer hover:text-color-secondary"></i>
                            </div>
                        </div>
                        <div class="flex justify-between md:justify-around">
                            <div class="space-y-6">
                                <h4 class="font-bold text-lg">Quick Links</h4>
                                <ul class="space-y-3">
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#">Home</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#features">Features</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#testimonial">Testimonial</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#pricing">Pricing</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#blog">Blog</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#contact">Contact</a></li>

                                </ul>
                            </div>

                            <div class="space-y-6">
                                <h4 class="font-bold text-lg">Help</h4>
                                <ul class="space-y-3">
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#">About Us</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#features">Partners</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#testimonial">Career</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#pricing">Reviews</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#blog">Terms & Conditions</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#contact">Help</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="space-y-6">
                            <h4 class="font-bold text-lg">Newsletter</h4>
                            <p class="leading-relaxed">Subscribe With Email And Loads Of News Will Be Sent To You</p>
                            <div class="flex items-center">
                                <input type="text" class="w-3/4 text-color-gray bg-color-white p-2 lg:p-3 rounded-l-md focus:outline-none" placeholder="Enter Your Email">
                                
                                <button type="submit" class="bg-color-secondary px-4 py-2 lg:px-5 lg:py-3 rounded-r-md hover:opacity-90">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="flex justify-center pt-10 border-t border-color-gray">
                        <p>2023 &copy; LightCode. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>


   
</body>
</html>
  </div>
</template>

<style>

.rounded-full {
    border-radius: 30%;
}

</style>

