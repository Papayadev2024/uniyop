import React from 'react'
import FilterItem from './FilterItem'

const FilterContainer = ({ brands = [], sizes = [], colors = [] }) => {
  return (<>
    <button className="w-full h-12 bg-[#F1F1F1] text-[15px] text-center font-medium rounded-lg" type="reset">
      Limpiar filtros
    </button>

    <FilterItem title="Precio" className="flex flex-row gap-4 w-full">
      <input type="number" className="w-28 rounded-xl custom-border" placeholder="Desde" />
      <input type="number" className="w-28 rounded-xl custom-border" placeholder="Hasta" />
    </FilterItem>
    {
      brands.length > 0 &&
      <FilterItem title="Marca" items={brands} itemName='valor' />
    }
    {
      sizes.length > 0 &&
      <FilterItem title="Tamaño" items={sizes} itemName='valor' />
    }
    {
      colors.length > 0 &&
      <FilterItem title="Color" items={colors} itemName='valor' />
    }
    <button className="text-white bg-[#0168EE] rounded-md font-bold h-10 w-24" type="submit">
      Filtrar
    </button>
  </>)
}

export default FilterContainer