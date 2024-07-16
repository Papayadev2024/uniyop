import React from 'react'

const ProductContainer = ({ price = 0, discount = 0 }) => {
  return (<>
    <div className="border shadow-lg">
      <div className="h-[256px] w-full bg-slate-400"></div>
      <div className="py-2 px-3">
        <h2 className="font-normal text-[18px] text-[#333333]">Producto x</h2>
        <div className="flex flex-row gap-2 justify-start items-start ">
          <p className="font-bold text-[24px] text-[#006BF6]">S/ {price.toFixed(2)}</p>
          <p className="font-normal text-[18px] text-custom-border line-through">S/ {discount.toFixed(2)}</p>
        </div>
      </div>
    </div>
  </>)
}

export default ProductContainer