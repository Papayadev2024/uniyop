@extends('components.public.matrix', ['pagina' => 'voluntario'])

@section('css_importados')

@stop

@section('content')

    <main class="z-[15] ">

        <section>
            <div class="grid grid-cols-1 xl:grid-cols-2 w-full gap-12 px-[8%] py-12 xl:py-16 bg-[#F6D84D]">
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
                            class="bg-[#A9A0E5] text-white px-5 py-3 rounded-3xl text-base border-2 flex gap-2 border-[#A9A0E5]  ">Quiero
                            ser Uniyop
                            <img src="{{ asset('images/svg/flechablanca.svg') }}" /></a>

                    </div>
                </div>
            </div>
        </section>


        <section class="flex flex-col gap-5">
            <div class="grid grid-cols-1 w-full px-[8%] pt-12 xl:pt-16">
                <div class="flex flex-col justify-center">
                    <h2 class="text-[#A9A0E5] font-Pangea_Semibold text-lg">Se UniYop</h2>
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight max-w-lg">
                        Oportunidades de Voluntariado
                    </h1>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 w-full gap-10 lg:gap-24 px-[8%] pb-12 xl:pb-16">
                <div class="flex flex-col justify-start gap-5">
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        En UNIYOP, ofrecemos una variedad de oportunidades de voluntariado diseñadas para
                        adaptarse a diferentes habilidades, experiencias y disponibilidad de tiempo. Ya seas
                        un profesional con experiencia en el campo o simplemente alguien que quiere hacer
                        una diferencia con un corazón compasivo y una voluntad de aprender, ¡hay un lugar
                        para ti en nuestro equipo! Aquí tienes algunas de las oportunidades disponibles:
                    </p>

                    <div>
                        <div
                            class="inline-block py-2 px-4 bg-[#A0CD96] text-white font-Pangea_Semibold text-xl rounded-t-2xl">
                            <h2>Voluntariado Profesional</h2>
                        </div>
                        <div class="bg-[#E8F3E5] p-6 rounded-r-3xl rounded-bl-3xl">
                            <p class="text-base font-Pangea_Regular ">
                            <ul class="list-disc px-6 text-[#262556]">
                                <li><b>Psicólogos y Consejeros:</b> Proporciona apoyo emocional y terapéutico a las víctimas
                                    de violencia.</li>
                                <li><b>Trabajadores Sociales:</b> Ofrece asistencia y recursos a individuos y familias
                                    afectados por la violencia.</li>
                                <li><b>Abogados:</b> Brinda asesoramiento legal y representa a las víctimas en procesos
                                    legales.</li>
                                <li><b>Educadores:</b> Imparte talleres y programas de concienciación sobre la prevención de
                                    la violencia.</li>
                            </ul>
                            </p>
                        </div>
                    </div>

                    <div>
                        <div
                            class="inline-block py-2 px-4 bg-[#F094BC] text-white font-Pangea_Semibold text-xl rounded-t-2xl">
                            <h2>Voluntariado General</h2>
                        </div>
                        <div class="bg-[#FBE8F1] p-6 rounded-r-3xl rounded-bl-3xl">
                            <p class="text-base font-Pangea_Regular ">
                            <ul class="list-disc px-6 text-[#262556]">
                                <li><b>Apoyo Administrativo:</b> Ayuda con tareas de oficina, organización de eventos y
                                    gestión de voluntarios.</li>
                                <li><b>Acompañamiento a Víctimas:</b> Brinda apoyo y compañía a las personas afectadas por
                                    la violencia.</li>
                                <li><b>Divulgación y Sensibilización:</b> Participa en campañas de concienciación y
                                    actividades de sensibilización en la comunidad.</li>
                                <li><b>Traducción y Interpretación:</b> Proporciona servicios de traducción e interpretación
                                    para personas que tienen diferentes dialectos.</li>
                            </ul>
                            </p>
                        </div>
                    </div>

                </div>

                <div class="flex flex-col justify-start items-center">

                    <img src="{{ asset('images/img/voluntariado.png') }}" />
                </div>
            </div>
        </section>


        <section class="bg-[#F5F8FF]">
            <div class="grid grid-cols-1 xl:grid-cols-2 w-full gap-12 px-[8%] py-12 xl:py-16">
                <div class="flex flex-col justify-center gap-5">
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                        ¿Por qué Voluntariar?
                    </h1>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        El voluntariado en UNIYOP no solo te brinda la oportunidad de contribuir a una causa importante, sino que
                        también te ofrece numerosos beneficios personales y profesionales, incluyendo:
                    </p>
                </div>
                <div class="flex flex-col justify-center gap-5">
                    <div class="bg-[#E8F3E5] p-6 rounded-3xl">
                        <p class="text-base font-Pangea_Regular ">
                        <ul class="list-disc px-6 text-[#262556]">
                            <li><b>Impacto Significativo:</b> Haz una diferencia tangible en la vida de las personas afectadas por la violencia.</li>
                            <li><b>Desarrollo de Habilidades:</b> Adquiere nuevas habilidades y experiencia en un entorno desafiante y gratificante.</li>
                            <li><b>Conexiones Significativas:</b> Conoce a personas apasionadas y comprometidas que comparten tus valores y objetivos.</li>
                            <li><b>Sentido de Propósito:</b> Encuentra un sentido de propósito y satisfacción al saber que estás contribuyendo a un mundo más seguro y justo.</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="grid grid-cols-1 xl:grid-cols-2 w-full gap-12 px-[8%] py-12 xl:py-16">
                <div class="flex flex-col justify-start gap-5">
                    <h2 class="text-[#A9A0E5] font-Pangea_Semibold text-lg">Sobre nosotros</h2>
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                        Cómo Aplicar
                    </h1>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        Si estás interesado en ser voluntario en UNIYOP, completa nuestro formulario de solicitud en línea. Nos pondremos 
                        en contacto contigo lo antes posible para discutir las oportunidades disponibles y el proceso de selección
                    </p>
                    <div class="flex flex-row gap-5 font-Pangea_Regular">
                        <a
                            class="bg-[#A9A0E5] text-white px-5 py-3 rounded-3xl text-base border-2 flex gap-2 border-[#A9A0E5]  ">Voluntariado
                            <img src="{{ asset('images/svg/flechablanca.svg') }}" /></a>
                    </div>
                </div>
                <div class="flex flex-col justify-center gap-5 px-[5%] p-6 bg-[#F8FAFF] rounded-3xl">
                    
                        <form class="font-Pangea_Medium w-full" id="formContactos">
                            <div class="grid grid-cols-2 gap-5 w-full">
                              <div class="col-span-2 w-full flex flex-col gap-2">
                                <span class="text-[#566A7F] text-sm font-Pangea_Light font-semibold">Nombre Completo</span>
                                <input type="text" placeholder="Nombre Completo " name="name" id="name"
                                  class="w-full h-14 bg-white rounded-xl border-transparent focus:border-[#A9A0E5] focus:border-border-[2px] focus:ring-0 border-[2px]">
                              </div>
                              <div class="col-span-2 lg:col-span-1 w-full">
                                <span class="text-[#566A7F] text-sm font-Pangea_Light font-semibold">Correo electrónico</span>
                                <input type="text" placeholder="Correo electrónico" name="email" id="email"
                                  class="w-full h-14 bg-white rounded-xl border-transparent focus:border-[#A9A0E5] focus:border-border-[2px] focus:ring-0 border-[2px]">
                              </div>
                              <div class="col-span-2 lg:col-span-1 w-full">
                                <span class="text-[#566A7F] text-sm font-Pangea_Light font-semibold">Teléfono</span>
                                <input type="text" placeholder="Correo electrónico" name="cellphone" id="cellphone"
                                  class="w-full h-14 bg-white rounded-xl border-transparent focus:border-[#A9A0E5] focus:border-border-[2px] focus:ring-0 border-[2px]">
                              </div>
                              <div class="col-span-2 w-full">
                                <span class="text-[#566A7F] text-sm font-Pangea_Light font-semibold">¿Por qué te gustaría ser voluntario/a en UniYop?</span>
                                <input type="text" placeholder="¿Por qué?" name="voluntariado"
                                  class="w-full h-14 bg-white rounded-xl border-transparent focus:border-[#A9A0E5] focus:border-border-[2px] focus:ring-0 border-[2px]">
                              </div>
                              <div class="col-span-2 w-full">
                                <span class="text-[#566A7F] text-sm font-Pangea_Light font-semibold">¿Qué habilidades o experiencia puedes aportar como voluntario/a?</span>
                                <input type="text" placeholder="..." name="habilidades"
                                  class="w-full h-14 bg-white rounded-xl border-transparent focus:border-[#A9A0E5] focus:border-border-[2px] focus:ring-0 border-[2px]">
                              </div>
                              <div class="col-span-2 w-full">
                                <span class="text-[#566A7F] text-sm font-Pangea_Light font-semibold">¿Qué área te gustaría apoyar?
                                    (Selecciona todas las opciones que correspondan)</span>
                                <div class="flex flex-wrap gap-4 font-Pangea_Light font-semibold text-[#566A7F] mt-2">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox" name="check" value="1" >
                                        <span class="ml-2">Organización de eventos</span>
                                    </label>

                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox" name="check" value="1" >
                                        <span class="ml-2">Apoyo emocional a las víctimas</span>
                                    </label>

                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox" name="check" value="1" >
                                        <span class="ml-2">Recaudación de fondos</span>
                                    </label>

                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox" name="check" value="1" >
                                        <span class="ml-2">Promoción y sensibilización</span>
                                    </label>

                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox" name="check" value="1" checked>
                                        <span class="ml-2">Otro(Especificar)</span>
                                    </label>
                                </div>
                                <div>
                                    <input type="text" placeholder="Especificar" name="voluntariado"
                                  class="w-full h-14 mt-2 bg-white rounded-xl border-transparent focus:border-[#A9A0E5] focus:border-border-[2px] focus:ring-0 border-[2px]">
                                </div>
                              </div>
                              <div class="col-span-2 w-full">
                                <span class="text-[#566A7F] text-sm font-Pangea_Light font-semibold">¿Cuánto tiempo puedes dedicar como voluntario/a?
                                    (Selecciona una opción)</span>
                                <div class="flex flex-wrap gap-4 font-Pangea_Light font-semibold text-[#566A7F] mt-2">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="check" value="1" >
                                        <span class="ml-2">Menos de 5 horas a la semana</span>
                                    </label>

                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="check" value="1" >
                                        <span class="ml-2">Entre 5 y 10 horas a la semana</span>
                                    </label>

                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="check" value="1" >
                                        <span class="ml-2">Más de 10 horas a la semana</span>
                                    </label>
                                </div>
                              </div>
                              <div class="col-span-2 w-full">
                                <span class="text-[#566A7F] text-sm font-Pangea_Light font-semibold">¿Tienes alguna experiencia previa como voluntario/a?
                                    (Selecciona una opción)</span>
                                <div class="flex flex-wrap gap-4 font-Pangea_Light font-semibold text-[#566A7F] mt-2">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="check" value="1" >
                                        <span class="ml-2">Si</span>
                                    </label>

                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="check" value="1" >
                                        <span class="ml-2">No</span>
                                    </label>
                                </div>
                              </div>
                              <div class="col-span-2 w-full">
                                <span class="text-[#566A7F] text-sm font-Pangea_Light font-semibold">Si respondiste "Sí" a la pregunta anterior, por favor describe tu experiencia como voluntario/a:</span>
                                <textarea type="text" placeholder="Tu experiencia" name="message" class="mt-2 w-full h-20 bg-white rounded-xl border-transparent focus:border-[#A9A0E5] focus:border-border-[2px] focus:ring-0 border-[2px]"></textarea>
                              </div>
                            </div>  
                            <div class="flex justify-start w-full pt-8">
                              <button class="bg-[#3D8BF2] text-white font-Pangea_Regular text-lg px-10 py-3 rounded-full w-full tracking-wide">Enviar</button>
                            </div>
                        </form>
                     
                </div>
            </div>
        </section>


        <section class="py-12 lg:py-20 flex flex-col w-full gap-12 relative bg-[#F5F8FF]">
            <div class="flex flex-col justify-center items-center w-11/12 mx-auto gap-3">
                <h2 class="text-[#A9A0E5] font-Pangea_Semibold text-lg">FAQs</h2>
                <h1 class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight max-w-lg">
                    Preguntas Frecuentes
                </h1>
            </div>

            <div class="flex flex-col justify-center items-center w-11/12 mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 w-full gap-y-5">
                    <div>
                        <div class="py-3 lg:py-3 bg-[#EDEDFA] rounded-2xl">
                            <details class="group bg-cardflip px-5 py-2 rounded-2xl">
                                <summary
                                    class="flex cursor-pointer list-none items-center justify-between font-medium gap-10">
                                    <span class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-xl leading-none md:leading-tight max-w-lg">
                                        ¿Pregunta Frecuente?
                                    </span>
                                    <span class="transition group-open:rotate-180">
                                        <img src="{{ asset('images/svg/flechapreguntas.svg') }}" />
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-[#262556] text-base font-Pangea_Regular">
                                    Etiam lacinia tortor sed nisi imperdiet, eu rhoncus felis semper.
                                    Fusce venenatis magna vel fermentum feugiat. Integer ullamcorper mauris sit amet.
                                </p>
                            </details>
                        </div>
                    </div>
                    <div>
                        <div class="py-3 lg:py-3 bg-[#EDEDFA] rounded-2xl">
                            <details class="group bg-cardflip px-5 py-2 rounded-2xl">
                                <summary
                                    class="flex cursor-pointer list-none items-center justify-between font-medium gap-10">
                                    <span class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-xl leading-none md:leading-tight max-w-lg">
                                        ¿Pregunta Frecuente?
                                    </span>
                                    <span class="transition group-open:rotate-180">
                                        <img src="{{ asset('images/svg/flechapreguntas.svg') }}" />
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-[#262556] text-base font-Pangea_Regular">
                                    Etiam lacinia tortor sed nisi imperdiet, eu rhoncus felis semper.
                                    Fusce venenatis magna vel fermentum feugiat. Integer ullamcorper mauris sit amet.
                                </p>
                            </details>
                        </div>
                    </div>
                    <div>
                        <div class="py-3 lg:py-3 bg-[#EDEDFA] rounded-2xl">
                            <details class="group bg-cardflip px-5 py-2 rounded-2xl">
                                <summary
                                    class="flex cursor-pointer list-none items-center justify-between font-medium gap-10">
                                    <span class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-xl leading-none md:leading-tight max-w-lg">
                                        ¿Pregunta Frecuente?
                                    </span>
                                    <span class="transition group-open:rotate-180">
                                        <img src="{{ asset('images/svg/flechapreguntas.svg') }}" />
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-[#262556] text-base font-Pangea_Regular">
                                    Etiam lacinia tortor sed nisi imperdiet, eu rhoncus felis semper.
                                    Fusce venenatis magna vel fermentum feugiat. Integer ullamcorper mauris sit amet.
                                </p>
                            </details>
                        </div>
                    </div>
                    <div>
                        <div class="py-3 lg:py-3 bg-[#EDEDFA] rounded-2xl">
                            <details class="group bg-cardflip px-5 py-2 rounded-2xl">
                                <summary
                                    class="flex cursor-pointer list-none items-center justify-between font-medium gap-10">
                                    <span class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-xl leading-none md:leading-tight max-w-lg">
                                        ¿Pregunta Frecuente?
                                    </span>
                                    <span class="transition group-open:rotate-180">
                                        <img src="{{ asset('images/svg/flechapreguntas.svg') }}" />
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-[#262556] text-base font-Pangea_Regular">
                                    Etiam lacinia tortor sed nisi imperdiet, eu rhoncus felis semper.
                                    Fusce venenatis magna vel fermentum feugiat. Integer ullamcorper mauris sit amet.
                                </p>
                            </details>
                        </div>
                    </div>
                    <div>
                        <div class="py-3 lg:py-3 bg-[#EDEDFA] rounded-2xl">
                            <details class="group bg-cardflip px-5 py-2 rounded-2xl">
                                <summary
                                    class="flex cursor-pointer list-none items-center justify-between font-medium gap-10">
                                    <span class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-xl leading-none md:leading-tight max-w-lg">
                                        ¿Pregunta Frecuente?
                                    </span>
                                    <span class="transition group-open:rotate-180">
                                        <img src="{{ asset('images/svg/flechapreguntas.svg') }}" />
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-[#262556] text-base font-Pangea_Regular">
                                    Etiam lacinia tortor sed nisi imperdiet, eu rhoncus felis semper.
                                    Fusce venenatis magna vel fermentum feugiat. Integer ullamcorper mauris sit amet.
                                </p>
                            </details>
                        </div>
                    </div>
                    <div>
                        <div class="py-3 lg:py-3 bg-[#EDEDFA] rounded-2xl">
                            <details class="group bg-cardflip px-5 py-2 rounded-2xl">
                                <summary
                                    class="flex cursor-pointer list-none items-center justify-between font-medium gap-10">
                                    <span class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-xl leading-none md:leading-tight max-w-lg">
                                        ¿Pregunta Frecuente?
                                    </span>
                                    <span class="transition group-open:rotate-180">
                                        <img src="{{ asset('images/svg/flechapreguntas.svg') }}" />
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-[#262556] text-base font-Pangea_Regular">
                                    Etiam lacinia tortor sed nisi imperdiet, eu rhoncus felis semper.
                                    Fusce venenatis magna vel fermentum feugiat. Integer ullamcorper mauris sit amet.
                                </p>
                            </details>
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex flex-col justify-center items-center w-11/12 mx-auto bg-[#DCECFD] rounded-3xl">
                <div class="w-full py-10 text-center  max-w-4xl space-y-4">
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        ¿Tienes alguna pregunta sobre el voluntariado en UNIYOP? 
                        Escribenos al correo electrónico voluntariado@uniyopong.com 
                    </p>
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-2xl leading-none md:leading-tight ">
                        ¡Esperamos trabajar juntos para crear un futuro libre de violencia!
                    </h1>
                </div>
            </div>
        </section>

        


    </main>

@section('scripts_importados')
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
