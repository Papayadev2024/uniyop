import React from 'react'
import { createRoot } from 'react-dom/client'
import CreateReactScript from './Utils/CreateReactScript'
import FilterContainer from './components/Filter/FilterContainer'
import ProductContainer from './components/Product/ProductContainer'

const Catalogo = ({ brands = [], sizes = [], colors = [] }) => {
  const items = new Array(10)
  items.fill(null)
  return (<form className="flex flex-col md:flex-row md:gap-10 w-11/12 mx-auto font-poppins mt-16">
    <section className="flex flex-col gap-10 md:basis-3/12">
      <FilterContainer brands={brands} sizes={sizes} colors={colors} />
    </section>
    <section className="flex flex-col gap-10 md:basis-9/12   ">
      <div className="w-full h-12 bg-[#F8F8F8]     font-medium flex flex-row justify-between items-center">
        <div><span className="font-normal text-[17px] text-[#666666] ml-3">Mostrando 1 - 9 de 11 resultados</span></div>
        <div className="flex flex-row gap-3 items-center">
          <span className="font-normal text-[17px]">Ordenar Por</span>
          <x-dropdown-flowbite
            className="bg-[#EDEDED] text-[#666666] hover:bg-gray-500 hover:text-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            id="dropdownDefaultButton" />
        </div>
      </div>
      <div className="grid grid-cols-3 gap-6 gap-y-10">
        {items.map((item, i) => <ProductContainer key={`item-${i}`} />)}
      </div>
      <div className="w-full h-12     font-medium flex flex-row justify-center items-center">
        <div><span className="font-normal text-[17px] text-[#666666] ml-3">Paginacion Laravel </span></div>

      </div>
    </section>
  </form>)
}

CreateReactScript((el, properties) => {
  createRoot(el).render(<Catalogo {...properties} />);
})