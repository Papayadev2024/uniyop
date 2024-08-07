@extends('components.public.matrix', ['pagina' => 'voluntario'])

@section('css_importados')

@stop

@section('content')

    <main class="z-[15] ">

        <section>
            <div class="grid grid-cols-1 xl:grid-cols-2 w-full gap-12 xl:gap-16 px-[8%] py-12 xl:py-16 bg-[#A0CD96]">
                
                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('images/img/organizacion.png') }}" class="object-cover" />
                </div>

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
        
                </div>

            </div>
        </section>


        <section class="flex flex-col gap-10">
            <div class="grid grid-cols-1 xl:grid-cols-2 w-full px-[8%] pt-12 xl:pt-16">
                <div class="flex flex-col justify-center gap-3"> 
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight max-w-lg">
                        Nuestra Organización
                    </h1>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 w-full gap-16 px-[8%] xl:px-[16%] pb-12 xl:pb-16">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col justify-center items-center w-full rounded-3xl overflow-hidden">
                        <img  src="{{ asset('images/img/userfinale.png') }}" class="h-96 object-cover w-full" />
                    </div>
                    <div class="flex flex-col justify-center">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl leading-none md:leading-tight">
                            Daniela Millones Campos
                        </h1>
                        <span class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-base leading-none md:leading-tight">Presidenta y Fundadora</span>
                        <p class="text-[#262556] text-base font-Pangea_Regular mt-4">
                            Donec lobortis bibendum nisl eu pellentesque. Mauris venenatis quam sed blandit rhoncus. 
                            Donec faucibus placerat metus eget ullamcorper. 
                            Nam vestibulum libero risus, vel ultricies turpis cursus non.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <div class="flex flex-col justify-center items-center w-full rounded-3xl overflow-hidden">
                        <img  src="{{ asset('images/img/userfinale.png') }}" class="h-96 object-cover w-full" />
                    </div>
                    <div class="flex flex-col justify-center">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl leading-none md:leading-tight">
                            Daniela Millones Campos
                        </h1>
                        <span class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-base leading-none md:leading-tight">Presidenta y Fundadora</span>
                        <p class="text-[#262556] text-base font-Pangea_Regular mt-4">
                            Donec lobortis bibendum nisl eu pellentesque. Mauris venenatis quam sed blandit rhoncus. 
                            Donec faucibus placerat metus eget ullamcorper. 
                            Nam vestibulum libero risus, vel ultricies turpis cursus non.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <div class="flex flex-col justify-center items-center w-full rounded-3xl overflow-hidden">
                        <img  src="{{ asset('images/img/userfinale.png') }}" class="h-96 object-cover w-full" />
                    </div>
                    <div class="flex flex-col justify-center">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl leading-none md:leading-tight">
                            Daniela Millones Campos
                        </h1>
                        <span class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-base leading-none md:leading-tight">Presidenta y Fundadora</span>
                        <p class="text-[#262556] text-base font-Pangea_Regular mt-4">
                            Donec lobortis bibendum nisl eu pellentesque. Mauris venenatis quam sed blandit rhoncus. 
                            Donec faucibus placerat metus eget ullamcorper. 
                            Nam vestibulum libero risus, vel ultricies turpis cursus non.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <div class="flex flex-col justify-center items-center w-full rounded-3xl overflow-hidden">
                        <img  src="{{ asset('images/img/userfinale.png') }}" class="h-96 object-cover w-full" />
                    </div>
                    <div class="flex flex-col justify-center">
                        <h1
                            class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl leading-none md:leading-tight">
                            Daniela Millones Campos
                        </h1>
                        <span class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-base leading-none md:leading-tight">Presidenta y Fundadora</span>
                        <p class="text-[#262556] text-base font-Pangea_Regular mt-4">
                            Donec lobortis bibendum nisl eu pellentesque. Mauris venenatis quam sed blandit rhoncus. 
                            Donec faucibus placerat metus eget ullamcorper. 
                            Nam vestibulum libero risus, vel ultricies turpis cursus non.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="flex flex-col gap-10 pb-10 lg:pb-16">
            <div class="grid grid-cols-1 w-full px-[8%]">
                <div class="flex flex-col justify-center items-center gap-3"> 
                    <h1
                        class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-3xl md:text-5xl leading-none md:leading-tight max-w-lg">
                        Nuestros Directores
                    </h1>
                </div>
            </div>

            <div class="grid grid-cols-1 w-full px-[8%]">
               <div class="flex flex-col bg-[#EDEDFA] p-5 xl:p-10 gap-4 rounded-3xl">
                    <div class="flex flex-row gap-4">
                        <div class="w-20">
                            <img src="{{ asset('images/img/imagensenora.png') }}" />
                        </div>
                        <div>
                            <h2 class="text-[#11023B] font-Pangea_Light text-sm">Directora Internacional</h2>
                            <h1
                                class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-xl lg:text-3xl leading-none md:leading-tight">
                                Geomar Dolores Pacheco Rivera
                            </h1>
                            <h2 class="text-[#11023B] font-Pangea_Light font-semibold text-sm">Email: geopacheco@uniyopong.com | internacional@uniyopong.com</h2>
                        </div>
                    </div>
                    <p class="text-[#262556] text-base font-Pangea_Regular">
                        <ul class="list-disc px-6 text-[#262556] text-base">
                            <li><b>Liderazgo Estratégico:</b> Establecer la visión y la dirección estratégica de las operaciones internacionales de la organización, asegurando que estén alineadas con la misión y los objetivos de la ONG.</li>
                            <li><b>Gestión de Programas y Proyectos Internacionales:</b> Supervisar el diseño, la implementación y la evaluación de programas y proyectos en diferentes países y regiones, garantizando que se cumplan los estándares de calidad y se maximice el impacto.</li>
                            <li><b>Relaciones Internacionales y Alianzas Estratégicas:</b> Cultivar relaciones sólidas con organizaciones socias, gobiernos, agencias internacionales, donantes y otras partes interesadas relevantes a nivel internacional para promover la colaboración y la coordinación de esfuerzos en áreas de interés común.</li>
                            <li><b>Desarrollo de Recursos Globales:</b> Liderar los esfuerzos de recaudación de fondos a nivel internacional, identificando nuevas oportunidades de financiamiento, negociando acuerdos de colaboración y asegurando la sostenibilidad financiera de los programas y proyectos internacionales.</li>
                            <li><b>Gestión de Personal Internacional:</b> Defender los intereses de la organización a nivel internacional, abogando por políticas y acciones que promuevan el cambio positivo y la justicia social en áreas relevantes para la misión de la ONG.</li>
                            <li><b>Advocacy y Promoción Global:</b> Supervisar la gestión financiera y administrativa de las operaciones internacionales de la organización, asegurando el cumplimiento normativo, la transparencia y la rendición de cuentas en todas las actividades financieras y administrativas.</li>
                            <li><b>Gestión de Riesgos y Seguridad:</b> Identificar y mitigar los riesgos operativos, de seguridad y legales asociados con las operaciones internacionales de la organización, garantizando la seguridad y el bienestar del personal y los beneficiarios.</li>
                            <li><b>Monitoreo, Evaluación y Aprendizaje:</b> Supervisar el monitoreo continuo, la evaluación del desempeño y el aprendizaje organizacional en el ámbito internacional, utilizando datos y lecciones aprendidas para mejorar la efectividad de los programas y proyectos.</li>
                            <li><b>Comunicación Global:</b> Desarrollar e implementar estrategias de comunicación efectivas a nivel global para aumentar la visibilidad de la organización, compartir historias de impacto y movilizar el apoyo a su causa en diferentes países y audiencias.</li>
                        </ul>
                    </p>
                </div> 
            </div>

            <div class="grid grid-cols-1 w-full px-[8%]">
                <div class="flex flex-col bg-[#EDEDFA] p-5 xl:p-10 gap-4 rounded-3xl">
                     <div class="flex flex-row gap-4">
                         <div class="w-20">
                             <img src="{{ asset('images/img/imagensenora.png') }}" />
                         </div>
                         <div>
                             <h2 class="text-[#11023B] font-Pangea_Light text-sm">Directora Nacional</h2>
                             <h1
                                 class="text-[#11023B] font-Pangea_Semibold tracking-tighter text-xl lg:text-3xl leading-none md:leading-tight">
                                 Angela Caballero
                             </h1>
                             <h2 class="text-[#11023B] font-Pangea_Light font-semibold text-sm">Email: regional@uniyopong.com</h2>
                         </div>
                     </div>
                     <p class="text-[#262556] text-base font-Pangea_Regular">
                         <ul class="list-disc px-6 text-[#262556] text-base">
                             <li><b>Liderazgo y Visión:</b> Establecer la visión y la dirección estratégica de la organización en línea con su misión y valores, y proporcionar liderazgo inspirador para el personal y los voluntarios.</li>
                             <li><b>Gestión Ejecutiva:</b> Tomar decisiones ejecutivas importantes para garantizar el funcionamiento eficiente y efectivo de la organización en todas las áreas, incluyendo programas, finanzas, recursos humanos, desarrollo de fondos y relaciones externas.</li>
                             <li><b>Supervisión de Programas y Proyectos:</b> Supervisar la planificación, implementación y evaluación de programas y proyectos para asegurar que se cumplan los objetivos de la organización y se maximice el impacto.</li>
                             <li><b>Desarrollo de Recursos:</b> Liderar los esfuerzos de recaudación de fondos y desarrollo de recursos para garantizar la sostenibilidad financiera de la organización, cultivando relaciones con donantes, socios y otras partes interesadas clave.</li>
                             <li><b>Gestión de Personal:</b> Dirigir y apoyar al equipo de la organización, proporcionando orientación, capacitación y desarrollo profesional para asegurar un ambiente de trabajo productivo y colaborativo.</li>
                             <li><b>Relaciones Institucionales:</b> Representar a la organización ante gobiernos, organizaciones socias, medios de comunicación y otras partes interesadas, cultivando relaciones estratégicas y promoviendo la colaboración y el apoyo a la misión de la ONG.</li>
                             <li><b>Gestión Financiera y Administrativa:</b> Supervisar la gestión financiera y administrativa de la organización, incluyendo la elaboración de presupuestos, la supervisión de la contabilidad, el cumplimiento normativo y la gestión de riesgos.</li>
                             <li><b>Advocacy y Promoción:</b> Defender los intereses de la organización y las comunidades a las que sirve, abogando por políticas y acciones que promuevan el cambio positivo y la justicia social.</li>
                             <li><b>Comunicación Estratégica:</b> Desarrollar e implementar estrategias de comunicación efectivas para aumentar la visibilidad de la organización, compartir historias de impacto y movilizar el apoyo a su causa.</li>
                             <li><b>Evaluación y Rendición de Cuentas:</b> Supervisar la evaluación del desempeño de la organización, tanto en términos de impacto de los programas como de eficacia operativa, y garantizar la rendición de cuentas ante donantes, socios y beneficiarios.</li>
                         </ul>
                     </p>
                 </div> 
             </div>
        </section>
    </main>

@section('scripts_importados')
    
@stop

@stop
