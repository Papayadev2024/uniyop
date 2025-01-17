@php
  $pagina = Route::currentRouteName();
  $isIndex = $pagina == 'index';
@endphp

<style>
  nav a .underline-this {
    position: relative;
    overflow: hidden;
    display: inline-block;
    text-decoration: none;
    /* padding-bottom: 4px; */
  }

  nav a .underline-this::before,
  nav a .underline-this::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #FF5E14;
    transform: scaleX(0);
    transition: transform 0.3s ease;
  }

  nav a .underline-this::after {
    transform-origin: right;
  }

  nav a:hover .underline-this::before,
  nav a:hover .underline-this::after {
    transform: scaleX(1);
  }

  nav a:hover .underline-this::before {
    transform-origin: left;
  }

  nav li {
    padding: 0 !important;
    margin: 0 !important;
  }

  .jquery-modal.blocker.current {
    z-index: 30;
  }
</style>

<style>
  .bg-image {
    background-image: url('');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 900;
  }
</style>

{{-- <img src="{{ asset('images/contacto.png') }}" class="absolute top-0 left-0 w-full z-[99999] opacity-30"></img> --}}

<div class="navigation shadow-xl px-5" style="z-index: 9999; background-color: #fff !important">
  <button aria-label="hamburguer" type="button" class="hamburger" id="position" onclick="show()">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M18 2L2 18M18 18L2 2" stroke="#272727" stroke-width="2.66667" stroke-linecap="round" />
    </svg>
  </button>
  <nav class="w-full h-full overflow-y-auto p-8" x-data="{ openCatalogo: true, openSubMenu: null }">
    <ul class="space-y-1">
      <li>
        <a href="/"
          class="text-[#272727] font-medium font-poppins text-sm py-2 px-3 block hover:opacity-75 transition-opacity duration-300 {{ $isIndex ? 'text-[#FF5E14]' : '' }}">
          <span class="underline-this">
            <svg
              class="inline-block w-3 h-3 mb-0.5 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
            </svg>
            INICIO
          </span>
        </a>
      </li>
      <li>
        <a @click="openCatalogo = !openCatalogo" href="javascript:void(0)"
          class="text-[#272727] flex justify-between items-center font-medium font-poppins text-sm py-2 px-3 hover:opacity-75 transition-opacity duration-300 {{ $pagina == 'catalogo' ? 'text-[#FF5E14]' : '' }}">
          <span class="underline-this">
            <svg
              class="inline-block w-3 h-3 mb-0.5 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
              <path
                d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z" />
              <path
                d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
            </svg>
            PRODUCTOS
          </span>
          <span :class="{ 'rotate-180': openCatalogo }"
            class="ms-1 inline-block transform transition-transform duration-300">↓</span>
        </a>
        <ul x-show="openCatalogo" x-transition class="ml-3 mt-1 space-y-1 border-l border-gray-300">
          <li>
            <a href="#"
              class="text-[#272727] flex items-center py-2 px-3 hover:opacity-75 transition-opacity duration-300">
              <span class="underline-this">
                Todas las categorías
              </span>
            </a>
          </li>

        </ul>
      </li>
      <li>
        <a href="/blog/0"
          class="text-[#272727] font-medium font-poppins text-sm py-2 px-3 block hover:opacity-75 transition-opacity duration-300 {{ $pagina == 'contacto' ? 'text-[#FF5E14]' : '' }}">
          <span class="underline-this">
            <svg
              class="inline-block w-3 h-3 mb-0.5 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
              <path
                d="M12 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM7.5 17.5h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2ZM12 13H2V4h10v9Z" />
            </svg>
            BLOG
          </span>
        </a>
      </li>
      <li>
        <a href="/contacto"
          class="text-[#272727] font-medium font-poppins text-sm py-2 px-3 block hover:opacity-75 transition-opacity duration-300 {{ $pagina == 'contacto' ? 'text-[#FF5E14]' : '' }}">
          <span class="underline-this">
            <svg
              class="inline-block w-3 h-3 mb-0.5 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M19 4h-1a1 1 0 1 0 0 2v11a1 1 0 0 1-2 0V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1ZM3 4a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm9 13H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Z" />
              <path d="M6 5H5v1h1V5Z" />
            </svg>
            CONTACTO
          </span></a>
      </li>
    </ul>
  </nav>

</div>


<header class="font-Inter_Regular bg-azuluniyop">
  <div>
    <div id="header-menu" class="flex justify-center sm:justify-between gap-5 w-full px-[5%] xl:px-[8%] py-6  text-[17px] relative">

      <div id="menu-burguer" class="hidden z-10 w-max">
        <img class="h-10 w-10 cursor-pointer" src="{{ asset('images/img/menu_hamburguer.png') }}" alt="menu hamburguesa"
          onclick="show()" />
      </div>

      <div class="w-auto ">
        <a href="{{ route('index') }}">
          <img id="logo-boostperu" class="w-[190px] "
            src="{{ asset($isIndex ? 'images\svg\logouniyop.svg' : 'images\svg\logouniyop.svg') }}" alt="uniyop" />
        </a>
      </div>

      <div class="hidden lg:flex items-center justify-center ">
        <div>
          <nav id="menu-items"
            class=" text-white text-base font-Pangea_Regular flex gap-5 xl:gap-10 items-center justify-center "
            x-data="{ openCatalogo: false, openSubMenu: null }">
            {{-- <a href="/" class="font-medium hover:opacity-75 ">
              <span class="underline-this">Home</span>
            </a> --}}

            <a id="productos-link" href="{{ route('nosotros') }}" class="font-medium ">
              <span class="underline-this">Nosotros</span>
              {{-- <div id="productos-link-h" class="w-0"></div> --}}

            </a>

              <a href="{{ route('voluntario') }}" class="font-medium hover:opacity-75">
                <span class="underline-this">Voluntario</span>
              </a>
           
              <a href="{{ route('organizacion') }}" class="font-medium hover:opacity-75">
                <span class="underline-this">Organización</span>
              </a>

              <a href="{{ route('donar') }}" class="font-medium hover:opacity-75">
                <span class="underline-this">Donar</span>
              </a>
            

            {{-- @if ($blog > 0) --}}
              <a href="{{ route('blogfinal') }}" class="font-medium hover:opacity-75 ">
                <span class="underline-this">Blog</span>
              </a>

              <a href="{{ route('postfinal') }}" class="font-medium hover:opacity-75 ">
                <span class="underline-this">Post</span>
              </a>
            {{-- @endif --}}


            {{-- <a href="/contacto" class="font-medium hover:opacity-75  ">
              <span class="underline-this">CONTACTO</span>
            </a> --}}
            {{-- @if ($tags->count() > 0)
              @foreach ($tags as $item)
                <a href="/catalogo?tag={{ $item->id }}" class="font-medium hover:opacity-75    "
                  style="color: {{ $item->color }}">
                  <span class="underline-this  ">
                    {{ $item->name }} </span>
                </a>
              @endforeach
            @endif --}}

          </nav>
        </div>
      </div>

      <div class="justify-end md:w-auto md:justify-center items-center gap-2 hidden sm:flex">
        <a class="bg-[#F094BC] text-white px-5 py-3 rounded-3xl text-base flex gap-2 font-Pangea_Regular">Más información <img src="{{ asset('images/svg/flechablanca.svg') }}" /></a> 
      </div>

    </div>
    {{-- <div class="justify-center md:w-auto md:justify-center items-center gap-2 flex sm:hidden pb-7 sm:pb-0">
      <a class="bg-[#F094BC] text-white px-5 py-3 rounded-3xl text-base flex gap-2 font-Pangea_Regular">Más información <img src="{{ asset('images/svg/flechablanca.svg') }}" /></a> 
    </div> --}}
  </div>

  <div class="flex justify-end relative">
    <div class="fixed bottom-[36px] z-[10] right-[15px] md:right-[25px]">
      <a href="https://api.whatsapp.com/send?phone={{ $datosgenerales[0]->whatsapp }}&text={{ $datosgenerales[0]->mensaje_whatsapp }}"
        class="">
        <img src="{{ asset('images/img/WhatsApp.png') }}" alt="whatsapp" class="w-20" />
      </a>
    </div>
  </div>

</header>

<script>
  let clockSearch;

  function openSearch() {
    document.getElementById("myOverlay").style.display = "block";

  }

  function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
  }

  function imagenError(image) {
    image.onerror = null; // Previene la posibilidad de un bucle infinito si la imagen de error también falla
    image.src = '/images/img/noimagen.jpg'; // Establece la imagen de error
  }

  $('#buscarproducto').keyup(function() {

    clearTimeout(clockSearch);
    var query = $(this).val().trim();

    if (query !== '') {
      clockSearch = setTimeout(() => {
        $.ajax({
          url: '{{ route('buscar') }}',
          method: 'GET',
          data: {
            query: query
          },
          success: function(data) {
            var resultsHtml = '';
            var url = '{{ asset('') }}';
            console.log(data)
            data.forEach(function(result) {
              console.log(result.id)
              const price = Number(result.precio) || 0
              const discount = Number(result.descuento) || 0
              resultsHtml += `<a href="/producto/${result.id}">
              <div class="w-full flex flex-row py-3 px-5 hover:bg-slate-200">
                <div class="w-[10%]">
                  <img class="w-14 rounded-md" src="${url}${result.imagen}" onerror="imagenError(this)" />
                </div>
                <div class="flex flex-col justify-center w-[70%]">
                  <h2 class="text-left">${result.producto}</h2>
                  <p class="text-text12 text-left">Categoría</p>
                </div>
                <div class="flex flex-col justify-center w-[10%]">
                  <p class="text-right w-max">S/ ${discount > 0 ? discount.toFixed(2) : price.toFixed(2)}</p>
                  ${discount > 0 ? `<p class="text-text12 text-right line-through text-slate-500 w-max">S/ ${price.toFixed(2)}</p>` : ''}
                </div>
              </div>
            </a>`;
            });

            $('#resultados').html(resultsHtml);
          }
        });

      }, 300);

    } else {
      $('#resultados').empty();
    }
  });
</script>
<script>
  $('#open-cart').on('click', () => {
    $('#cart-modal').modal({
      showClose: false,
      fadeDuration: 100
    })
  })
  $('#close-cart').on('click', () => {
    $('.jquery-modal.blocker.current').trigger('click')
  })
</script>
<script>
  function mostrarTotalItems() {
    let articulos = Local.get('carrito')
    let contarArticulos = articulos.reduce((total, articulo) => {
      return total + articulo.cantidad;
    }, 0);

    $('#itemsCount').text(contarArticulos)
  }
  $(document).ready(function() {
    if ({{ $isIndex ? 1 : 0 }}) {
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var categoriasOffset = $('#categorias').offset().top;

        const headerMenu = $('#header-menu')
        const logo = $('#logo-decotab')
        const items = $('#menu-items')
        const username = $('#username')
        const burguer = $('#menu-burguer')
        if (scroll >= categoriasOffset) {
          headerMenu
            .removeClass('absolute bg-transparent text-white')
            .addClass('fixed top-0 bg-white shadow-lg');
          items
            .removeClass('text-white')
            .addClass('text-[#272727]')
          username
            .removeClass('text-white')
            .addClass('text-[#272727]')
          // burguer
          //   .removeClass('absolute')
          //   .addClass('fixed')
          logo.attr('src', 'images/svg/logo_decotab_header.svg')
          $('#header-menu svg').attr('stroke', '#272727');
        } else {
          headerMenu
            .removeClass('fixed bg-white shadow-lg')
            .addClass('absolute bg-transparent text-white');
          items
            .removeClass('text-[#272727]')
            .addClass('text-white')
          username
            .removeClass('text-[#272727]')
            .addClass('text-white')
          // burguer
          //   .removeClass('fixed')
          //   .addClass('absolute')
          logo.attr('src', '')
          $('#header-menu svg').attr('stroke', 'white');
        }
      });
    }
    mostrarTotalItems()
  })
</script>
<script src="{{ asset('js/storage.extend.js') }}"></script>


<script>
  $(document).ready(function() {
    $('#buscarblog').keyup(function() {

      var query = $(this).val().trim();

      if (query !== '') {
        $.ajax({
          url: '{{ route('buscarblog') }}',
          method: 'GET',
          data: {
            query: query
          },
          success: function(data) {
            var resultsHtml = '';
            var url = '{{ asset('') }}';
            data.forEach(function(result) {
              resultsHtml +=
                '<a class="z-50" href="/post/' + result.id +
                '"> <div class=" z-50 w-full flex flex-row py-2 px-3 hover:bg-slate-200"> ' +
                ' <div class="w-[30%]"><img class="w-full rounded-md" src="' +
                url + result.url_image + result.name_image + '" /></div>' +
                ' <div class="flex flex-col justify-center w-[80%] pl-3"> ' +
                ' <h2 class="text-left line-clamp-1">' + result.title +
                '</h2> ' +
                '</div> ' +
                '</div></a>';
            });

            $('#resultadosblog').html(resultsHtml);
          }
        });
      } else {
        $('#resultadosblog').empty();
      }
    });
  });
</script>

<script>
  document.addEventListener('click', function(event) {
    var input = document.getElementById('buscarblog');
    var resultados = document.getElementById('resultadosblog');

    // Check if both elements exist
    if (input && resultados) {
      var isClickInsideInput = input.contains(event.target);
      var isClickInsideResultados = resultados.contains(event.target);

      if (!isClickInsideInput && !isClickInsideResultados) {
        input.value = '';
        $('#resultadosblog').empty();
      }
    }
  });
</script>
<script>
  const categorias = @json($categorias);
  var activeHover = false
  document.getElementById('productos-link').addEventListener('mouseenter', function(event) {
    if (event.target === this) {
      // mostrar submenú de productos 
      console.log(categorias);
      let padre = document.getElementById('productos-link-h');
      let divcontainer = document.createElement('div');
      divcontainer.id = 'productos-link-container';
      divcontainer.className =
        'absolute top-[90px] left-1/2 transform -translate-x-1/2 m-0 flex flex-row bg-white z-[60] rounded-lg shadow-lg gap-4 p-4 w-[80vw] overflow-x-auto';

      divcontainer.addEventListener('mouseenter', function() {
        this.addEventListener('mouseleave', cerrar);
      });

      categorias.forEach(element => {
        let ul = document.createElement('ul');
        ul.className =
          'text-[#006BF6] font-bold font-poppins text-md py-2 px-3 block   duration-300 w-full whitespace-nowrap gap-4';

        ul.innerHTML = element.name;
        element.subcategories.forEach(subcategoria => {
          let li = document.createElement('li');
          li.style.setProperty('padding-left', '4px', 'important');
          li.style.setProperty('padding-right', '2px', 'important');

          li.className =
            'text-[#272727] px-2 rounded-sm cursor-pointer font-normal font-poppins text-[13px] py-2 px-3 hover:bg-blue-200 hover:opacity-75 transition-opacity duration-300 w-full whitespace-nowrap';
          // Crear el elemento 'a'
          let a = document.createElement('a');
          a.href = `/catalogo?subcategoria=${subcategoria.id}`;
          a.innerHTML = subcategoria.name;
          a.className = 'block w-full h-full'; // Para que el enlace ocupe todo el 'li'

          // Añadir el elemento 'a' al 'li'
          li.appendChild(a);
          ul.appendChild(li);
        });
        divcontainer.appendChild(ul);
      });



      // limpia sus hijos antes de agregar los nuevos
      if (!activeHover) {
        padre.appendChild(divcontainer);
        activeHover = true;
      }
    }
  });

  function cerrar() {
    console.log('Mouse out');
    let padre = document.getElementById('productos-link-h');
    activeHover = false
    padre.innerHTML = '';
  }
</script>
