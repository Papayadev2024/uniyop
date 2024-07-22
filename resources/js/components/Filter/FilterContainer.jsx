import React, { useRef } from 'react'
import FilterItem from './FilterItem'
import FilterItemSelect2 from './FilterItemSelect2'

const FilterContainer = ({ minPrice, setFilter, filter, maxPrice, categories = [], tags = [], brands = [], sizes = [], colors = [], attribute_values, tag_id, selected_category }) => {
  const categoryRef = useRef()



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

  const onCategoryChange = () => {
    const newFilter = structuredClone(filter)
    newFilter['category_id'] = $(categoryRef.current).val()
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
      categories.length > 0 &&
      <FilterItemSelect2 eRef={categoryRef} label='Categoría' onChange={onCategoryChange} filter={filter} multiple defaultValue={[selected_category]} placeholder="Seleccione una categoria">
        {categories.map(x => (
          <option key={x.id} value={x.id}>{x.name}</option>
        ))}
      </FilterItemSelect2>
    }
    {
      tags.length > 0 && <div className="flex flex-col gap-4 w-full">
        <h2 className="font-semibold">Etiquetas</h2>
        <div className='flex flex-row gap-4 w-full flex-wrap'>
          {tags.map(item => {
            const isChecked = item.id === Number(tag_id);

            return (<label key={`item-tag-${item.id}`} htmlFor={`item-tag-${item.id}`} className="text-custom-border flex flex-row gap-2  items-center cursor-pointer">
              <input id={`item-tag-${item.id}`} name='tag' type="checkbox" className="bg-[#DEE2E6] rounded-sm  border-none" value={item.id} onClick={(e) => onClick(`txp.tag_id`, e.target.value, e.target.checked)} defaultChecked={isChecked} />
              {item.name}
            </label>)
          })}
        </div>
      </div>
    }
    {
      attribute_values.map((x, i) => (
        <FilterItem key={`attribute-${i}`} title={x[0].attribute.titulo} items={x} itemName='valor' onClick={onClick} />
      ))
    }
    {/* <button className="text-white bg-[#0168EE] rounded-md font-bold h-10 w-24" type="submit">
      Filtrar
    </button> */}
  </>)
}

export default FilterContainer