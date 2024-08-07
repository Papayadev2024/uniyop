@extends('components.public.matrix', ['pagina' => 'index'])

@section('css_importados')

@stop

@php
    $bannersBottom = array_filter($banners, function ($banner) {
        return $banner['potition'] === 'bottom';
    });
    $bannerMid = array_filter($banners, function ($banner) {
        return $banner['potition'] === 'mid';
    });
@endphp

@section('content')

    <main class="z-[15] ">

        <section class="bg-azuluniyop h-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 w-full gap-12 ">
                <div class="flex flex-col justify-center gap-5 text-textWhite px-[5%] xl:pl-[15%]">
                    <h1
                        class="font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight text-white">
                        Capacitaciones y Charlas para la <span class="text-[#F6D84D]">Prevención</span> de la Violencia
                        Doméstica
                    </h1>
                    <p class=" text-base text-white font-Pangea_Regular">
                        Participa en nuestras capacitaciones y charlas para convertirte en
                        un líder en la lucha contra la violencia doméstica. Aprende a
                        identificar señales de alerta, brindar apoyo y promover relaciones
                        saludables en tu comunidad.
                    </p>

                    <div class="flex flex-row gap-5 font-Pangea_Regular">
                        <a
                            class="bg-[#F094BC] text-white px-5 py-3 rounded-3xl text-base border-2 flex gap-2 border-[#F094BC]  ">Apoyanos
                            <img src="{{ asset('images/svg/flechablanca.svg') }}" /></a>
                        <a
                            class="bg-transparent text-white px-5 py-3 rounded-3xl text-base border-2 flex gap-2 hover:bg-[#F094BC] hover:border-[#F094BC]">Voluntariado
                            <img src="{{ asset('images/svg/flechablanca.svg') }}" /></a>
                    </div>
                </div>

                <div class="flex flex-col justify-end items-end">
                    <img src="{{ asset('images/img/familia.png') }}" class="h-[250px] md:h-[550px] object-cover" />
                </div>
            </div>
        </section>

        <section class="z-10 col-span-2 bg-[#F094BC]">
            <div class="px-1 py-2 h-20 bg-azulmundoweb font-Pangea_Bold text-white text-2xl">
                <div x-data="{}" x-init="$nextTick(() => {
                    let ul = $refs.logos;
                    ul.insertAdjacentHTML('afterend', ul.outerHTML);
                    ul.nextSibling.setAttribute('aria-hidden', 'true');
                })"
                    class="px-[5%]  bg-azulmw w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-200px),transparent_100%)]">
                    <ul x-ref="logos"
                        class="h-16 flex flex-row justify-between items-center  [&_li]:mx-10   animate-infinite-scroll">

                        <li class="w-auto py-8 flex justify-center items-center gap-3 px-3"><img class="object-contain"
                                src="{{ asset('images/svg/logo1.svg') }}" />Compromiso</li>
                        <li class="w-auto py-8 flex justify-center items-center gap-3 px-3"><img class="object-contain"
                                src="{{ asset('images/svg/logo2.svg') }}" />Empoderamiento</li>
                        <li class="w-auto py-8 flex justify-center items-center gap-3 px-3"><img class="object-contain"
                                src="{{ asset('images/svg/logo3.svg') }}" />Innovación</li>
                        <li class="w-auto py-8 flex justify-center items-center gap-3 px-3"><img class="object-contain"
                                src="{{ asset('images/svg/logo4.svg') }}" />Respeto</li>
                        <li class="w-auto py-8 flex justify-center items-center gap-3 px-3"><img class="object-contain"
                                src="{{ asset('images/svg/logo5.svg') }}" />Unidad</li>


                    </ul>

                    <ul x-ref="logos"
                        class="h-16 flex flex-row justify-between items-center  [&_li]:mx-10   animate-infinite-scroll"
                        aria-hidden="true">

                        <li class="w-auto py-8 flex justify-center items-center gap-3 px-3"><img class="object-contain"
                                src="{{ asset('images/svg/logo1.svg') }}" />Compromiso</li>
                        <li class="w-auto py-8 flex justify-center items-center gap-3 px-3"><img class="object-contain"
                                src="{{ asset('images/svg/logo2.svg') }}" />Empoderamiento</li>
                        <li class="w-auto py-8 flex justify-center items-center gap-3 px-3"><img class="object-contain"
                                src="{{ asset('images/svg/logo3.svg') }}" />Innovación</li>
                        <li class="w-auto py-8 flex justify-center items-center gap-3 px-3"><img class="object-contain"
                                src="{{ asset('images/svg/logo4.svg') }}" />Respeto</li>
                        <li class="w-auto py-8 flex justify-center items-center gap-3 px-3"><img class="object-contain"
                                src="{{ asset('images/svg/logo5.svg') }}" />Unidad</li>


                    </ul>
                </div>
            </div>
        </section>

        <section>
            <div class="grid grid-cols-1 xl:grid-cols-2 w-full gap-12 xl:gap-16 px-[8%] py-12 xl:py-16">
                <div class="flex flex-col justify-center gap-5 text-textWhite ">
                    <h2 class="text-[#A9A0E5] font-Pangea_Semibold text-lg">Sobre nosotros</h2>
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                        Unidos sin fronteras <br>Yo primero
                    </h1>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        Bienvenido a UNIYOP, una plataforma dedicada a la prevención y abordaje de la violencia a través de
                        programas integrales y recursos especializados. Nuestro nombre, "Unidos sin Fronteras - Yo Primero",
                        refleja nuestro compromiso con la unidad global y la priorización del bienestar individual en la
                        lucha contra la violencia.
                    </p>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        En UNIYOP, nos dedicamos a desarrollar e implementar programas innovadores diseñados para prevenir
                        la violencia en todas sus formas. Nuestros recursos especializados están diseñados para proporcionar
                        apoyo y orientación a aquellos que han sido afectados por algún tipo de violencia.
                    </p>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        Explora nuestros programas y recursos para descubrir cómo puedes contribuir a la construcción de un
                        mundo más seguro y pacífico. Únete a nosotros en nuestro compromiso de crear un futuro donde la
                        violencia sea una cosa del pasado y cada individuo pueda vivir libre de temor.
                        Juntos, podemos marcar la diferencia y construir una sociedad más justa y compasiva para todos.
                    </p>

                    <div class="flex flex-row gap-5 font-Pangea_Regular">
                        <a
                            class="bg-[#A9A0E5] text-white px-5 py-3 rounded-3xl text-base border-2 flex gap-2 border-[#A9A0E5]  ">Nosotros
                            <img src="{{ asset('images/svg/flechablanca.svg') }}" /></a>

                    </div>
                </div>

                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('images/img/unidos.png') }}" class="object-cover" />
                </div>
            </div>
        </section>


        <section class="bg-[#F5F8FF] px-[8%]">
            <div class="grid grid-cols-1 w-full gap-12  pt-12 xl:pt-16">
                <div class="flex flex-col justify-center gap-5 text-textWhite text-center">
                    <h2 class="text-[#A9A0E5] font-Pangea_Semibold text-lg">Tipos de Violencia</h2>
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                        Por un Futuro Sin Violencia
                    </h1>
                    <p class="text-[#262556] text-base font-Pangea_Regular max-w-3xl mx-auto">
                        En UniYop, nos dedicamos a erradicar la violencia doméstica. A través de apoyo, recursos y
                        educación, trabajamos para crear comunidades seguras y libres de abuso. Únete a nosotros en la
                        construcción de un futuro más seguro para todos.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 w-full gap-12 pt-12 pb-16">
                <div>
                    <div class="inline-block py-2 px-4 bg-[#A0CD96] text-white font-Pangea_Semibold text-xl rounded-t-2xl">
                        <h2>Violencia Sexual</h2>
                    </div>
                    <div class="bg-[#E8F3E5] p-6 rounded-r-3xl rounded-bl-3xl">
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                            Se concreta en cualquiera de las formas de actividad sexual no deseada: violación, abuso sexual,
                            acoso sexual, explotación sexual, tráfico de personas con fines sexuales y cualquier otra forma
                            de violencia sexual.
                        </p>
                    </div>
                </div>

                <div>
                    <div class="inline-block py-2 px-4 bg-[#F094BC] text-white font-Pangea_Semibold text-xl rounded-t-2xl">
                        <h2>Violencia Sexual</h2>
                    </div>
                    <div class="bg-[#FBE8F1] p-6 rounded-r-3xl rounded-bl-3xl">
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                            Se concreta en cualquiera de las formas de actividad sexual no deseada: violación, abuso sexual,
                            acoso sexual, explotación sexual, tráfico de personas con fines sexuales y cualquier otra forma
                            de violencia sexual.
                        </p>
                    </div>
                </div>

                <div>
                  <div class="inline-block py-2 px-4 bg-[#A9A0EA] text-white font-Pangea_Semibold text-xl rounded-t-2xl">
                      <h2>Violencia Psicológica</h2>
                  </div>
                  <div class="bg-[#EDEDFA] p-6 rounded-r-3xl rounded-bl-3xl">
                      <p class="text-[#262556] text-base font-Pangea_Regular ">
                        Esta forma de violencia implica el uso deliberado de la fuerza física para causar daño, lesiones o incluso la muerte a una persona. Incluye acciones como golpes, patadas, puñetazos y cualquier otra forma de agresión física directa que cause daño físico, de manera directa y/o indirecta.  
                      </p>
                  </div>
              </div>

              <div>
                  <div class="inline-block py-2 px-4 bg-[#EF8B45] text-white font-Pangea_Semibold text-xl rounded-t-2xl">
                      <h2>Violencia doméstica</h2>
                  </div>
                  <div class="bg-[#FCECD8] p-6 rounded-r-3xl rounded-bl-3xl">
                      <p class="text-[#262556] text-base font-Pangea_Regular ">
                        Se refiere a la violencia que ocurre dentro del ámbito familiar o de una relación íntima, y puede incluir abuso físico, sexual, emocional o económico. Esta violencia puede manifestarse a través de comportamientos de control, manipulación, intimidación y agresión por parte de un miembro de la familia o pareja.
                      </p>
                  </div>
              </div>

                <div>
                    <div class="inline-block py-2 px-4 bg-[#F7D84C] text-white font-Pangea_Semibold text-xl rounded-t-2xl">
                        <h2>Violencia Psicológica</h2>
                    </div>
                    <div class="bg-[#FCF6C5] p-6 rounded-r-3xl rounded-bl-3xl">
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                          Se trata de un tipo de violencia que busca dañar emocionalmente a una persona, causando sufrimiento mental, miedo, ansiedad o estrés. Esto puede manifestarse a través de amenazas, insultos, humillaciones, hostigamiento, intimidación, manipulación y control coercitivo, de manera directa y/o indirecta. 
                        </p>
                    </div>
                </div>

                <div>
                    <div class="inline-block py-2 px-4 bg-[#3D8BF2] text-white font-Pangea_Semibold text-xl rounded-t-2xl">
                        <h2>Violencia hacia a otras personas vulnerables</h2>
                    </div>
                    <div class="bg-[#DCECFD] p-6 rounded-r-3xl rounded-bl-3xl">
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                          Abarca aquellas acciones que afectan individuos o grupos que se encuentran en situaciones de vulnerabilidad debido a su condición social, económica, física o mental (violencia contra personas con discapacidad, violencia contra personas mayores, violencia contra niños y adolescentes, violencia contra personas en situación de calle, violencia contra personas migrantes o refugiadas,  violencia contra personas en situación de pobreza o marginación)
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section>
          <div class="grid grid-cols-1 xl:grid-cols-2 w-full gap-12 px-[8%] py-12 xl:py-16">
              <div class="flex flex-col justify-center gap-5 text-textWhite ">

                  <h1
                      class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                      Testimonios felices
                  </h1>
                  <p class="text-[#262556] text-base font-Pangea_Regular">
                    Praesent vehicula felis et purus cursus vehicula. Etiam at faucibus elit. 
                    Mauris molestie volutpat magna, nec fermentum nunc feugiat id. 
                    Fusce sapien elit, scelerisque ut mi et, finibus maximus ex.
                  </p>

                  <div class="">
                    <div class="swiper myTestimonios">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="bg-[#EBEBFF] relative p-8 gap-5 flex flex-col rounded-3xl h-auto lg:h-60">
                              <img class="w-12" src="{{ asset('images/svg/comillas.svg') }}" />
                              <p class="text-[#262556] text-base font-Pangea_Regular">Nulla sed malesuada augue. Morbi interdum vulputate imperdiet. 
                                Pellentesque ullamcorper auctor ante, egestas interdum quam facilisis 
                                commodo. Phasellus efficitur quis ex in consectetur. Mauris tristique 
                                suscipit metus, a molestie dui dapibus vel.</p>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="bg-[#EBEBFF] relative p-8 gap-5 flex flex-col rounded-3xl h-auto lg:h-60">
                              <img class="w-12" src="{{ asset('images/svg/comillas.svg') }}" />
                              <p class="text-[#262556] text-base font-Pangea_Regular">Nulla sed malesuada augue. Morbi interdum vulputate imperdiet. 
                                Pellentesque ullamcorper auctor ante, egestas interdum quam facilisis 
                                commodo. Phasellus efficitur quis ex in consectetur.</p>
                          </div>
                        </div>
                      </div>
                      <div class="flex flex-row gap-3 mt-3">
                        <div class="prev-testimonios cursor-pointer bg-[#A9A0E5] px-4 py-2 text-white rounded-3xl">&#129044;</div>
                        <div class="next-testimonios cursor-pointer bg-[#A9A0E5] px-4 py-2 text-white rounded-3xl">&#129046;</div>
                      </div>
                    </div>
                  </div>
    
                  {{-- <div class="flex flex-row gap-5 font-Pangea_Regular">
                      <a
                          class="bg-[#A9A0E5] text-white px-5 py-3 rounded-3xl text-base border-2 flex gap-2 border-[#A9A0E5]  ">Nosotros
                          <img src="{{ asset('images/svg/flechablanca.svg') }}" /></a>

                  </div> --}}
              </div>

              <div class="flex flex-col justify-center items-center">
                  <img src="{{ asset('images/img/comentarios.png') }}" class="object-cover" />
              </div>
          </div>
        </section>

        <section>
          <div class="grid grid-cols-1 xl:grid-cols-2 w-full gap-12 px-[8%] py-12 xl:py-16 bg-[#F094BC]">
              <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('images/img/chica.png') }}" class="object-cover" />
              </div>
            
              <div class="flex flex-col justify-center gap-5 text-textWhite ">
                  <h2 class="text-white font-Pangea_Semibold text-lg">Sobre nosotros</h2>
                  <h1
                      class="text-white font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                      Únete como Voluntario
                  </h1>
                  <p class="text-white text-base font-Pangea_Regular">
                    ¿Estás listo para ser parte del cambio? En UNIYOP, creemos firmemente
                    en el poder del voluntariado para crear un cambio positivo en la sociedad
                    y estamos emocionados de tener la oportunidad de colaborar contigo para 
                    abordar la violencia en todas sus formas.
                  </p>
                  <div class="flex flex-row gap-5 font-Pangea_Regular">
                      <a
                          class="bg-[#A9A0E5] text-white px-5 py-3 rounded-3xl text-base border-2 flex gap-2 border-[#A9A0E5]  ">Voluntariado
                          <img src="{{ asset('images/svg/flechablanca.svg') }}" /></a>

                  </div>
              </div>
          </div>
        </section>

        <section class="w-full px-[8%] py-12 lg:py-16">
          <div class="flex flex-col justify-center gap-5 text-textWhite text-center">
            <h2 class="text-[#A9A0E5] font-Pangea_Semibold text-lg">Blog Posts</h2>
            <h1
                class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight max-w-3xl mx-auto">
                Nuestras últimas noticias a nivel nacional e internacional
            </h1>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mt-14 gap-10 sm:gap-5">
            <div class="flex flex-col gap-3 font">
                <div class="flex flex-col gap-4">
                    <div class="relative flex justify-center items-center rounded-2xl overflow-hidden">
                        <a href="#" class="w-full">
                            <img src="{{ asset('images/img/post_1.png') }}"
                                class="w-full object-cover h-56 sm:h-64 md:h-64" alt="blog">
                        </a>
                        <div class="absolute top-0 left-0 pt-4 pl-4">
                            <h3 class="text-sm md:text-base font-Inter_Medium bg-[#E8F3E5] text-[#A0CD96] px-3 py-2 rounded-full">
                              Internacional 🌎
                            </h3>
                        </div>
                    </div>
          
                    <div class="flex flex-col justify-start items-start gap-4">
                        <a href="#">
                            <h2 class="text-xl font-Pangea_Medium font-normal text-[#321675] tracking-tight line-clamp-2">Los derechos humanos de las mujeres y la igualdad de género
                            </h2>
                        </a>
                        
                        <p class="text-[#262556] font-Pangea_Light font-normal text-base line-clamp-2">
                            Nam sit amet placerat ligula. Integer sollicitudin sagittis lacinia. 
                            Etiam non aliquet orci. Aliquam id ex quam...
                        </p>
                    
                        <a  href="#" 
                            class="bg-[#A9A0E5] rounded-3xl px-5 py-4 text-base font-Pangea_Medium font-normal text-white  leading-tight flex flex-row gap-2 items-center">
                            Leer Artículo
                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_44_1092)">
                                    <path
                                        d="M9.25 3.625C9.41667 3.4375 9.58333 3.4375 9.75 3.625L13.875 7.75C14.0625 7.91667 14.0625 8.08333 13.875 8.25L9.75 12.375C9.58333 12.5625 9.41667 12.5625 9.25 12.375L8.625 11.7812C8.4375 11.5938 8.4375 11.4167 8.625 11.25L11.1562 8.8125H0.375C0.125 8.8125 0 8.6875 0 8.4375V7.5625C0 7.3125 0.125 7.1875 0.375 7.1875H11.1562L8.625 4.75C8.4375 4.58333 8.4375 4.40625 8.625 4.21875L9.25 3.625Z"
                                        fill="#ffffff" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_44_1092">
                                        <rect width="14" height="16" fill="white" transform="matrix(1 0 0 -1 0 16)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col gap-3 font">
              <div class="flex flex-col gap-4">
                  <div class="relative flex justify-center items-center rounded-2xl overflow-hidden">
                      <a href="#" class="w-full">
                          <img src="{{ asset('images/img/post_1.png') }}"
                              class="w-full object-cover h-56 sm:h-64 md:h-64" alt="blog">
                      </a>
                      <div class="absolute top-0 left-0 pt-4 pl-4">
                          <h3 class="text-sm md:text-base font-Inter_Medium bg-[#E8F3E5] text-[#A0CD96] px-3 py-2 rounded-full">
                            Internacional 🌎
                          </h3>
                      </div>
                  </div>
        
                  <div class="flex flex-col justify-start items-start gap-4">
                      <a href="#">
                          <h2 class="text-xl font-Pangea_Medium font-normal text-[#321675] tracking-tight line-clamp-2">Los derechos humanos de las mujeres y la igualdad de género
                          </h2>
                      </a>
                      
                      <p class="text-[#262556] font-Pangea_Light font-normal text-base line-clamp-2">
                          Nam sit amet placerat ligula. Integer sollicitudin sagittis lacinia. 
                          Etiam non aliquet orci. Aliquam id ex quam...
                      </p>
                  
                      <a  href="#" 
                          class="bg-[#A9A0E5] rounded-3xl px-5 py-4 text-base font-Pangea_Medium font-normal text-white  leading-tight flex flex-row gap-2 items-center">
                          Leer Artículo
                          <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_44_1092)">
                                  <path
                                      d="M9.25 3.625C9.41667 3.4375 9.58333 3.4375 9.75 3.625L13.875 7.75C14.0625 7.91667 14.0625 8.08333 13.875 8.25L9.75 12.375C9.58333 12.5625 9.41667 12.5625 9.25 12.375L8.625 11.7812C8.4375 11.5938 8.4375 11.4167 8.625 11.25L11.1562 8.8125H0.375C0.125 8.8125 0 8.6875 0 8.4375V7.5625C0 7.3125 0.125 7.1875 0.375 7.1875H11.1562L8.625 4.75C8.4375 4.58333 8.4375 4.40625 8.625 4.21875L9.25 3.625Z"
                                      fill="#ffffff" />
                              </g>
                              <defs>
                                  <clipPath id="clip0_44_1092">
                                      <rect width="14" height="16" fill="white" transform="matrix(1 0 0 -1 0 16)" />
                                  </clipPath>
                              </defs>
                          </svg>
                      </a>
                  </div>
              </div>
            </div>

            <div class="flex flex-col gap-3 font">
              <div class="flex flex-col gap-4">
                  <div class="relative flex justify-center items-center rounded-2xl overflow-hidden">
                      <a href="#" class="w-full">
                          <img src="{{ asset('images/img/post_1.png') }}"
                              class="w-full object-cover h-56 sm:h-64 md:h-64" alt="blog">
                      </a>
                      <div class="absolute top-0 left-0 pt-4 pl-4">
                          <h3 class="text-sm md:text-base font-Inter_Medium bg-[#E8F3E5] text-[#A0CD96] px-3 py-2 rounded-full">
                            Nacional 🇵🇪
                          </h3>
                      </div>
                  </div>
        
                  <div class="flex flex-col justify-start items-start gap-4">
                      <a href="#">
                          <h2 class="text-xl font-Pangea_Medium font-normal text-[#321675] tracking-tight line-clamp-2">Los derechos humanos de las mujeres y la igualdad de género
                          </h2>
                      </a>
                      
                      <p class="text-[#262556] font-Pangea_Light font-normal text-base line-clamp-2">
                          Nam sit amet placerat ligula. Integer sollicitudin sagittis lacinia. 
                          Etiam non aliquet orci. Aliquam id ex quam...
                      </p>
                  
                      <a  href="#" 
                          class="bg-[#A9A0E5] rounded-3xl px-5 py-4 text-base font-Pangea_Medium font-normal text-white  leading-tight flex flex-row gap-2 items-center">
                          Leer Artículo
                          <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_44_1092)">
                                  <path
                                      d="M9.25 3.625C9.41667 3.4375 9.58333 3.4375 9.75 3.625L13.875 7.75C14.0625 7.91667 14.0625 8.08333 13.875 8.25L9.75 12.375C9.58333 12.5625 9.41667 12.5625 9.25 12.375L8.625 11.7812C8.4375 11.5938 8.4375 11.4167 8.625 11.25L11.1562 8.8125H0.375C0.125 8.8125 0 8.6875 0 8.4375V7.5625C0 7.3125 0.125 7.1875 0.375 7.1875H11.1562L8.625 4.75C8.4375 4.58333 8.4375 4.40625 8.625 4.21875L9.25 3.625Z"
                                      fill="#ffffff" />
                              </g>
                              <defs>
                                  <clipPath id="clip0_44_1092">
                                      <rect width="14" height="16" fill="white" transform="matrix(1 0 0 -1 0 16)" />
                                  </clipPath>
                              </defs>
                          </svg>
                      </a>
                  </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="grid grid-cols-1 xl:grid-cols-5 w-full gap-12 px-[8%] py-12 xl:py-16 bg-[#EBEBFF]">
              <div class="flex flex-col justify-start gap-5 text-textWhite xl:col-span-2">

                  <h1
                      class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                      ¿Tienes alguna pregunta o comentario?
                  </h1>
                  <p class="text-[#262556] text-base font-Pangea_Regular">
                    ¡Nos encantaría saber de ti! Ponte en contacto con nosotros a través del
                    formulario a continuación o visítanos en nuestras redes sociales.
                  </p>

                  <div class=" ">
                    <p class="text-[#262556] text-base font-Pangea_Regular">Telefono</p>
                    <h2 class="text-[#262556] text-lg font-semibold font-Pangea_Regular">+51 999 999 999</h2>
                  </div>

                  <div class=" ">
                    <p class="text-[#262556] text-base font-Pangea_Regular">E-mail</p>
                    <h2 class="text-[#262556] text-lg font-semibold font-Pangea_Regular">info@uniyopong.com.pe</h2>
                  </div>

              </div>

              <div class="flex flex-col justify-center items-end xl:col-span-3">
                <form class="font-Pangea_Medium w-full xl:w-3/4" id="formContactos">
                    <div class="grid grid-cols-2 gap-5 w-full">
                      <div class="col-span-2 w-full">
                        <input type="text" placeholder="Nombre Completo " name="name"
                          class="w-full h-14 bg-[#F8F8F8] rounded-xl border-transparent focus:border-[#A9A0E5] focus:border-border-[2px] focus:ring-0 border-[2px]">
                      </div>
                      <div class="col-span-2 w-full">
                        <input type="text" placeholder="Correo Electronico" name="email" id="email"
                          class="w-full h-14 bg-[#F8F8F8] rounded-xl border-transparent focus:border-[#A9A0E5] focus:border-border-[2px] focus:ring-0 border-[2px]">
                      </div>
                      <div class="col-span-2 w-full">
                        <input type="text" placeholder="Asunto " name="asunto"
                          class="w-full h-14 bg-[#F8F8F8] rounded-xl border-transparent focus:border-[#A9A0E5] focus:border-border-[2px] focus:ring-0 border-[2px]">
                      </div>
                      <div class="col-span-2 w-full">
                        <textarea type="text" placeholder="Mensaje " name="message" class="w-full h-24 bg-[#F8F8F8] rounded-xl border-transparent focus:border-[#A9A0E5] focus:border-border-[2px] focus:ring-0 border-[2px]"></textarea>
                      </div>
                      <div class="col-span-2 w-full">
                        <select id="custom-select" class="w-full">
                            <option></option>
                            <option value="sitio-web">Sitio web</option>
                            <option value="redes-sociales">Redes sociales</option>
                            <option value="recomendacion">Recomendación</option>
                            <option value="otro">Otro</option>
                        </select>
                      </div>
                    </div>  
                    <div class="flex justify-start w-full pt-8">
                      <button class="bg-morauniyop text-white font-Pangea_Regular text-lg px-10 py-3 rounded-full w-full tracking-wide">Enviar</button>
                    </div>
                </form>
              </div>
          </div>
        </section>

    </main>
    {{-- modalOfertas --}}



    <!-- Modal toggle -->


    <!-- Main modal -->

    <div id="modalofertas" class="modal">

        <!-- Modal body -->
        <div class="p-1 ">
            <x-swipper-card-ofertas :items="$popups" id="modalOfertas" />
        </div>


    </div>

    
@section('scripts_importados')

    <script>
        let pops = @json($popups);
        $(document).ready(function() {
            console.log(pops.length)
            if (pops.length > 0) {
                $('#modalofertas').modal({
                    show: true,
                    fadeDuration: 100
                })

            }

        })
    </script>
    <script>
      var carrouselTestimonios = new Swiper(".myTestimonios", {
        slidesPerView: 1, //3
        spaceBetween: 20,
        loop: true,
        grabCursor: false,
        centeredSlides: false,
        initialSlide: 0,
        speed: 1000,
        pagination: {
          el: ".swiper-pagination-testimonios",
          clickable: true, 
        },
        navigation: {
        nextEl: ".next-testimonios",
        prevEl: ".prev-testimonios",
        },
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
      });
    </script>
    <script>
        $(document).ready(function() {
            $('#custom-select').select2({
                placeholder: '¿Cómo nos encontraste?',
                minimumResultsForSearch: Infinity,
                templateSelection: function(data, container) {
                    // Add custom styling to selected option
                    $(container).addClass("");
                    return data.text;
                }
            });
        });
    </script>

@stop

@stop
