import React from 'react'
import FilterItem from './FilterItem'

const FilterContainer = ({ minPrice, setFilter, filter, maxPrice, brands = [], sizes = [], colors = [] }) => {

  const setMinPrice = (e) => {
    const newFilter = structuredClone(filter)
    newFilter.minPrice = Number(e.target.value) || 0
    setFilter(newFilter)
  }
  const setMaxPrice = (e) => {
    const newFilter = structuredClone(filter)
    newFilter.maxPrice = Number(e.target.value) || 0
    setFilter(newFilter)
  }

  const onClick = (key, value, checked) => {
    let newFilter = structuredClone(filter)
    if (!newFilter[key]) newFilter[key] = []
    if (checked) newFilter[key].push(value)
    else newFilter[key] = newFilter[key].filter(x => x != value)
  setFilter(newFilter)
  }

  return (<>
    <button className="w-full h-12 text-[15px] bg-slate-100 text-center font-medium rounded-lg" type="reset">
      Limpiar filtros
    </button>

    <FilterItem title="Precio" className="flex flex-row gap-4 w-full">
      <input type="number" className="w-28 rounded-md border" placeholder="Desde" min={minPrice} max={maxPrice} step={0.01} onChange={setMinPrice} />
      <input type="number" className="w-28 rounded-md border" placeholder="Hasta" min={minPrice} max={maxPrice} step={0.01} onChange={setMaxPrice} />
    </FilterItem>
    {
      brands.length > 0 &&
      <FilterItem title="Marca" items={brands} itemName='valor' onClick={onClick} />
    }
    {
      colors.length > 0 &&
      <FilterItem title="Color" items={colors} itemName='valor' onClick={onClick} />
    }
    {
      sizes.length > 0 &&
      <FilterItem title="Tamaño" items={sizes} itemName='valor' onClick={onClick} />
    }
    <button className="text-white bg-[#0168EE] rounded-md font-bold h-10 w-24" type="submit">
      Filtrar
    </button>
  </>)
}

export default FilterContainer