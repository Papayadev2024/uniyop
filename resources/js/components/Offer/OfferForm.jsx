import React, { useEffect, useRef, useState } from 'react'

const OfferForm = ({ eRef, data }) => {

  const nameRef = useRef()
  const [items, setItems] = useState(data?.products ?? [])

  const precioTotal = items.reduce((acc, item) => Number(item.descuento) > 0 ? acc + Number(item.descuento) : acc + Number(item.precio), 0)

  useEffect(() => {
    nameRef.current.value = data?.producto ?? ''
    setItems(data?.products ?? [])
  }, [data])

  const onFormSubmit = (e) => {
    e.preventDefault()
  }

  return <>
    <form onSubmit={onFormSubmit} ref={eRef} className='modal p-8'>
      <h4 className='h4 font-semibold'>{data?.id ? 'Editar combo' : 'Agregar combo'}</h4>
      <hr className='my-4' />
      <div className="w-full grid grid-cols-2 gap-4">
        <div className='col-span-2'>
          <label htmlFor="offer-name" className="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del combo</label>
          <input ref={nameRef} type="text" id="offer-name" aria-describedby="helper-text-explanation" className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ej. Combo gamer" />
        </div>
        <div>
          <label htmlFor="offer-name" className="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio original</label>
          <input type="text" id="offer-name" aria-describedby="helper-text-explanation" className="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0.00" step={0.01} disabled value={precioTotal} />
        </div>
        <div>
          <label htmlFor="offer-name" className="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio del combo</label>
          <input type="text" id="offer-name" aria-describedby="helper-text-explanation" className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0.00" step={0.01} />
        </div>
      </div>
    </form>
  </>
}

export default OfferForm