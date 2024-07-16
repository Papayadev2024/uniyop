import React, { useEffect, useState } from 'react'
import { createRoot } from 'react-dom/client'
import CreateReactScript from './Utils/CreateReactScript'
import FilterContainer from './components/Filter/FilterContainer'
import ProductContainer from './components/Product/ProductContainer'
import { Fetch } from 'sode-extend-react'
import FilterPagination from './components/Filter/FilterPagination'

const Catalogo = ({ minPrice, maxPrice, brands = [], sizes = [], colors = [] }) => {
  const take = 10

  const [items, setItems] = useState([])
  const [filter, setFilter] = useState({})
  const [totalCount, setTotalCount] = useState(0)
  const [currentPage, setCurrentPage] = useState(1)

  useEffect(() => {
    setCurrentPage(1)
    getItems()
  }, [filter])

  useEffect(() => {
    getItems()
  }, [currentPage])

  const getItems = async () => {
    const filterBody = []

    // Filtro de precios
    if (filter.maxPrice || filter.minPrice) {
      if (filter.maxPrice && filter.minPrice) {
        filterBody.push([
          [
            ['precio', '>=', filter.minPrice],
            'or',
            ['descuento', '>=', filter.minPrice]
          ],
          'and',
          [
            ['precio', '<=', filter.maxPrice],
            'or',
            ['descuento', '<=', filter.maxPrice]
          ]
        ])
      } else if (filter.minPrice) {
        filterBody.push([
          ['precio', '>=', filter.minPrice],
          'or',
          ['descuento', '>=', filter.minPrice]
        ])
      } else if (filter.maxPrice) {
        filterBody.push([
          ['precio', '<=', filter.maxPrice],
          'or',
          ['descuento', '<=', filter.maxPrice]
        ])
      }
    }

    // Filtro de marcas
    if (filter['attribute-1'] && filter['attribute-1'].length > 0) {
      const marcaFilter = []
      filter['attribute-1'].forEach((x, i) => {
        if (i == 0) {
          marcaFilter.push(['apv.attribute_value_id', '=', x])
        } else {
          marcaFilter.push('or', ['apv.attribute_value_id', '=', x])
        }
      })
      filterBody.push([
        ['a.id', '=', 1],
        'and',
        marcaFilter
      ])
    }

    // Filtro de colores
    if (filter['attribute-2'] && filter['attribute-2'].length > 0) {
      const colorFilter = []
      filter['attribute-2'].forEach((x, i) => {
        if (i == 0) {
          colorFilter.push(['apv.attribute_value_id', '=', x])
        } else {
          colorFilter.push('or', ['apv.attribute_value_id', '=', x])
        }
      })
      filterBody.push([
        ['a.id', '=', 2],
        'and',
        colorFilter
      ])
    }

    // Filtro de tamaño
    if (filter['attribute-3'] && filter['attribute-3'].length > 0) {
      const tamañoFilter = []
      filter['attribute-3'].forEach((x, i) => {
        if (i == 0) {
          tamañoFilter.push(['apv.attribute_value_id', '=', x])
        } else {
          tamañoFilter.push('or', ['apv.attribute_value_id', '=', x])
        }
      })
      filterBody.push([
        ['a.id', '=', 3],
        'and',
        tamañoFilter
      ])
    }

    const { status, result } = await Fetch('/api/products/paginate', {
      method: 'POST',
      body: JSON.stringify({
        requireTotalCount: true,
        filter: filterBody,
        take,
        skip: take * (currentPage - 1)
      })
    })
    setItems(result?.data ?? [])
    setTotalCount(result?.totalCount ?? 0)
  }

  return (<>
    <form className="flex flex-col md:flex-row gap-6 w-full p-10 mx-auto font-poppins bg-[#F1F1F1]">
      <section className="flex flex-col gap-6 md:basis-3/12 bg-white p-6 rounded-lg h-max md:sticky top-2">
        <FilterContainer setFilter={setFilter} filter={filter} minPrice={minPrice ?? 0} maxPrice={maxPrice ?? 0} brands={brands} sizes={sizes} colors={colors} />
      </section>
      <section className="flex flex-col gap-6 md:basis-9/12">
        <div className="w-full bg-white rounded-lg font-medium flex flex-row justify-between items-center px-2 py-3">
          <div>
            <span className="font-normal text-[17px] text-[#666666] ml-3">
              Mostrando {((currentPage - 1) * take) + 1} - {currentPage * take > totalCount ? totalCount : currentPage * take} de {totalCount} resultados
            </span>
          </div>
        </div>
        <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
          {items.map((item, i) => <ProductContainer key={`item-${i}`} item={item} />)}
        </div>
        <div className="w-full h-12     font-medium flex flex-row justify-center items-center">
          <FilterPagination current={currentPage} setCurrent={setCurrentPage} pages={Math.ceil(totalCount / take)} />
        </div>
      </section>
    </form>
  </>)
}

CreateReactScript((el, properties) => {
  createRoot(el).render(<Catalogo {...properties} />);
})