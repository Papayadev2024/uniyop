import React from 'react'
import { Fetch } from 'sode-extend-react'
import Swal from 'sweetalert2'

const OfferCard = ({ item }) => {

  const onDeleteClicked = async (id) => {
    const { isConfirmed } = await Swal.fire({
      title: 'Eliminar Oferta',
      text: `¿Estás seguro de que deseas eliminar la oferta "${item.producto}"?`,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, eliminar',
      cancelButtonText: 'Cancelar'
    })

    if (isConfirmed) {
      const { status, result } = await Fetch(`/api/offers/${id}`, {
        method: 'DELETE',
      })
      if (status) Swal.fire(
        '¡Eliminado!',
        'La oferta ha sido eliminada correctamente.',
        'success'
      )
      else Swal.fire(
        '¡Error!',
        result?.message || 'Ocurrió un error al eliminar la oferta.',
        'error'
      )
    }
  }

  const onEditClicked = (id) => {
    // Aquí puedes implementar la lógica para editar la oferta
    // ...
  }

  const onShowClicked = (id) => {
    // Aquí puedes implementar la lógica para mostrar la oferta
    // ...
  }

  return <li key={`offer-${item.id}`}>
    <div className="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg dark:border-gray-700 peer-checked:border-blue-600  dark:peer-checked:text-gray-300 peer-checked:text-gray-600  dark:text-gray-400 dark:bg-gray-800">
      <div className="block">
        <div className='flex items-center justify-between w-full'>

          <h4 className='flex gap-2'>
            <span className="text-[#006BF6] text-[16.45px] font-bold text-xl">
              S/. {item.descuento > 0 ? item.descuento : item.precio}
            </span>
            {item.descuento > 0 && (
              <span className="text-sm text-[#15294C] opacity-60 line-through">
                {item.precio}
              </span>
            )}
          </h4>
          <div>
            <button id={`dropdown-button-${item.id}`} data-dropdown-toggle={`dropdown-menu-${item.id}`} className="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg outline-none dark:text-white dark:bg-gray-800" type="button">
              <i className='fas fa-ellipsis-v'></i>
            </button>
            <div id={`dropdown-menu-${item.id}`} className="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
              <ul className="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                <li>
                  <a className="block cursor-pointer px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-100">Ver productos</a>
                </li>
                <li>
                  <a className="block cursor-pointer px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-100" onClick={() => onDeleteClicked(item.id)}>Eliminar</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div className="w-full text-lg font-semibold">{item.producto}</div>
        <div className="w-full text-sm">A TypeScript-based web application framework.</div>
      </div>
    </div>
  </li>
}

export default OfferCard;