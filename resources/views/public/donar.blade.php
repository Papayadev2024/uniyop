@extends('components.public.matrix', ['pagina' => 'voluntario'])

@section('css_importados')

@stop

@section('content')

    <main class="z-[15] ">

        <section>
            <div class="grid grid-cols-1 xl:grid-cols-2 w-full gap-12 px-[8%] py-12 xl:py-16 bg-[#A9A0E5]">
            
                <div class="flex flex-col justify-center gap-5 text-textWhite ">
                    <h2 class="text-white font-Pangea_Semibold text-lg">Se UniYop</h2>
                    <h1
                        class="text-white font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                        Haz la Diferencia: Tu Apoyo Es Fundamental
                    </h1>
                    <p class="text-white text-base font-Pangea_Regular">
                        En UNIYOP, cada contribución cuenta. Con tu generosidad, podemos continuar nuestro 
                        trabajo vital para combatir la violencia en todas sus formas y construir un mundo 
                        más seguro y compasivo para todos.
                    </p>
                    <div class="flex flex-row gap-5 font-Pangea_Regular">
                        <a
                            class="bg-[#F6D84D] text-[#262556] px-5 py-3 rounded-3xl text-base border-2 flex gap-2 border-[#F6D84D]">
                            Quiero Apoyar
                            <img src="{{ asset('images/svg/flechaazul.svg') }}" /></a>

                    </div>
                </div>

                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('images/img/chica.png') }}" class="object-cover" />
                </div>

            </div>
        </section>


        <section class="flex flex-col gap-10">
            <div class="grid grid-cols-1 xl:grid-cols-2 w-full px-[8%] pt-12 xl:pt-16">
                <div class="flex flex-col justify-center gap-3">
                    <h2 class="text-[#A9A0E5] font-Pangea_Semibold text-lg">Se UniYop</h2>
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight max-w-lg">
                        ¿Cómo Puedes Ayudar?
                    </h1>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        En UNIYOP, ofrecemos una variedad de oportunidades de voluntariado diseñadas para
                        adaptarse a diferentes habilidades, experiencias y disponibilidad de tiempo. Ya seas
                        un profesional con experiencia en el campo o simplemente alguien que quiere hacer
                        una diferencia con un corazón compasivo y una voluntad de aprender, ¡hay un lugar
                        para ti en nuestro equipo! Aquí tienes algunas de las oportunidades disponibles:
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-3 w-full gap-10 px-[8%] pb-12 xl:pb-16">
                <div>
                    <div
                        class="inline-block py-2 px-4 bg-[#A9A0E5] text-white font-Pangea_Semibold text-xl rounded-t-2xl">
                        <h2>Dona Ahora</h2>
                    </div>
                    <div class="bg-[#EDEDFA] p-6 rounded-r-3xl rounded-bl-3xl text-[#262556]">
                        <p class="text-base font-Pangea_Regular ">
                            Tu contribución financiera permite que podamos ampliar nuestras iniciativas, llegar a más personas 
                            y proporcionar apoyo vital a aquellos que lo necesitan con urgencia.
                        </p>
                    </div>
                </div>

                <div>
                    <div
                        class="inline-block py-2 px-4 bg-[#F6D84D] text-[#262556] font-Pangea_Semibold text-xl rounded-t-2xl">
                        <h2>Voluntariado</h2>
                    </div>
                    <div class="bg-[#FCF6C5] p-6 rounded-r-3xl rounded-bl-3xl text-[#262556]">
                        <p class="text-base font-Pangea_Regular ">
                            ¿Tienes tiempo y habilidades para ofrecer? Únete a nuestro equipo de voluntarios 
                            y sé parte del cambio desde adentro.
                        </p>
                    </div>
                </div>

                <div>
                    <div
                        class="inline-block py-2 px-4 bg-[#A0CD96] text-[#262556] font-Pangea_Semibold text-xl rounded-t-2xl">
                        <h2>Difunde la Palabra</h2>
                    </div>
                    <div class="bg-[#E8F3E5] p-6 rounded-r-3xl rounded-bl-3xl text-[#262556]">
                        <p class="text-base font-Pangea_Regular ">
                            Comparte nuestra misión con amigos, familiares y colegas. Cada voz que se une a nuestra causa 
                            nos acerca un paso más hacia nuestro objetivo.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-[#F5F8FF]">
            <div class="grid grid-cols-1 xl:grid-cols-2 w-full gap-12 px-[8%] py-12 xl:py-16">
                <div class="flex flex-col justify-center gap-5">
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                        Beneficios del Apoyo
                    </h1>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        Tu Generosidad Cuenta: Descubre el Impacto de tu Contribución
                    </p>
                </div>
                <div class="flex flex-col justify-center gap-5">
                    <div class="bg-[#E8F3E5] p-6 rounded-3xl">
                        <p class="text-base font-Pangea_Regular ">
                        <ul class="list-disc px-6 text-[#262556]">
                            <li><b>Transforma Vidas:</b> Cada donación y cada gesto de apoyo marcan una diferencia tangible en la vida de aquellos afectados por la violencia.</li>
                            <li><b>Fomenta el Cambio:</b> Tu compromiso ayuda a crear conciencia, promover la prevención y trabajar hacia soluciones a largo plazo.</li>
                            <li><b>Forma Parte de Nuestra Comunidad:</b> Al unirte a nuestra causa, te unes a una red global de individuos comprometidos con la justicia y la igualdad.</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="flex flex-col">
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 w-full px-[8%] py-12 xl:py-16">
                <div class="flex flex-col justify-start gap-5">
                    <h2 class="text-[#A9A0E5] font-Pangea_Semibold text-lg">Cómo Puedes Participar</h2>
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight max-w-xl">
                        Haz Tu Marca en el Mundo: Únete a Nosotros Ahora
                    </h1>

                    <div class="flex flex-col justify-center gap-5">
                        <div class="bg-[#FCF6C5] p-6 rounded-3xl max-w-md space-y-5">
                            <p class="text-base font-Pangea_Regular text-[#262556]">
                                Haz clic en el botón de abajo para hacer una donación segura en línea o 
                                para obtener más información sobre cómo puedes apoyar nuestra misión. 
                                ¡Cada acción cuenta!
                            </p>
                            <a
                            class="bg-[#F6D84D] text-[#262556] font-semibold items-center justify-center px-5 py-3 rounded-3xl text-base border-2 flex gap-2 border-[#F6D84D]">
                            Quiero Apoyar
                            <img src="{{ asset('images/svg/flechaazul.svg') }}" /></a>

                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('images/img/donar.png') }}" />
                </div>
            </div>
        </section>
        
        <section class="py-12 lg:py-20 flex flex-col w-full gap-12 bg-[#F5F8FF]">
            <div class="flex flex-col justify-center items-center w-11/12 mx-auto bg-[#EDEDFA] rounded-3xl">
                <div class="w-full py-10 text-center space-y-6">
                    <p class="text-[#262556] text-base font-Pangea_Regular max-w-xl mx-auto mb-6">
                        ¿Tienes preguntas sobre cómo puedes contribuir? Estamos aquí para ayudarte 
                        a encontrar la mejor manera de apoyar nuestra causa.
                    </p>
                    <a class="text-white bg-[#A9A0E5] rounded-2xl font-Pangea_Semibold tracking-tighter text-xl leading-none md:leading-tight px-4 py-3">
                        ¡Contáctanos hoy mismo!
                    </a>
                </div>
            </div>
        </section>

    </main>

@section('scripts_importados')
    
@stop

@stop
