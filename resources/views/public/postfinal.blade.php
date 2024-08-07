@extends('components.public.matrix', ['pagina' => 'voluntario'])

@section('css_importados')

@stop

@section('content')

    <main class="z-[15] ">

        <section class="">
            <div class="grid grid-cols-1 w-full gap-12 xl:gap-16 px-[8%] py-12 xl:py-16 h-[450px] bg-cover bg-no-repeat" style="background-image: url({{asset('images/img/postuniyop.png')}})">

                <div class="flex flex-col justify-center items-center text-center">
                    <h1
                        class="text-white font-Pangea_Semibold tracking-tighter text-4xl md:text-5xl leading-none md:leading-tight">
                        Capacitaciones y Charlas para la Prevención de la Violencia Doméstica
                    </h1>
                </div>

            </div>
        </section>

        <section>
            <div class="grid grid-cols-1 w-full gap-5 px-[8%] py-12 xl:py-16">
                <h1
                    class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight">
                    Los derechos humanos de las mujeres y la igualdad de género
                </h1>
            
                <p class="text-[#262556] text-base font-Pangea_Regular">
                    Nam volutpat ante sed quam rhoncus hendrerit. Nunc quis neque porttitor, commodo
                    erat at, pretium quam. Pellentesque sed dapibus sem. Nulla sed felis maximus,
                    dictum libero eget, euismod metus. Cras aliquet cursus mauris, a congue mi scelerisque ut.
                </p>
                <p class="text-[#262556] text-base font-Pangea_Regular">
                    Pellentesque laoreet blandit molestie. Aenean vel finibus leo, vel dapibus sapien. Interdum
                    et malesuada fames ac ante ipsum primis in faucibus. Quisque pharetra dictum ipsum, eu porttitor
                    velit luctus quis.
                </p>

                <div class="flex flex-col justify-center items-center my-3 lg:my-7">
                    <img src="{{ asset('images/img/postimagen.png') }}" class="object-contain h-56 lg:h-96 w-full" />
                </div>

                <p class="text-[#262556] text-base font-Pangea_Regular">
                    Nam volutpat ante sed quam rhoncus hendrerit. Nunc quis neque porttitor, commodo
                    erat at, pretium quam. Pellentesque sed dapibus sem. Nulla sed felis maximus,
                    dictum libero eget, euismod metus. Cras aliquet cursus mauris, a congue mi scelerisque ut.
                </p>
                <p class="text-[#262556] text-base font-Pangea_Regular">
                    Pellentesque laoreet blandit molestie. Aenean vel finibus leo, vel dapibus sapien. Interdum
                    et malesuada fames ac ante ipsum primis in faucibus. Quisque pharetra dictum ipsum, eu porttitor
                    velit luctus quis.
                </p>
            </div>
        </section>

        <section class="text-center max-w-3xl mx-auto flex flex-col gap-3 mb-16">
            <h2 class="text-[#566A7F] text-2xl font-semibold font-Pangea_Regular">Compartir post</h2>
            <div class="flex flex-row gap-3 justify-center">
                <a><img src="{{ asset('images/svg/iguniyop.svg') }}" /></a>
                <a><img src="{{ asset('images/svg/igtwitter.svg') }}" /></a>
                <a><img src="{{ asset('images/svg/igfacebook.svg') }}" /></a>
            </div>
        </section>


    </main>

@section('scripts_importados')
    
@stop

@stop
