<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SehatPluss</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="fixed top-0 w-full bg-blue-500 text-white p-4 z-50" id="navbar">
        <div class="container mx-auto flex justify-between">
            <a href="#" class="text-white no-underline">SehatPluss</a>
            <div>
                <a href="#home" class="transition duration-500 ease-in-out text-white no-underline px-4 py-4 hover:text-gray-100 hover:font-bold hover:bg-blue-700">Home</a>
                <a href="#about" class="transition duration-500 ease-in-out text-white no-underline px-4 py-4 hover:text-gray-100 hover:font-bold hover:bg-blue-700">About</a>
                <a href="#service" class="transition duration-500 ease-in-out text-white no-underline px-4 py-4 hover:text-gray-100 hover:font-bold hover:bg-blue-700">Service</a>
                <a href="#gallery" class="transition duration-500 ease-in-out text-white no-underline px-4 py-4 hover:text-gray-100 hover:font-bold hover:bg-blue-700">Gallery</a>
                <a href="#contact" class="transition duration-500 ease-in-out text-white no-underline px-4 py-4 hover:text-gray-100 hover:font-bold hover:bg-blue-700">Contact</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="transition duration-500 ease-in-out text-white no-underline px-4 py-4 hover:text-gray-100 hover:font-bold hover:bg-blue-700">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="transition duration-500 ease-in-out text-white no-underline px-4 py-4 hover:text-gray-100 hover:font-bold hover:bg-blue-700">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="transition duration-500 ease-in-out text-white no-underline px-4 py-4 hover:text-gray-100 hover:font-bold hover:bg-blue-700">Register</a>
                        @endif
                    @endauth
            @endif
            </div>
        </div>
    </nav>
    <script>
        window.onscroll = function() {myFunction()};

    function myFunction() {
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("navbar").style.transition = "background-color 0.6s ease-in-out, backdrop-filter 0.6s ease-in-out";
        document.getElementById("navbar").style.backgroundColor = "rgba(0, 0, 255, 0.5)";
        document.getElementById("navbar").style.backdropFilter = "blur(5px)";
        document.getElementById("navbar").style.boxShadow = "0 4px 2px -2px rgba(0, 0, 0, 0.2)";
      } else {
        document.getElementById("navbar").style.transition = "background-color 0.6s ease-in-out, backdrop-filter 0.6s ease-in-out";
        document.getElementById("navbar").style.backgroundColor = "blue";
        document.getElementById("navbar").style.backdropFilter = "none";
        document.getElementById("navbar").style.boxShadow = "none";
      }
    }
  </script>
  <header id="home" class="bg-white py-6 bg-center bg-no-repeat bg-gray-700 bg-blend-multiply" style="background-image: url('img/bg-hero.jpeg'); height: 70vh;">
    <div class="container mx-auto flex justify-center items-center h-full">
      <div class="text-center">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Welcome To SehatPluss</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Melangkah Menuju Kesehatan yang Lebih Baik, Bersama Sehat Pluss</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            @guest
                <a href="{{ route('register') }}" class="inline-flex justify-center items-center py-3 px-5 mr-4 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Get started
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            @endguest
            <a href="#service" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                Learn more
            </a>  
        </div>
      </div>
    </div>
  </header>
  <main class="mx-auto">
    <!-- about -->
    <section id="about" class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100"></polygon>
                </svg>

                <div class="pt-1"></div>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h2 class="my-6 text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl">
                            About me
                        </h2>

                        <p>
                            Salam Sehat dari tim SehatPluss! Kami adalah komunitas yang berkomitmen untuk menginspirasi dan mendukung perubahan positif dalam gaya hidup dan kesehatan Anda. Di sini, kami menyediakan informasi yang terpercaya dan bermanfaat tentang kesehatan, nutrisi, kebugaran, dan gaya hidup sehat secara menyeluruh. Sebagai bagian dari tim kami, bersama dengan kolega kami, berbagi keahlian dan pengalaman kami untuk membantu Anda mencapai kesejahteraan yang optimal. Kami percaya bahwa setiap langkah kecil menuju gaya hidup sehat adalah langkah yang bernilai besar. Dengan semangat ini, kami berkomitmen untuk menjadi mitra Anda dalam perjalanan kesehatan Anda. Mari bersama-sama menciptakan hidup yang lebih sehat dan lebih bahagia dengan SehatPluss!
                        </p>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover object-top sm:h-72 md:h-96 lg:w-full lg:h-full" src="img/2.jpg" alt="">
        </div>
    </section>
    <!-- end about -->
    <!-- start feature -->
    <div class="grid md:grid-cols-3 max-w-screen-lg mx-auto gap-10 my-16 px-5">

        <div class="flex gap-2 items-start flex-col ">
            <span class="text-red-600 bg-red-500/10 p-3 rounded-full"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
            <path d="M5.06152 12C5.55362 8.05369 8.92001 5 12.9996 5C17.4179 5 20.9996 8.58172 20.9996 13C20.9996 17.4183 17.4179 21 12.9996 21H8M13 13V9M11 3H15M3 15H8M5 18H10" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg></span>
            <div>
                <h3 class="font-semibold text-xl">Pelayanan Cepat</h3>
                <p class="mt-1 text-gray-500"> Kami memberikan pelayanan yang cepat dan efisien untuk memastikan kenyamanan dan keamanan pasien.</p>
            </div>
        </div>

        <div class="flex gap-4 items-start flex-col ">
            <span class="text-red-600 bg-red-500/10 p-3 rounded-full"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
            <path d="M20 8C18.537 5.00943 15.5536 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.6336 21 20.5039 17.4984 21 12.997M20.5 5.5V8H18M16.5 10.5V12.5M16.5 12.5V14.5M16.5 12.5H13.5V9.5M7.5 11.5V11C7.5 10.1716 8.17157 9.5 9 9.5C9.82843 9.5 10.5 10.1716 10.5 11V11.5C10.5 12.4043 7.96939 14.1788 7.5 14.5H10.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg></span>
            <div>
                <h3 class="font-semibold text-xl">Pelayanan 24 Jam</h3>
                <p class="mt-1 text-gray-500"> Kami siap melayani Anda kapanpun, 24 jam sehari, 7 hari seminggu.</p>
            </div>
        </div>


        <div class="flex gap-4 items-start flex-col ">
            <span class="text-red-600 bg-red-500/10 p-3 rounded-full"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9973 8.53055C11.1975 7.62155 9.8639 7.37703 8.86188 8.2094C7.85986 9.04177 7.71879 10.4334 8.50568 11.4179C8.97361 12.0033 10.1197 13.053 10.9719 13.8079C11.3237 14.1195 11.4996 14.2753 11.7114 14.3385C11.8925 14.3925 12.102 14.3925 12.2832 14.3385C12.4949 14.2753 12.6708 14.1195 13.0226 13.8079C13.8748 13.053 15.0209 12.0033 15.4888 11.4179C16.2757 10.4334 16.1519 9.03301 15.1326 8.2094C14.1134 7.38579 12.797 7.62155 11.9973 8.53055Z" stroke="#000000" stroke-width="2" stroke-linejoin="round"/>
            <path d="M3 7.2C3 6.07989 3 5.51984 3.21799 5.09202C3.40973 4.71569 3.71569 4.40973 4.09202 4.21799C4.51984 4 5.0799 4 6.2 4H17.8C18.9201 4 19.4802 4 19.908 4.21799C20.2843 4.40973 20.5903 4.71569 20.782 5.09202C21 5.51984 21 6.0799 21 7.2V20L17.6757 18.3378C17.4237 18.2118 17.2977 18.1488 17.1656 18.1044C17.0484 18.065 16.9277 18.0365 16.8052 18.0193C16.6672 18 16.5263 18 16.2446 18H6.2C5.07989 18 4.51984 18 4.09202 17.782C3.71569 17.5903 3.40973 17.2843 3.21799 16.908C3 16.4802 3 15.9201 3 14.8V7.2Z" stroke="#000000" stroke-width="2" stroke-linejoin="round"/>
            </svg></span>
            <div>
                <h3 class="font-semibold text-xl">Pelayanan Terbaik</h3>
                <p class="mt-1 text-gray-500"> Kami selalu berusaha memberikan pelayanan terbaik untuk kepuasan dan kenyamanan Anda.</p>
            </div>
        </div>
    </div>
    <!-- end feature -->
    <!-- strt service -->
    <section id="service" class="relative overflow-hidden bg-blue-500 pt-16 pb-32 space-y-24">
        <div>
            <h2 class="text-6xl text-center font-bold tracking-tight text-white">
                Our Services
            </h2>
        </div>
        <div class="relative">
            <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
                <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 ">
                    <div>
                        <div>
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-700">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                                <path d="M11 21H5.6C5.03995 21 4.75992 21 4.54601 20.891C4.35785 20.7951 4.20487 20.6422 4.10899 20.454C4 20.2401 4 19.9601 4 19.4V17.6841C4 17.0485 4 16.7306 4.04798 16.4656C4.27087 15.2344 5.23442 14.2709 6.46558 14.048C6.5425 14.0341 6.6237 14.0242 6.71575 14.0172C6.94079 14 7.05331 13.9914 7.20361 14.0026C7.35983 14.0143 7.4472 14.0297 7.59797 14.0722C7.74302 14.1131 8.00429 14.2315 8.52682 14.4682C8.98953 14.6778 9.48358 14.8304 10 14.917M19.8726 15.2038C19.8044 15.2079 19.7357 15.21 19.6667 15.21C18.6422 15.21 17.7077 14.7524 17 14C16.2923 14.7524 15.3578 15.2099 14.3333 15.2099C14.2643 15.2099 14.1956 15.2078 14.1274 15.2037C14.0442 15.5853 14 15.9855 14 16.3979C14 18.6121 15.2748 20.4725 17 21C18.7252 20.4725 20 18.6121 20 16.3979C20 15.9855 19.9558 15.5853 19.8726 15.2038ZM15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-bold tracking-tight text-white">
                                Konsultasi Kesehatan Personal
                            </h2>
                            <p class="mt-4 text-lg text-gray-300">
                                Menyediakan layanan konsultasi kesehatan personal dengan profesional kesehatan terampil seperti dokter umum, ahli gizi, atau pelatih kebugaran. Konsultasi ini dapat dilakukan secara online atau langsung, membantu individu untuk mendapatkan saran dan panduan yang spesifik sesuai dengan kebutuhan kesehatan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0">
                    <div class="-mr-48 pl-6 md:-mr-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                        <img loading="lazy" width="647" height="486"
                            class="w-full rounded-xl shadow-2xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                            style="color:transparent" src="https://images.unsplash.com/photo-1623658061186-bd1aff8c2a13?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
                <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 lg:col-start-2">
                    <div>
                        <div>
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-700">
                               <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white">
                                <path d="M20 8C18.537 5.00943 15.5536 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.6336 21 20.5039 17.4984 21 12.997M20.5 5.5V8H18M16.5 10.5V12.5M16.5 12.5V14.5M16.5 12.5H13.5V9.5M7.5 11.5V11C7.5 10.1716 8.17157 9.5 9 9.5C9.82843 9.5 10.5 10.1716 10.5 11V11.5C10.5 12.4043 7.96939 14.1788 7.5 14.5H10.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-bold tracking-tight text-white">
                                Layanan Konsultasi Kesehatan Online 24/7
                            </h2>
                            <p class="mt-4 text-lg text-gray-300">
                                Menyediakan layanan konsultasi kesehatan online yang tersedia 24 jam sehari, 7 hari seminggu, yang memungkinkan klien untuk mengajukan pertanyaan kesehatan atau mendapatkan saran darurat kapan saja dan di mana saja melalui platform online yang aman dan terpercaya.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0">
                    <div class="-ml-48 pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                        <img alt="Inbox user interface" loading="lazy" width="647" height="486"
                            class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none"
                            style="color:transparent" src="https://images.unsplash.com/photo-1630128281142-abf11ea2affe?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end service -->
    <!-- start gallery -->
    <section id="gallery" class="h-screen bg-gray-500 h-full py-6 sm:py-8 lg:py-12">
        <div class="mx-auto mt-16 max-w-screen-2xl px-4 md:px-8">
            <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
                <div class="flex items-center gap-12">
                    <h2 class="text-2xl font-bold text-green-500 lg:text-3xl dark:text-white">Galeri Rumah Sakit</h2>
                    <p class="hidden max-w-screen-sm text-white dark:text-gray-300 md:block">
                        Ini adalah bagian dari beberapa teks pengisi sederhana,
                        juga dikenal sebagai teks pengganti. Ini memiliki beberapa karakteristik dari teks yang ditulis nyata.
                    </p>
                </div>
                <a href="#"
                    class="inline-block rounded-lg border bg-white dark:bg-gray-700 dark:border-none px-4 py-2 text-center text-sm font-semibold text-gray-500 dark:text-gray-200 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                    Lebih Banyak
                </a>
            </div>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                <!-- gambar - mulai -->
                <a href="#"
                    class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                    <img src="https://source.unsplash.com/400x240/?hospital" loading="lazy" alt="Foto oleh Unsplash" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Rumah Sakit</span>
                </a>
                <!-- gambar - akhir -->
                <!-- gambar - mulai -->
                <a href="#"
                    class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                    <img src="https://source.unsplash.com/400x240/?doctor" loading="lazy" alt="Foto oleh Unsplash" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Dokter</span>
                </a>
                <!-- gambar - akhir -->
                <!-- gambar - mulai -->
                <a href="#"
                    class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                    <img src="https://source.unsplash.com/400x240/?nurse" loading="lazy" alt="Foto oleh Unsplash" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Perawat</span>
                </a>
                <!-- gambar - akhir -->
                <!-- gambar - mulai -->
                <a href="#"
                    class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                    <img src="https://source.unsplash.com/400x240/?surgery" loading="lazy" alt="Foto oleh Unsplash" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
                    <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Operasi</span>
                </a>
                <!-- gambar - akhir -->
            </div>
        </div>
    </section>
    <!-- end gallery -->
    <!-- start contact -->
    <section id="contact" class="bg-blue-100 dark:bg-teal-800">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
            <div class="mb-4">
                <div class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
                    <p class="text-base font-semibold uppercase tracking-wide text-green-600 dark:text-green-200">
                        Contact
                    </p>
                    <h2 class="font-heading mb-4 font-bold tracking-tight text-gray-900 dark:text-white text-3xl sm:text-5xl">
                        Terhubung dengan Kami
                    </h2>
                    <p class="mx-auto mt-4 max-w-3xl text-xl text-gray-600 dark:text-teal-400">Jika Anda memiliki pertanyaan atau ingin berdiskusi lebih lanjut tentang kesehatan, jangan ragu untuk menghubungi kami.</p>
                </div>
            </div>
            <div class="flex items-stretch justify-center">
                <div class="grid md:grid-cols-2">
                    <div class="h-full pr-6">
                        <p class="mt-3 mb-12 text-lg text-gray-600 dark:text-teal-400">
                            Tim SehatPluss selalu siap untuk membantu Anda dalam perjalanan kesehatan Anda. Jangan ragu untuk menghubungi kami untuk informasi lebih lanjut tentang layanan kami atau untuk membuat janji konsultasi.
                        </p>
                        <ul class="mb-6 md:mb-0">
                            <li class="flex">
                                <div class="flex h-10 w-10 items-center justify-center rounded bg-green-900 text-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4 mb-4">
                                    <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Alamat Kami</h3>
                                    <p class="text-gray-600 dark:text-teal-400">1230 Jalan SehatPluss</p>
                                    <p class="text-gray-600 dark:text-teal-400">Kota SehatPluss, Indonesia</p>
                                </div>
                            </li>
                            <li class="flex">
                                <div class="flex h-10 w-10 items-center justify-center rounded bg-green-900 text-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                        <path d="M15 7a2 2 0 0 1 2 2"></path>
                                        <path d="M15 3a6 6 0 0 1 6 6"></path>
                                    </svg>
                                </div>
                                <div class="ml-4 mb-4">
                                    <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Kontak</h3>
                                    <p class="text-gray-600 dark:text-teal-400">Telepon: +62 123 456 7890</p>
                                    <p class="text-gray-600 dark:text-teal-400">Email: info@sehatpluss.my.id</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card h-fit max-w-6xl p-5 md:p-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3989.25922756495!2d100.42738691085529!3d-0.9591975990274973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMMKwNTcnMzMuMSJTIDEwMMKwMjUnNDcuOSJF!5e0!3m2!1sid!2sid!4v1713417525337!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->
  </main>
<div class="bg-gray-100">
    <div class="max-w-screen-lg px-4 sm:px-6 text-gray-800 sm:grid md:grid-cols-4 sm:grid-cols-2 mx-auto">
        <div class="p-5">
            <h3 class="font-bold text-xl text-indigo-600">SehatPluss</h3>
        </div>
        <div class="p-5">
            <div class="text-sm uppercase text-indigo-600 font-bold">Support</div>
            <a class="my-3 block" href="/#">Help Center <span class="text-teal-600 text-xs p-1"></span></a><a
                class="my-3 block" href="/privacy-policy">Privacy Policy <span class="text-teal-600 text-xs p-1"></span></a><a
                class="my-3 block" href="/terms-of-service">Terms of Service <span class="text-teal-600 text-xs p-1"></span></a>
        </div>
        <div class="p-5">
            <div class="text-sm uppercase text-indigo-600 font-bold">Contact us</div>
            <a class="my-3 block" href="/#">Padang, Koto Lalang, Kec. Lubuk Kilangan, Kota Padang, Sumatera Barat 25156
                <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">info@sehatpluss.my.id
                <span class="text-teal-600 text-xs p-1"></span></a>
        </div>
    </div>
</div>

<footer class="bg-gray-100 pt-2">
    <div class="flex pb-5 px-3 m-auto pt-5 border-t text-gray-800 text-sm flex-col
      max-w-screen-lg items-center">
        <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
            <a href="/#" class="w-6 mx-1">
                <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                    viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                    style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="Twitter" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                  5.373,-12 12,-12c6.627,0 12,5.373 12,12Zm-6.465,-3.192c-0.379,0.168
                  -0.786,0.281 -1.213,0.333c0.436,-0.262 0.771,-0.676
                  0.929,-1.169c-0.408,0.242 -0.86,0.418 -1.341,0.513c-0.385,-0.411
                  -0.934,-0.667 -1.541,-0.667c-1.167,0 -2.112,0.945 -2.112,2.111c0,0.166
                  0.018,0.327 0.054,0.482c-1.754,-0.088 -3.31,-0.929
                  -4.352,-2.206c-0.181,0.311 -0.286,0.674 -0.286,1.061c0,0.733 0.373,1.379
                  0.94,1.757c-0.346,-0.01 -0.672,-0.106 -0.956,-0.264c-0.001,0.009
                  -0.001,0.018 -0.001,0.027c0,1.023 0.728,1.877 1.694,2.07c-0.177,0.049
                  -0.364,0.075 -0.556,0.075c-0.137,0 -0.269,-0.014 -0.397,-0.038c0.268,0.838
                  1.048,1.449 1.972,1.466c-0.723,0.566 -1.633,0.904 -2.622,0.904c-0.171,0
                  -0.339,-0.01 -0.504,-0.03c0.934,0.599 2.044,0.949 3.237,0.949c3.883,0
                  6.007,-3.217 6.007,-6.008c0,-0.091 -0.002,-0.183 -0.006,-0.273c0.413,-0.298
                  0.771,-0.67 1.054,-1.093Z"></path>
                </svg>
            </a>
            <a href="/#" class="w-6 mx-1">
                <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                    viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                    style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="Facebook" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                  5.373,-12 12,-12c6.627,0 12,5.373
                  12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422
                  0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784
                  -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z"></path>
                </svg>
            </a>
            <a href="/#" class="w-6 mx-1">
                <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                    viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                    style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <g id="Layer_1">
                        <circle id="Oval" cx="12" cy="12" r="12"></circle>
                        <path id="Shape" d="M19.05,8.362c0,-0.062 0,-0.125 -0.063,-0.187l0,-0.063c-0.187,-0.562
                     -0.687,-0.937 -1.312,-0.937l0.125,0c0,0 -2.438,-0.375 -5.75,-0.375c-3.25,0
                     -5.75,0.375 -5.75,0.375l0.125,0c-0.625,0 -1.125,0.375
                     -1.313,0.937l0,0.063c0,0.062 0,0.125 -0.062,0.187c-0.063,0.625 -0.25,1.938
                     -0.25,3.438c0,1.5 0.187,2.812 0.25,3.437c0,0.063 0,0.125
                     0.062,0.188l0,0.062c0.188,0.563 0.688,0.938 1.313,0.938l-0.125,0c0,0
                     2.437,0.375 5.75,0.375c3.25,0 5.75,-0.375 5.75,-0.375l-0.125,0c0.625,0
                     1.125,-0.375 1.312,-0.938l0,-0.062c0,-0.063 0,-0.125
                     0.063,-0.188c0.062,-0.625 0.25,-1.937 0.25,-3.437c0,-1.5 -0.125,-2.813
                     -0.25,-3.438Zm-4.634,3.927l-3.201,2.315c-0.068,0.068 -0.137,0.068
                     -0.205,0.068c-0.068,0 -0.136,0 -0.204,-0.068c-0.136,-0.068 -0.204,-0.204
                     -0.204,-0.34l0,-4.631c0,-0.136 0.068,-0.273 0.204,-0.341c0.136,-0.068
                     0.272,-0.068 0.409,0l3.201,2.316c0.068,0.068 0.136,0.204
                     0.136,0.34c0.068,0.136 0,0.273 -0.136,0.341Z" style="fill: rgb(255, 255, 255);"></path>
                    </g>
                </svg>
            </a>
            <a href="/#" class="w-6 mx-1">
                <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                    viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                    style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="Shape" d="M7.3,0.9c1.5,-0.6 3.1,-0.9 4.7,-0.9c1.6,0 3.2,0.3 4.7,0.9c1.5,0.6 2.8,1.5
                  3.8,2.6c1,1.1 1.9,2.3 2.6,3.8c0.7,1.5 0.9,3 0.9,4.7c0,1.7 -0.3,3.2
                  -0.9,4.7c-0.6,1.5 -1.5,2.8 -2.6,3.8c-1.1,1 -2.3,1.9 -3.8,2.6c-1.5,0.7
                  -3.1,0.9 -4.7,0.9c-1.6,0 -3.2,-0.3 -4.7,-0.9c-1.5,-0.6 -2.8,-1.5
                  -3.8,-2.6c-1,-1.1 -1.9,-2.3 -2.6,-3.8c-0.7,-1.5 -0.9,-3.1 -0.9,-4.7c0,-1.6
                  0.3,-3.2 0.9,-4.7c0.6,-1.5 1.5,-2.8 2.6,-3.8c1.1,-1 2.3,-1.9
                  3.8,-2.6Zm-0.3,7.1c0.6,0 1.1,-0.2 1.5,-0.5c0.4,-0.3 0.5,-0.8 0.5,-1.3c0,-0.5
                  -0.2,-0.9 -0.6,-1.2c-0.4,-0.3 -0.8,-0.5 -1.4,-0.5c-0.6,0 -1.1,0.2
                  -1.4,0.5c-0.3,0.3 -0.6,0.7 -0.6,1.2c0,0.5 0.2,0.9 0.5,1.3c0.3,0.4 0.9,0.5
                  1.5,0.5Zm1.5,10l0,-8.5l-3,0l0,8.5l3,0Zm11,0l0,-4.5c0,-1.4 -0.3,-2.5
                  -0.9,-3.3c-0.6,-0.8 -1.5,-1.2 -2.6,-1.2c-0.6,0 -1.1,0.2 -1.5,0.5c-0.4,0.3
                  -0.8,0.8 -0.9,1.3l-0.1,-1.3l-3,0l0.1,2l0,6.5l3,0l0,-4.5c0,-0.6 0.1,-1.1
                  0.4,-1.5c0.3,-0.4 0.6,-0.5 1.1,-0.5c0.5,0 0.9,0.2 1.1,0.5c0.2,0.3 0.4,0.8
                  0.4,1.5l0,4.5l2.9,0Z"></path>
                </svg>
            </a>
            <a href="/#" class="w-6 mx-1">
                <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                    viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                    style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="Combined-Shape" d="M12,24c6.627,0 12,-5.373 12,-12c0,-6.627 -5.373,-12 -12,-12c-6.627,0
                  -12,5.373 -12,12c0,6.627 5.373,12 12,12Zm6.591,-15.556l-0.722,0c-0.189,0
                  -0.681,0.208 -0.681,0.385l0,6.422c0,0.178 0.492,0.323
                  0.681,0.323l0.722,0l0,1.426l-4.675,0l0,-1.426l0.935,0l0,-6.655l-0.163,0l-2.251,8.081l-1.742,0l-2.222,-8.081l-0.168,0l0,6.655l0.935,0l0,1.426l-3.74,0l0,-1.426l0.519,0c0.203,0
                  0.416,-0.145 0.416,-0.323l0,-6.422c0,-0.177 -0.213,-0.385
                  -0.416,-0.385l-0.519,0l0,-1.426l4.847,0l1.583,5.704l0.042,0l1.598,-5.704l5.021,0l0,1.426Z"></path>
                </svg>
            </a>
        </div>
        <div class="my-5">© Copyright 2024. SehatPluss.</div>
    </div>
</footer>
</body>
</html>