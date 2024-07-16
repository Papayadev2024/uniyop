import React from 'react'

const ProductContainer = () => {
  return (<>
    <div className="flex flex-col justify-center  gap-6">
      <div className="h-[295px] w-full bg-slate-400 "></div>
      <div className="flex flex-col justify-center items-center">
        <h2 className="font-normal text-[18px] text-[#333333]">Nombre del Producto</h2>
        <div className="flex flex-row gap-4 justify-center items-baseline ">
          <p className="font-bold text-[24px] text-[#006BF6]">S/ 39.00</p>
          <p className="font-normal   text-[18px] text-custom-border line-through">S/ 00.00</p>
        </div>
      </div>
    </div>
  </>)
}

export default ProductContainer