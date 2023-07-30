<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>            
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="font-poppins app-body">
    <nav id="menu" x-data="{ open: false }" class="w-full bg-black-101 lg:bg-blue-101">
        <div class="container mx-auto px-4 py-6 flex items-center justify-between overflow-x-none">
            <div class="brand z-50">
                <a href="">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
            
            <div class="telp flex font-semibold text-black-101">
                @guest
                    +6281288450678
                    @if(Route::has('regiter'))
                        <ul class="flex items-center z-50">
                            <li class="px-2 font-semibold hover:text-blue-101">
                                <a href="/register">Register</a>
                            </li>
                        </ul>
                    @endif
                    @else
                        <ul class="flex flex-col lg:flex-row items-center z-50">
                            <li class="px-2 font-semibold hover:text-blue-101">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            @can('admin-user')
                            <li class="px-2 font-semibold hover:text-blue-101">
                                <a href="/admin">Admin</a>
                            </li>
                            @endcan
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                @endguest
                <div class="-mr-2 flex items-center sm:hidden">
                <button  @click="open = ! open" class="cursor-pointer">
                <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 7.28595 22 4.92893 20.5355 3.46447C19.0711 2 16.714 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355ZM18.75 16C18.75 16.4142 18.4142 16.75 18 16.75H6C5.58579 16.75 5.25 16.4142 5.25 16C5.25 15.5858 5.58579 15.25 6 15.25H18C18.4142 15.25 18.75 15.5858 18.75 16ZM18 12.75C18.4142 12.75 18.75 12.4142 18.75 12C18.75 11.5858 18.4142 11.25 18 11.25H6C5.58579 11.25 5.25 11.5858 5.25 12C5.25 12.4142 5.58579 12.75 6 12.75H18ZM18.75 8C18.75 8.41421 18.4142 8.75 18 8.75H6C5.58579 8.75 5.25 8.41421 5.25 8C5.25 7.58579 5.58579 7.25 6 7.25H18C18.4142 7.25 18.75 7.58579 18.75 8Z" fill="#52eff8"></path> </g></svg>
                </button>
                </div>
            </div>
        </div>
        <div id="nav-collapse" :class="{'block': open, 'hidden': ! open}" class="hidden lg:flex relative w-full top-0 lg:-top-60 justify-center">
                <ul class="flex flex-col lg:flex-row items-center z-50 text-blue-102 ">
                    <li class="px-2 mb-2 lg:mb-0 font-semibold hover:text-blue-101">
                        <a href="#home" class="page-scroll">Home</a>
                    </li>
                    <li class="px-2 mb-2 lg:mb-0 font-semibold hover:text-blue-101">
                        <a href="#about" class="page-scroll">About</a>
                    </li>
                    <li class="px-2 mb-2 lg:mb-0 font-semibold hover:text-blue-101">
                        <a href="#project" class="page-scroll">Projects</a>
                    </li>
                </ul>
            </div>
    </nav>
    <!-- Home -->
    <section id="home">
        <div class="w-full bg-black-101 lg:bg-blue-101 h-537">
            <div class="bg absolute inset-x-0 top-0">
                <svg class="hidden lg:flex" xmlns="http://www.w3.org/2000/svg" width="1000" height="657" viewBox="0 0 1000 657" fill="none">
                    <path d="M0 0H1000L849.658 768H0V0Z" fill="#010031"/>
                </svg>
            </div>
            <!-- Animate.css -->
            <!-- <div id="home-content" class="relative flex inset-y-0">
                <div class="side-content container mx-auto px-4">
                    <div class="text-white text-24px leading-normal animate__animated animate__fadeInDown">Let’s make the best website</div>
                    <div class="relative text-gray-101 text-48 top-45 font-kandel leading-normal animate__animated animate__fadeInTopLeft animate__slow">Web can make</div>
                    <div class="relative text-gray-101 text-48 top-60 font-kandel leading-normal animate__animated animate__fadeInTopLeft animate__slow">your life easier</div>
                    <div class="relative text-white text-24px top-105 leading-normal animate__animated animate__fadeInBottomLeft animate__slower">Read-Listen-Learn-Practice-Repeat</div>
                    <a href="" class="relative text-white text-lg top-125 bg-blue-101 px-4 py-2 rounded-xl animate__animated animate__zoomIn animate__delay-2s">
                        Contact Me
                    </a>
                </div>
                <div class="relative bottom-0 top-0">
                    <img src="img/image.png" class="relative h-651 w-651 max-w-none top-minus animate__animated animate__fadeInBottomRight animate__slower">
                </div>
            </div> -->

            <!-- GSAP Animation -->
            <div id="home-content" class="relative flex inset-y-0 top-80 lg:top-125">
                <div class="side-content container mx-auto px-4">
                    <div class="dis-1 text-white text-lg lg:text-24px leading-normal"></div>
                    <div class="dis-2 relative text-gray-101 text-4xl lg:text-48 top-45 font-kandel leading-normal ">Web can make</div>
                    <div class="dis-3 relative text-gray-101 text-4xl lg:text-48 top-60 font-kandel leading-normal ">your life easier</div>
                    <div class="relative dis-4 text-white text-lg lg:text-24px top-105 leading-normal "></div>
                    <a href="#contact" class="relative text-white text-lg top-125 bg-blue-101 px-4 py-2 rounded-xl page-scroll">
                        Contact Me
                    </a>
                </div>
                <div class="relative bottom-0 top-0 hidden lg:flex">
                    <img src="img/image.png" class="relative h-651 w-651 max-w-none top-minus mt-1">
                </div>
            </div>
        </div>
    </section>
    <!-- About -->
    <section id="about">
        <div class="container flex flex-col lg:flex-row mx-auto px-4 mt-8 justify-between">
            <div class="card mt-60 mb-0 mx-auto lg:mx-60 w-full lg:w-464 h-auto lg:h-588 rounded-4xl border-y-8 border-blue-103">
                <div class="card-title flex flex-col gs_reveal">
                    <div class="flex mx-auto items-center mt-8 justify-center">
                        <svg width="64px" height="64px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M397.790711 677.419937h28.66879v84.982482h-28.66879zM314.856 642.607836h27.644904v82.934711h-27.644904zM244.207913 613.939047h28.668789v84.982482h-28.668789zM594.376694 677.419937h28.668789v84.982482h-28.668789zM679.359176 642.607836h26.621018v82.934711h-26.621018zM747.959493 613.939047h28.668789v84.982482h-28.668789zM874.921273 684.587134h69.624202v27.644904h-69.624202zM874.921273 725.542547h69.624202v28.668789h-69.624202z" fill="#FF7415"></path><path d="M220.365719 390.732046l249.096965-102.401843v90.898491c0 7.691427-3.670629 11.503352-11.362055 11.503352H220.365719zM551.37351 379.228694c0 7.691427 10.910522 11.503352 18.601949 11.503352h237.734909L551.37351 288.330203v90.898491z" fill="#E0E0E0"></path><path d="M936.762923 481.974563c12.065465-5.312941 21.093062-19.344265 21.093061-32.632249v-28.351385c0-13.274673-7.254228-27.305998-19.319692-32.632249L557.228086 219.617259c-11.970243-5.291439-27.173917-8.200298-43.650279-8.200298s-31.91041 2.908858-43.880653 8.194155L85.804662 388.35868c-12.065465 5.326251-22.824452 19.3586-22.824452 32.632249v28.351385c0 13.274673 8.622138 27.305998 20.688627 32.632249l104.225383 46.221255v121.755323c0 20.635385 17.266802 43.189531 36.433935 51.348873l244.589822 103.572144c12.338842 5.244341 28.729198 7.866511 44.557442 7.866511s31.938055-2.62217 44.275873-7.866511L799.987201 701.292847c19.167133-8.153199 32.954773-30.707345 32.954773-51.341706V528.195818l61.43312-27.783128v103.85576c-6.143312 2.895548-13.310509 10.583903-13.310509 19.688291v15.829267c-6.143312 8.857632-21.501592 23.520694-21.501592 40.107636v83.906378c0 26.985522 22.160974 48.945814 49.146496 48.945814s49.146496-21.960292 49.146495-48.945814V679.893644c0-16.587966-6.143312-31.251028-21.501592-40.107636v-15.829267c0-9.103364 0-16.792743-13.310509-19.688291V488.063609l13.71904-6.089046z m-5.527957 281.825459c0 11.566833-9.934759 20.976339-21.501592 20.976339s-21.501592-9.409506-21.501592-20.976339V679.893644c0-11.566833 9.934759-20.976339 21.501592-20.976339s21.501592 9.409506 21.501592 20.976339v83.906378z m-839.585967-314.457708v-28.351385c0-2.274049 3.899979-6.152527 5.914986-7.040235l382.94335-168.754732c8.371286-3.694178 20.685555-5.810549 33.173885-5.810549 12.489353 0 24.623418 2.116371 32.995728 5.817716L927.827475 413.950694c2.013982 0.887709 3.40749 4.766186 3.407491 7.040235v28.351385c0 2.225927-1.345385 6.173005-3.318413 7.040235L546.27149 625.137281c-8.371286 3.694178-20.036412 5.810549-32.524742 5.810549s-24.29987-2.116371-32.671156-5.817717L97.491289 456.381525c-2.015006-0.887709-5.84229-4.766186-5.84229-7.039211z m712.624186 200.608827c0 9.580495-6.46174 21.789304-15.447357 25.606349L544.586174 779.129633c-5.353896 2.280193-13.690371 3.781209-19.833682 4.674037v-84.881117h-28.668789v84.881117c-6.143312-0.892828-11.718368-2.393844-17.073288-4.674037L234.63868 675.564657c-8.985618-3.824212-18.075672-16.03302-18.075671-25.613516V540.542851l251.463164 110.173133c11.970243 5.292463 28.58483 8.201321 45.061193 8.201321s30.897787-2.908858 42.868031-8.194154L804.273185 540.542851v109.40829z" fill="#262626"></path><path d="M496.083703 285.271858h28.668789v293.855088h-28.668789zM132.604412 417.353064h336.858272v28.66879h-336.858272zM551.37351 417.353064h336.858272v28.66879h-336.858272zM581.066185 502.335546h48.12261v-26.621018h-77.815285v76.791399h29.692675zM391.647399 502.335546h48.122611v50.170381h29.692674v-76.791399h-77.815285zM657.857584 475.714528h55.289807v26.621018h-55.289807zM307.688803 475.714528h55.289807v26.621018h-55.289807z" fill="#262626"></path></g></svg>
                    </div>
                    <p class="flex mx-auto items-center text-red-101 text-2xl font-bold leading-normal ">Repository</p>
                </div>
                <div class="card-body py-45 px-25 mx-8">
                    <div class="card-content text-center text-sm lg:text-lg leading normal">
                        <ul class="list-disc">
                            @foreach($projects as $project)
                            <li class="hover:shadow-md gs_reveal gs_reveal_fromLeft">
                                <a href="{{ $project['link'] }}">
                                    <span class="flex mx-auto items-center justify-between whitespace-nowrap">{{ $project['title'] }}
                                    <svg class="hidden lg:flex" width="18px" height="18px" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5119 4.43057C10.1974 4.70014 10.161 5.17361 10.4306 5.48811L16.0122 12L10.4306 18.5119C10.161 18.8264 10.1974 19.2999 10.5119 19.5695C10.8264 19.839 11.2999 19.8026 11.5694 19.4881L17.5694 12.4881C17.8102 12.2072 17.8102 11.7928 17.5694 11.5119L11.5694 4.51192C11.2999 4.19743 10.8264 4.161 10.5119 4.43057Z" fill="#010031"></path> <path d="M6.25 5.00005C6.25 4.68619 6.44543 4.40553 6.73979 4.29664C7.03415 4.18774 7.36519 4.27366 7.56944 4.51196L13.5694 11.512C13.8102 11.7928 13.8102 12.2073 13.5694 12.4881L7.56944 19.4881C7.36519 19.7264 7.03415 19.8124 6.73979 19.7035C6.44543 19.5946 6.25 19.3139 6.25 19L6.25 5.00005Z" fill="#010031"></path> </g></svg>
                                    </span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card mt-60 mb-0 mx-auto lg:mx-60 w-full lg:w-464 h-auto lg:h-588 rounded-4xl border-y-8 border-blue-103">
                <div class="card-title flex flex-col gs_reveal">
                    <div class="flex mx-auto items-center mt-8 justify-center">
                        <svg width="64px" height="64px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M314.856 525.767162v145.08967c-62.457005-0.556994-110.579615-14.26477-138.224519-26.860608V499.949894c40.955413 15.240533 89.078023 25.329899 138.224519 25.817268zM587.209497 563.768666h116.722927v48.12261h-116.722927z" fill="#34BBB2"></path><path d="M183.798679 263.770266h97.269105v28.668789h-97.269105z" fill="#E96735"></path><path d="M217.586894 278.10466h27.644904v167.917194h-27.644904zM349.668101 306.773449h97.269106v26.621019h-97.269106zM349.668101 361.039372h97.269106v28.668789h-97.269106zM655.809813 222.814853h-140.272289V107.200794c0-23.658918 20.712176-44.111028 42.913082-44.111028h55.669669c22.282816 0 41.689539 20.452109 41.689538 44.111028v115.614059z m-111.6035-27.644904h83.958597V107.200794c0-8.212584-7.112931-16.466124-14.044635-16.466124H558.450606c-6.852864 0-14.244293 8.25354-14.244293 16.466124v87.969155z" fill="#E96735"></path><path d="M482.261251 400.701617c-1.811253-3.625578-15.598893-14.167501-46.658455-24.809765l9.024526-26.921017c24.3183 8.334427 65.111939 27.426816 65.111939 48.928408H481.904939c0 5.119427 0.35324 2.795207 0.356312 2.802374zM288.12133 358.886141l-2.126609-27.753436c19.370886-1.488729 38.548259-1.651527 57.582286-0.48225l-1.698625 27.780057c-17.761339-1.086342-35.653735-0.936855-53.757052 0.455629zM147.41389 401.109124c0.007167-0.013311 0.472011 1.909546 0.472011-3.209881h-27.835347s0-21.937767 50.498025-42.127761l10.336122 25.843889c-23.773593 9.507799-32.34249 17.458269-33.470811 19.493753z" fill="#010031"></path><path d="M318.335162 956.167597c-87.419329 0-198.017374-32.761259-198.017374-69.587342v-488.679988h27.646952l-0.472011-1.646407c6.092118 10.998576 76.434063 44.573824 170.961204 44.573823 93.198138 0 158.270146-33.111428 163.886157-44.361879l-0.356312 1.434463h27.411458v488.679988c-0.001024 34.467052-96.270818 69.587342-191.060074 69.587342z m-170.37247-71.285968c10.238853 11.66103 77.850097 43.451645 170.37247 43.451646 91.537396 0 156.246948-31.374918 163.414146-43.152671V432.411346c-34.812101 20.821732-99.797079 36.641784-163.414146 36.641784-60.38978 0-131.464828-15.636777-170.37247-37.443486v453.271985z" fill="#010031"></path><path d="M293.354408 454.212936h-27.644903v-218.087574h-69.624203v194.538212h-27.644903v-221.15923h124.914009z" fill="#010031"></path><path d="M293.354408 236.125362h-124.914009v-66.296575c0-23.658918 19.87259-44.28304 42.074519-44.28304h41.751996c22.282816 0 41.087494 20.624122 41.087494 44.28304v66.296575z m-97.269106-26.621018h69.624203v-39.675557c0-8.212584-6.510887-16.638137-13.442591-16.638136h-41.751996c-6.853888 0-14.429616 8.425552-14.429616 16.638136v39.675557zM336.357592 320.083959h25.597133v134.128977h-25.597133zM433.626698 320.083959h28.668789v110.579615h-28.668789zM462.295487 320.083959h-28.668789v-52.833507c0-8.212584-7.419073-16.790695-14.350777-16.790695h-41.751996c-6.853888 0-15.5692 8.578111-15.5692 16.790695v52.833507h-25.597133v-52.833507c0-23.658918 18.965428-44.435599 41.166333-44.435599h41.751996c22.282816 0 43.019566 20.776681 43.019566 44.435599v52.833507zM426.459501 507.454973h27.644903v278.496808h-27.644903zM318.375094 900.497928c-61.320492 0-109.793271-13.346345-133.232054-21.303982l8.949782-26.353784c37.113795 12.598909 82.413554 19.82242 124.281248 19.82242 54.864895 0 97.01723-11.640552 117.261491-18.579423l9.024525 26.326139c-37.779321 12.953173-82.629593 20.08863-126.284992 20.08863zM829.840626 898.579167H503.2509v-28.668789h326.589726c23.846289 0 42.008991-16.718 42.008991-39.000816V204.622458c0-23.658918-19.726175-44.263586-42.008991-44.263586H655.809813v-28.668789h174.030813c37.762939 0 70.67778 33.769786 70.67778 72.932375v626.288128c0 37.525397-31.613483 67.668581-70.67778 67.668581zM361.954725 131.689059h153.582799v28.668789h-153.582799z" fill="#010031"></path><path d="M767.212632 813.596685H572.368279c-16.343258 0-28.161966-9.617355-28.161966-24.44219v-27.835347c0-14.423473 11.804374-30.657174 28.161966-30.657174h222.678676c5.198266 0 14.345657-2.209545 14.345657-11.094822v-480.151023c0-8.212584-7.413954-16.600253-14.345657-16.600252H655.809813v-27.644904h139.237142c22.282816 0 41.990561 20.586238 41.990561 44.245156v480.151023c0 17.654855-11.262739 31.871502-27.644904 37.015503v22.133329c0 20.635385-17.94359 34.880701-42.17998 34.880701z m-195.361415-27.644904h195.360391c5.627274 0 13.512215-1.530709 13.512215-7.235797v-19.385221H573.587726c-0.5744 0-1.73651 1.284976-1.736509 1.988385v24.632633z" fill="#010031"></path><path d="M509.394212 263.770266h243.684707v28.668789h-243.684707zM538.063001 326.227271h215.015918v27.644903h-215.015918zM538.063001 389.708161h215.015918v27.644903h-215.015918zM538.063001 454.212936h215.015918v25.597133h-215.015918zM753.078919 661.037772h-215.015918v-146.415602h215.015918v146.415602z m-187.371014-28.668789h159.72611v-90.101909h-159.72611v90.101909z" fill="#010031"></path></g></svg>
                    </div>
                    <p class="flex mx-auto items-center text-red-101 text-2xl font-bold leading-normal">My Skill</p>
                </div>
                <div class="card-body py-45 px-4 lg:px-25 mx-auto lg:mx-60 gs_reveal gs_reveal_fromRight">
                    <div class="card-subtitle text-red-101 font-semibold text-lg">
                        Basic
                    </div>
                    <div class="card-content grid grid-rows-1 lg:grid-rows-3 lg:grid-flow-col gap-1 whitespace-nowrap">
                        @foreach($basic as $bas)
                            <span>{{$loop->iteration}}. {{$bas['name']}} </span>                                                                            
                        @endforeach 
                    </div>
                    <div class="card-subtitle text-red-101 font-semibold text-lg mt-8">
                        Framework
                    </div>
                    <div class="card-content grid grid-rows-1 lg:grid-rows-3 lg:grid-flow-col gap-1 whitespace-nowrap">
                        @foreach($framework as $frame)
                            <span>{{$loop->iteration}}. {{$frame['name']}} </span>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project -->
    <section id="project">
        <div class="container mx-auto mt-105">
            <h1 class="text-gray-900 text-center text-lg font-semibold gs_reveal">My <span class="text-red-103">Galleries.</span></h1>
            <div class="text-32 text-center font-bold mb-45 gs_reveal">Recent Projects</div>
            <div class="container mx-auto flex flex-col lg:flex-row justify-center gap-x-2">
                @foreach($potraits as $potrait)
                    <img src="{{ asset('images') }}/{{ $potrait['image'] }}" title="{{ $potrait->projects->title }}" class="hidden lg:flex bg-gray-500 rounded-3xl border-y-4 border-blue-103 h-435 w-247 skewElem">
                @endforeach
                <div class="grid grid-cols lg:grid-cols-2 gap-y-4 gap-x-2">
                    @foreach($landscapes as $landscape)
                        <img src="{{ asset('images') }}/{{ $landscape['image'] }}" title="{{ $landscape->projects->title }}" class="bg-gray-500 rounded-3xl border-y-4 border-blue-103 h-210 w-full lg:w-350 skewElem">
                    @endforeach
                </div>
            </div>
            <div class="container mx-auto flex flex-col lg:flex-row justify-center gap-x-2 mt-4">
                <div class="grid grid-cols lg:grid-cols-2 gap-y-4 gap-x-2">
                    @foreach($galleries as $gallery)
                        <img src="{{ asset('images') }}/{{ $gallery['image'] }}" title="{{ $gallery->projects->title }}" class="bg-gray-500 rounded-3xl border-y-4 border-blue-103 h-210 w-full lg:w-350 skewElem">
                    @endforeach
                </div>
                @foreach($potraitImages as $potrait)
                    <img src="{{ asset('images') }}/{{ $potrait['image'] }}" title="{{ $potrait->projects->title }}" class="hidden lg:flex bg-gray-500 rounded-3xl border-y-4 border-blue-103 h-435 w-247 skewElem">
                @endforeach
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section id="contact">
        <div class="container mx-auto mt-105">
            <h1 class="text-gray-900 text-center text-lg font-semibold gs_reveal">Get in <span class="text-red-103">Touch.</span></h1>
            <div class="text-32 text-center font-bold mb-2 gs_reveal">Contact me</div>
            <div class="container mx-auto flex justify-center">
                <img src="img/cs.png" class="hidden lg:flex w-auto h-580 gs_reveal gs_reveal_fromLeft">
                <div class="form-contact mt-25 lg:mt-175 mb-8 gs_reveal gs_reveal_fromRight">
                    <form action="{{route('contact')}}" method="post">
                        @csrf
                        <div class="flex flex-col lg:flex-row mx-auto">
                            <input type="text" name="name" class="h-69 w-full lg:w-284 rounded-3xl bg-gray-103 border-2 pl-25 py-auto text-gray-104 border-gray-102" placeholder="Enter your name...">
                            <input type="email" name="email" class="ml-0 lg:ml-2 mt-2 lg:mt-0 h-69 w-full lg:w-284 rounded-3xl bg-gray-103 border-2 pl-25 py-auto text-gray-104 border-gray-102" placeholder="Enter your email...">
                        </div>
                        <div class="flex mx-auto mt-2">
                            <textarea name="message" id=""class="w-full h-210 rounded-3xl bg-gray-103 border-2 pl-25 pt-6 text-gray-104 border-gray-102" placeholder="Enter your message..."></textarea>
                        </div>
                        <button type="submit" class="mt-2 bg-gray-105 px-6 py-3 text-white text-opacity-50 opacity-75 transition ease-in-out delay-150 hover:opacity-100 hover:-translate-y-1 hover:scale-110 duration-700 rounded-lg">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <div id="footer" class="relative w-full h-auto lg:h-82 bg-blue-101 bottom-0">
        <div class="container flex flex-col lg:flex-row whitespace-nowrap mx-auto px-4 items-center justify-between text-blue-104 text-sm font-semibold">
            <div class="copyright pt-2 lg:pt-8">
            Copyright<span class="text-lg"> &copy;</span> 2023 Apasih-Coding.
            </div>
            <div class="sosial flex pt-2 lg:pt-8">
                <div class="instagram">
                    <a href="">
                        <svg height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-55.1 -55.1 661.23 661.23" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="XMLID_13_"> <linearGradient id="XMLID_2_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.5714" x2="275.517" y2="549.7202" gradientTransform="matrix(1 0 0 -1 0 554)"> <stop offset="0" style="stop-color:#E09B3D"></stop> <stop offset="0.3" style="stop-color:#C74C4D"></stop> <stop offset="0.6" style="stop-color:#C21975"></stop> <stop offset="1" style="stop-color:#7024C4"></stop> </linearGradient> <path id="XMLID_17_" style="fill:url(#XMLID_2_);" d="M386.878,0H164.156C73.64,0,0,73.64,0,164.156v222.722 c0,90.516,73.64,164.156,164.156,164.156h222.722c90.516,0,164.156-73.64,164.156-164.156V164.156 C551.033,73.64,477.393,0,386.878,0z M495.6,386.878c0,60.045-48.677,108.722-108.722,108.722H164.156 c-60.045,0-108.722-48.677-108.722-108.722V164.156c0-60.046,48.677-108.722,108.722-108.722h222.722 c60.045,0,108.722,48.676,108.722,108.722L495.6,386.878L495.6,386.878z"></path> <linearGradient id="XMLID_3_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.5714" x2="275.517" y2="549.7202" gradientTransform="matrix(1 0 0 -1 0 554)"> <stop offset="0" style="stop-color:#E09B3D"></stop> <stop offset="0.3" style="stop-color:#C74C4D"></stop> <stop offset="0.6" style="stop-color:#C21975"></stop> <stop offset="1" style="stop-color:#7024C4"></stop> </linearGradient> <path id="XMLID_81_" style="fill:url(#XMLID_3_);" d="M275.517,133C196.933,133,133,196.933,133,275.516 s63.933,142.517,142.517,142.517S418.034,354.1,418.034,275.516S354.101,133,275.517,133z M275.517,362.6 c-48.095,0-87.083-38.988-87.083-87.083s38.989-87.083,87.083-87.083c48.095,0,87.083,38.988,87.083,87.083 C362.6,323.611,323.611,362.6,275.517,362.6z"></path> <linearGradient id="XMLID_4_" gradientUnits="userSpaceOnUse" x1="418.306" y1="4.5714" x2="418.306" y2="549.7202" gradientTransform="matrix(1 0 0 -1 0 554)"> <stop offset="0" style="stop-color:#E09B3D"></stop> <stop offset="0.3" style="stop-color:#C74C4D"></stop> <stop offset="0.6" style="stop-color:#C21975"></stop> <stop offset="1" style="stop-color:#7024C4"></stop> </linearGradient> <circle id="XMLID_83_" style="fill:url(#XMLID_4_);" cx="418.306" cy="134.072" r="34.149"></circle> </g> </g></svg>
                    </a>
                </div>
                <div class="linkin">
                    <a href="https://www.linkedin.com/in/teguh-dwi-saputra-36b13a18b">
                        <svg width="30px" height="30px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="24" cy="24" r="20" fill="#0077B5"></circle> <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7747 14.2839C18.7747 15.529 17.8267 16.5366 16.3442 16.5366C14.9194 16.5366 13.9713 15.529 14.0007 14.2839C13.9713 12.9783 14.9193 12 16.3726 12C17.8267 12 18.7463 12.9783 18.7747 14.2839ZM14.1199 32.8191V18.3162H18.6271V32.8181H14.1199V32.8191Z" fill="white"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2393 22.9446C22.2393 21.1357 22.1797 19.5935 22.1201 18.3182H26.0351L26.2432 20.305H26.3322C26.9254 19.3854 28.4079 17.9927 30.8101 17.9927C33.7752 17.9927 35.9995 19.9502 35.9995 24.219V32.821H31.4922V24.7838C31.4922 22.9144 30.8404 21.6399 29.2093 21.6399C27.9633 21.6399 27.2224 22.4999 26.9263 23.3297C26.8071 23.6268 26.7484 24.0412 26.7484 24.4574V32.821H22.2411V22.9446H22.2393Z" fill="white"></path> </g></svg>
                    </a>
                </div>
                <div class="github">
                    <a href=" https://github.com/Apasih-coding?tab=repositories ">
                        <svg width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>github</title> <rect width="24" height="24" fill="none"></rect> <path d="M12,2A10,10,0,0,0,8.84,21.5c.5.08.66-.23.66-.5V19.31C6.73,19.91,6.14,18,6.14,18A2.69,2.69,0,0,0,5,16.5c-.91-.62.07-.6.07-.6a2.1,2.1,0,0,1,1.53,1,2.15,2.15,0,0,0,2.91.83,2.16,2.16,0,0,1,.63-1.34C8,16.17,5.62,15.31,5.62,11.5a3.87,3.87,0,0,1,1-2.71,3.58,3.58,0,0,1,.1-2.64s.84-.27,2.75,1a9.63,9.63,0,0,1,5,0c1.91-1.29,2.75-1,2.75-1a3.58,3.58,0,0,1,.1,2.64,3.87,3.87,0,0,1,1,2.71c0,3.82-2.34,4.66-4.57,4.91a2.39,2.39,0,0,1,.69,1.85V21c0,.27.16.59.67.5A10,10,0,0,0,12,2Z"></path> </g></svg>
                    </a>
                </div>
            </div>
            <div class="build pt-2 lg:pt-8">
                Build by<span class="font-bold"> Teguh Dwi Saputra</span> 
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    
    <!-- <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js?r=5426"></script> -->
    <!-- <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>

    <script>
        // Detect if a link's href goes to the current page
        function getSamePageAnchor (link) {
        if (
            link.protocol !== window.location.protocol ||
            link.host !== window.location.host ||
            link.pathname !== window.location.pathname ||
            link.search !== window.location.search
        ) {
            return false;
        }

        return link.hash;
        }

        // Scroll to a given hash, preventing the event given if there is one
        function scrollToHash(hash, e) {
        const elem = hash ? document.querySelector(hash) : false;
        if(elem) {
            if(e) e.preventDefault();
            gsap.to(window, {duration: 3,scrollTo: elem});
        }
        }

        // If a link's href is within the current page, scroll to it instead
        document.querySelectorAll('a[href]').forEach(a => {
        a.addEventListener('click', e => {
            scrollToHash(getSamePageAnchor(a), e);
        });
        });

        // Scroll to the element in the URL's hash on load
        scrollToHash(window.location.hash);
    </script>
<!-- GSAP plugin demo -->
    <script>
        function animateFrom(elem, direction) {
            direction = direction || 1;
            var x = 0,
                y = direction * 100;
            if(elem.classList.contains("gs_reveal_fromLeft")) {
                x = -100;
                y = 0;
            } else if (elem.classList.contains("gs_reveal_fromRight")) {
                x = 100;
                y = 0;
            }
            elem.style.transform = "translate(" + x + "px, " + y + "px)";
            elem.style.opacity = "0";
            gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
                duration: 1.25, 
                x: 0,
                y: 0, 
                autoAlpha: 1, 
                ease: "expo", 
                overwrite: "auto"
            });
            }

            function hide(elem) {
            gsap.set(elem, {autoAlpha: 0});
            }

            document.addEventListener("DOMContentLoaded", function() {
            gsap.registerPlugin(ScrollTrigger);
            
            gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
                hide(elem); // assure that the element is hidden when scrolled into view
                
                ScrollTrigger.create({
                trigger: elem,
                markers: false,
                onEnter: function() { animateFrom(elem) }, 
                onEnterBack: function() { animateFrom(elem, -1) },
                onLeave: function() { hide(elem) } // assure that the element is hidden when scrolled into view
                });
            });
            });
    </script>
    
    <!-- // Skew on scroll using scroll velocity - ScrollTrigger - Demo -->
    <script>
        let proxy = { skew: 0 },
            skewSetter = gsap.quickSetter(".skewElem", "skewY", "deg"), // fast
            clamp = gsap.utils.clamp(-20, 20); // don't let the skew go beyond 20 degrees. 

        ScrollTrigger.create({
        onUpdate: (self) => {
            let skew = clamp(self.getVelocity() / -300);
            // only do something if the skew is MORE severe. Remember, we're always tweening back to 0, so if the user slows their scrolling quickly, it's more natural to just let the tween handle that smoothly rather than jumping to the smaller skew.
            if (Math.abs(skew) > Math.abs(proxy.skew)) {
            proxy.skew = skew;
            gsap.to(proxy, {skew: 0, duration: 0.8, ease: "power3", overwrite: true, onUpdate: () => skewSetter(proxy.skew)});
            }
        }
        });

        // make the right edge "stick" to the scroll bar. force3D: true improves performance
        gsap.set(".skewElem", {transformOrigin: "right center", force3D: true});

    </script>
    <!-- GSAP basic from -->
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.from('#home-content img', {duration: 1.5, x: 0, y: 200, opacity: 0, ease: 'power4.in'});
        gsap.from('#home-content a', {duration: 1.5, delay:2, opacity: 0, y:100, ease: 'power4.Out'});
        gsap.from('#home-content .dis-2', {duration: 2, x: -200, opacity: 0, ease: 'back'});
        gsap.from('#home-content .dis-3', {duration: 2, x: 200, opacity: 0, ease: 'back'});
        gsap.to('.dis-1', {duration:1.5, text: 'Let’s make the best website'});
        gsap.to('.dis-4', {duration:1.5, delay: 1, text: 'Read-Listen-Learn-Practice-Repeat'});
    </script>

    
</body> 
</html>