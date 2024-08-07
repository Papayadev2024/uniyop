@extends('components.public.matrix', ['pagina' => 'nosotros'])

@section('css_importados')

@stop

@section('content')

    <main class="z-[15] ">

       
        <section class="bg-[#F5F8FF] px-[8%]">
            <div class="grid grid-cols-1 w-full gap-12  py-12 xl:py-16">
                <div class="flex flex-col justify-center gap-5 text-center">
                    <img src="{{ asset('images/img/portadauniyopf.png') }}" />
                </div>
            </div>
        </section>

        <section class="flex flex-col gap-5">
            <div class="grid grid-cols-1 w-full px-[8%] pt-12 xl:pt-16">
                <div class="flex flex-col justify-center">
                    <h2 class="text-[#A9A0E5] font-Pangea_Semibold text-lg">Origen</h2>
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                        Nuestra Historia
                    </h1>
                </div>
            </div>    
           
            <div class="grid grid-cols-1 xl:grid-cols-2 w-full gap-5 lg:gap-12 px-[8%] pb-12 xl:pb-16">
                <div class="flex flex-col justify-start gap-5">
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        Este testimonio surge de la inspiración y admiración que siento hacia mi padre, 
                        José Ceferino Millones Jacinto, un hombre que enfrentó la extrema pobreza desde 
                        temprana edad. Perdió a cuatro de sus hermanos debido a la falta de alimentos, 
                        mientras él, desde niño, comenzó a trabajar sin descuidar su educación. A pesar 
                        de las dificultades, demostró una inteligencia excepcional y logró salir adelante 
                        gracias a su dedicación a los estudios y sus esfuerzos.
                    </p>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        Antes de cumplir los doce años, fui por primera vez a pasar las vacaciones con mi 
                        padre. Al principio, lo veía como alguien frío, rudo y centrado únicamente en los 
                        negocios. Sin embargo, conforme pasaba el tiempo, comencé a vislumbrar otro lado 
                        de él. Observaba cómo ayudaba a las personas menos favorecidas, especialmente a los 
                        habitantes de donde él nació y al cual la llamaba la República Occidental de la 
                        Caleta San José en Lambayeque y de donde fue Alcalde por más de dos periodos, 
                        haciendo muchas obras y con parte de su dinero. Durante varios veranos en Chiclayo, 
                        un fin de semana de ellos nos quedamos solos, momento en el que, entre lágrimas, 
                        compartió conmigo las penurias de su infancia. A la edad de ocho años, siendo el 
                        mayor de once hermanos, tuvo que contribuir al sustento familiar vendiendo agua, 
                        periódicos, pescado en el mercado, para años posteriores tener embarcaciones de 
                        pesca y demás, pero cuando logró la mejoría económica, ya había perdido cuatro de 
                        sus hermanos por hambre.
                    </p>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        Al verlo vulnerable y escuchar su historia, mi corazón se conmovió profundamente. 
                        Admiré su capacidad para superar tanto sufrimiento y comprendí el origen de su 
                        incansable trabajo y su éxito financiero. Con la llegada de la Navidad, recordé cómo 
                        desde pequeña iba al mercado central con mi madre a comprar juguetes, sin saber a 
                        quiénes estaban destinados.
                    </p>        
                </div>

                <div class="flex flex-col justify-start gap-5">
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        Ahora, me encontraba del otro lado, viendo a los trabajadores de mi padre envolviendo 
                        regalos y preparando chocolatadas y panetones para regalar. Sentí un inmenso orgullo 
                        al ver su generosidad, lo que me llevó a admirarlo aún más.
                    </p>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        Un día, le pregunté por qué no hacía pública su labor altruista. Él me respondió que 
                        la ayuda se brinda por el deseo genuino de ayudar, no por vanagloria. Este comentario 
                        me hizo reflexionar y decidí seguir su ejemplo. Con el apoyo de mi madre, organicé mi 
                        primera Navidad solidaria para cincuenta niños en San Martín de Porres. Con el tiempo, 
                        este proyecto creció con la ayuda de amigos de mi madre, llegando a beneficiar a mil 
                        quinientos niños en Huaycán y José Gálvez. Lamentablemente, la pandemia detuvo nuestras 
                        actividades, dejándome muy apenada.
                    </p>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        En el 2023, le expresé a mi esposo mi deseo de seguir ayudando a mi país, pero me desanimé 
                        al pensar que no contábamos con los recursos necesarios. Sin embargo, él me propuso crear 
                        una ONG y me ofreció su apoyo, argumentando que juntos podríamos ayudar a muchas más personas. 
                        Así nació nuestro gran proyecto, UNIYOP, lleno de amor y esperanza. Decidimos ampliar nuestro 
                        alcance más allá de la Navidad, brindando apoyo a todas las personas que han sufrido violencia 
                        en cualquier forma. Comenzamos con dos eventos en Chacrasana para el Colegio Pio y La Ollita 
                        Común Mujeres Luchadoras Ex Chacrasana, y seguimos comprometidos a ayudar a todos, sin importar 
                        las circunstancias.
                    </p>       
                </div>
            </div>
        </section>

        <section class="px-[8%]">
            
            <div class="grid grid-cols-1 md:grid-cols-2 w-full gap-12 pt-12 pb-16">
                <div>
                    <div class="bg-[#E8F3E5] p-6 rounded-r-3xl rounded-3xl space-y-2">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl leading-none md:leading-tight">
                            ¿Que?
                        </h1>
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                            Se concreta en cualquiera de las formas de actividad sexual no deseada: violación, abuso sexual,
                            acoso sexual, explotación sexual, tráfico de personas con fines sexuales y cualquier otra forma
                            de violencia sexual.
                        </p>
                    </div>
                </div>

                <div class="hidden md:flex flex-col items-start justify-end">
                    <img src="{{ asset('images/img/1flecha.png') }}" />
                </div>

                <div class="hidden md:flex flex-col items-end justify-end">
                    <img src="{{ asset('images/img/2flecha.png') }}" />
                </div>

                <div class="bg-[#FBE8F1] p-6 rounded-r-3xl rounded-3xl space-y-2">
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl leading-none md:leading-tight">
                        ¿Cómo?
                    </h1>
                    <p class="text-[#262556] text-base font-Pangea_Regular ">
                        <ul class="list-disc px-6">
                            <li>Ofreciendo apoyo personalizado, emocional, asesoramiento y recursos prácticos a las víctimas para ayudarles a romper el silencio y superar los desafíos asociados con la violencia en todas sus formas.</li><br>
                            <li>Colaborar con organismos gubernamentales, organizaciones no gubernamentales y la sociedad en general para crear conciencia y fomentar una cultura de prevención y rechazo a la violencia en todas sus formas.</li><br>
                            <li>Establecer información de líneas de ayuda y centros de atención accesibles para que se les brinde la asistencia inmediata a aquellos que enfrentan situaciones de violencia en todas sus formas. </li>
                        </ul>
                    </p>
                </div>

                <div>
                    <div class="bg-[#E8F3E5] p-6 rounded-r-3xl rounded-3xl space-y-2">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl leading-none md:leading-tight">
                            ¿Donde?
                        </h1>
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                            <ul class="list-disc px-6">
                                <li>En todo ámbito local, nacional e internacional.</li>
                                <li>En el lugar donde suceden los hechos lamentables de violencia.</li>
                            </ul>
                        </p>
                    </div>
                </div>

                <div class="hidden md:flex flex-col items-end justify-end">
                    
                </div>

                <div class="hidden md:flex flex-col items-end justify-start">
                    <img src="{{ asset('images/img/3flecha.png') }}" />
                </div>

                <div>
                    <div class="bg-[#FBE8F1] p-6 rounded-r-3xl rounded-3xl space-y-2">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl leading-none md:leading-tight">
                            ¿Cuándo?
                        </h1>
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                            <ul class="list-disc px-6">
                                <li>A través de la prevención, actuando de manera oportuna con capacitaciones, charlas, de manera presencial y virtual.</li>
                                <li>Contamos con una agenda calendarizada con programas y capacitaciones, lo que nos permite asegurar el cumplimiento puntual de cada evento.</li>
                            </ul>
                        </p>
                    </div>
                </div>

                <div>
                    <div class="bg-[#E8F3E5] p-6 rounded-r-3xl rounded-3xl space-y-2">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl leading-none md:leading-tight">
                            ¿Por qué?
                        </h1>
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                            <ul class="list-disc px-6">
                                <li>A través de la prevención, actuando de manera oportuna con capacitaciones, charlas, de manera presencial y virtual.</li>
                                <li> Porque creemos en la importancia de construir una sociedad donde la violencia reduzca, y donde las víctimas encuentren el apoyo necesario para reconstruir sus vidas de manera segura y saludable.</li>
                            </ul>
                        </p>
                    </div>
                </div>

                <div class="hidden md:flex flex-col items-start justify-start">
                    <img src="{{ asset('images/img/4flecha.png') }}" />
                </div>

            </div>
        </section>

        <section>
            <div class="grid grid-cols-1 xl:grid-cols-2 w-full gap-12 xl:gap-16 px-[8%] py-12 xl:py-16">
                
                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('images/img/unidos.png') }}" class="object-cover" />
                </div>
              
                <div class="flex flex-col justify-center gap-5 text-textWhite ">
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                        Misión
                    </h1>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        En UNIYOP, nuestra misión es trabajar incansablemente para prevenir y abordar la violencia 
                        en todas sus formas, promoviendo la unidad global y priorizando el bienestar individual. 
                        Nos esforzamos por desarrollar e implementar programas integrales y recursos especializados 
                        que empoderen a ciudadanos y comunidades para construir un mundo más seguro y pacífico.
                    </p>
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                        Visión
                    </h1>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        Nuestra visión en UNIYOP es un mundo donde todas las personas vivan libres de violencia, 
                        donde la diversidad humana sea celebrada y donde la solidaridad transcienda fronteras. 
                        Visualizamos comunidades empoderadas, en las que cada persona tenga acceso a los recursos 
                        necesarios para prevenir la violencia y responder de manera efectiva a sus efectos.
                    </p>
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                        Fines
                    </h1>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        Los fines de una organización como "UNIYOP", que se dedica a prevenir y erradicar la violencia
                         en todas sus formas, pueden estar alineados con la consecución de objetivos más amplios
                          y significativos. 
                    </p>
                </div>

            </div>
        </section>

        <section class="flex flex-col gap-5 bg-[#F5F8FF]">
            <div class="grid grid-cols-1 w-full px-[8%] pt-12 xl:pt-16 ">
                <div class="flex flex-col justify-center">
                    <h2 class="text-[#A9A0E5] font-Pangea_Semibold text-lg">Valores</h2>
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                        Nuestros Valores
                    </h1>
                </div>
            </div>    
           
            <div class="grid grid-cols-1 lg:grid-cols-6 w-full gap-4 px-[8%] pb-12 xl:pb-16">
                <div class="col-span-2">
                    <div class="bg-[#E8F3E5] p-6 rounded-r-3xl rounded-3xl space-y-2">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-2xl leading-none md:leading-tight">
                            Unidad
                        </h1>
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                            Creemos en la fuerza de la unidad global y en la importancia de trabajar juntos para abordar los desafíos de la violencia.
                        </p>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="bg-[#FBE8F1] p-6 rounded-r-3xl rounded-3xl space-y-2">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-2xl leading-none md:leading-tight">
                            Respeto
                        </h1>
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                            Valoramos y honramos la diversidad en todas sus formas, y nos comprometemos a tratar a todas las personas con dignidad y respeto.
                        </p>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="bg-[#E8F3E5] p-6 rounded-r-3xl rounded-3xl space-y-2">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-2xl leading-none md:leading-tight">
                            Responsabilidad
                        </h1>
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                            Asumimos la responsabilidad de nuestro impacto en la lucha contra la violencia y nos comprometemos a actuar con integridad y transparencia en todas nuestras acciones.
                        </p>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="bg-[#FCF6C5] p-6 rounded-r-3xl rounded-3xl space-y-2">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-2xl leading-none md:leading-tight">
                            Compromiso
                        </h1>
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                            Nos comprometemos activamente a trabajar hacia la prevención y erradicación de la violencia, demostrando una dedicación 
                            continua y firme en nuestras acciones y decisiones. Estamos comprometidos con nuestros objetivos y valores, y nos esforzamos por mantenernos enfocados en ellos a pesar de los desafíos que podamos enfrentar en el camino.
                        </p>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="bg-[#DCECFD] p-6 rounded-r-3xl rounded-3xl space-y-2">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-2xl leading-none md:leading-tight">
                            Empoderamiento
                        </h1>
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                            Buscamos empoderar a individuos y comunidades, proporcionándoles los recursos y el apoyo necesarios para prevenir y responder a la violencia de manera efectiva.
                        </p>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="bg-[#E8F3E5] p-6 rounded-r-3xl rounded-3xl space-y-2">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-2xl leading-none md:leading-tight">
                            Colaboración
                        </h1>
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                            Reconocemos que abordar la violencia requiere la colaboración de múltiples partes interesadas, y trabajamos en asociación con individuos, organizaciones y gobiernos para lograr un cambio duradero.
                        </p>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="bg-[#FBE8F1] p-6 rounded-r-3xl rounded-3xl space-y-2">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-2xl leading-none md:leading-tight">
                            Innovación
                        </h1>
                        <p class="text-[#262556] text-base font-Pangea_Regular ">
                            Nos comprometemos a desarrollar e implementar programas innovadores y recursos especializados que aborden las causas subyacentes de la violencia y promuevan soluciones sostenibles.
                        </p>
                    </div>
                </div>

            </div>
        </section>



    </main>
  
    
@section('scripts_importados')


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
