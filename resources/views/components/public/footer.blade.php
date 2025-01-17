<footer class="font-Pangea_Light bg-[#3D8BF2]">
  <style>
    #modalPoliticasDev #modalTerminosCondiciones {
      height: 70vh;
      /* Establece la altura del modal al 70% de la altura de la ventana gráfica */
      overflow-y: auto;
      /* Permite el desplazamiento vertical si el contenido excede la altura del modal */
    }
  </style>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 md:justify-center w-full px-[8%] py-12 lg:py-16 ">

    <div class="flex flex-col col-span-1 lg:col-span-2 w-full lg:w-2/3 text-white text-base gap-2 lg:gap-4">
      <div class="w-auto">
        <a href="{{ route('index') }}">
          <img id="logofooter" class="w-[190px]"
            src="{{ asset('images\svg\logouniyop.svg') }}" alt="uniyop" />
        </a>
      </div>
      <p class="font-Pangea_Light font-normal text-sm">Nunc gravida sodales lectus et finibus. Duis vehicula pretium odio, nec efficitur purus tempor at. 
         Donec eget tellus id tellus convallis malesuada at eget justo.</p>

      <div class="flex flex-row gap-5 font-Pangea_Regular">
          <a class="bg-[#F094BC] text-white px-5 py-2 rounded-3xl text-base border-2 flex gap-2 border-[#F094BC]  ">Mas información
              <img src="{{ asset('images/svg/flechablanca.svg') }}" />
          </a>
      </div>
    </div>

    <div class="flex flex-col text-white text-sm gap-2">
      <h3 class="font-Pangea_Regular text-lg pb-0 lg:pb-3">Enlaces</h3>
      <a href="/">Home</a>
      <a href="#">Nosotros</a>
      <a href="#">Organizacion</a>
      <a href="#">Futuro sin violencia</a>
      <a href="{{ route('blog', 0) }}">Blog</a>
    </div>

    <div class=" flex flex-col gap-2 text-white text-sm">
      <h3 class="font-Pangea_Regular text-lg pb-0 lg:pb-3">Aviso Legal</h3>
      <a id="linkPoliticas">Politicas de privacidad </a>
      <a id="linkTerminos">Terminos y condiciones </a>
      <a href="{{ route('librodereclamaciones') }}"><img class="w-24"
        src="{{ asset('images/img/reclamaciones.png') }}" /></a>
    </div>

    <div class="flex flex-col text-white text-sm gap-2">
      <h3 class="font-Pangea_Regular text-lg pb-0 lg:pb-3">Datos de contacto</h3>
      <a href="/contacto">123 Calle Principal, Ciudad Perfecta</a>
      <a >Correo Electrónico: info@uniyop.com</a>
      <a id="linkPoliticas">Teléfono: +51 999 888 444</a>
    </div>

  </div>

  <div class=" py-4 flex items-center justify-center px-[8%] ">
    <div class="flex flex-col lg:flex-row justify-between items-center gap-5 w-full border-t-[1px] pt-4">
      <div class="text-left">
        <p class="font-normal text-sm text-white">
          Copyright &copy; 2023 {{ config('app.name') }}. Reservados todos los derechos. Powered by <a
            href="https://www.mundoweb.pe" target="_blank" class="text-white border-b border-[#006BF6]"> Mundo Web
          </a>
        </p>
      </div>
      <div class="flex gap-2 items-center justify-center">
        <img src="{{ asset('images/svg/iconuniyop1.svg') }}" alt="instagram" class="h-7 md:h-10" />
        <img src="{{ asset('images/svg/iconuniyop2.svg') }}" alt="facebook" class="h-7 md:h-10" />
        <img src="{{ asset('images/svg/iconuniyop3.svg') }}" alt="linkedin" class="h-7 md:h-10" />
        <img src="{{ asset('images/svg/iconuniyop4.svg') }}" alt="tiktok" class="h-7 md:h-10" />
        <img src="{{ asset('images/svg/iconuniyop5.svg') }}" alt="watsapp" class="h-7 md:h-10" />
      </div>
    </div>
  </div>

  <div id="modalTerminosCondiciones" class="modal" style="max-width: 900px !important;width: 100% !important;  ">
    <!-- Modal body -->
    <div class="p-4 ">
      <h1 class="font-Inter_SemiBold">Terminos y condiciones</h1>
      <p class="font-Inter_Regular p-2 prose">{!! $terminos->content ?? '' !!}</p>
    </div>
  </div>
  <div id="modalPoliticasDev" class="modal" style="max-width: 900px !important; width: 100% !important;  ">
    <!-- Modal body -->
    <div class="p-4 ">
      <h1 class="font-Inter_SemiBold">Politicas de devolucion</h1>

      <p class="font-Inter_Regular p-2">{!! $politicas->content ?? '' !!}</p>


    </div>
  </div>

</footer>


<script>
  $(document).ready(function() {


    $(document).on('click', '#linkTerminos', function() {
      $('#modalTerminosCondiciones').modal({
        show: true,
        fadeDuration: 400,

      })
    })
    $(document).on('click', '#linkPoliticas', function() {
      $('#modalPoliticasDev').modal({
        show: true,
        fadeDuration: 400,


      })
    })

    function alerta(message) {
      Swal.fire({
        title: message,
        icon: "error",
      });
    }

    function validarEmail(value) {
      const regex =
        /^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/

      if (!regex.test(value)) {
        alerta("Por favor, asegúrate de ingresar una dirección de correo electrónico válida");
        return false;
      }
      return true;
    }


    $("#subsEmail").submit(function(e) {

      console.log('enviando subscripcion');

      e.preventDefault();

      Swal.fire({

        title: 'Realizando suscripción',
        html: `Registrando... 
          <div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4">
              <div role="status">
              <svg aria-hidden="true" class="w-8 h-8 text-blue-600 animate-spin dark:text-gray-600 " viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
              </svg>

              </div>
          </div>
          `,
        allowOutsideClick: false,
        onBeforeOpen: () => {
          Swal.showLoading();
        }
      });


      if (!validarEmail($('#email').val())) {
        return;
      };
      $.ajax({
        url: '{{ route('guardarUserNewsLetter') }}',
        method: 'POST',
        data: $(this).serialize(),
        success: function(response) {
          Swal.close();
          Swal.fire({
            title: response.message,
            icon: "success",
          });
          $('#subsEmail')[0].reset();
        },
        error: function(response) {
          let message = ''

          let isDuplicado = response.responseJSON.message.includes('Duplicate entry')
          console.log(isDuplicado)

          if (isDuplicado) {
            message =
              'El correo que ha ingresado ya existe. Utilice  otra direccion de correo'
          } else {
            message = response.responseJSON.message
          }
          Swal.close();
          Swal.fire({
            title: message,
            icon: "error",
          });
        }
      });

    })






  })
</script>
