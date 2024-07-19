import React, { useState } from 'react';

const ProductCard = ({ item, width, bgcolor }) => {
  const [showAmbiente, setShowAmbiente] = useState(false);
  const category = item.category;




  return (
    <div
      onMouseEnter={() => setShowAmbiente(true)}
      onMouseLeave={() => setShowAmbiente(false)}
      className={`flex flex-col relative w-full md:${width} ${bgcolor}`} data-aos="zoom-in-left"
    >
      <div className={`${bgcolor} product_container basis-4/5 flex flex-col justify-center relative`}>
        <div className="absolute top-2 left-2">
          {item.tags?.map((tag) => (
            <div className="px-4 mb-1" key={tag.id}>
              <span
                className="block font-semibold text-[8px] md:text-[12px] bg-black py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] relative top-[18px] z-10"
                style={{ backgroundColor: tag.color }}
              >
                {tag.name}
              </span>
            </div>
          ))}
        </div>
        <div>
          <div className="relative flex justify-center items-center h-[300px]">
            <img
              style={{ opacity: !showAmbiente ? '1' : '0', scale: !showAmbiente ? '1' : '0.95' }}
              src={item.imagen ? `/${item.imagen}` : 'images/img/noimagen.jpg'}
              alt={item.name}
              className={`transition ease-out duration-300 transform w-full h-[300px] object-${category.fit} absolute inset-0 `}
            />
            <img
              style={{ opacity: showAmbiente ? '1' : '0', scale: showAmbiente ? '1' : '0.95' }}
              src={item.imagen_ambiente ? `/${item.imagen_ambiente}` : 'images/img/noimagen.jpg'}
              alt={item.name}
              className="transition ease-out duration-300 transform w-full h-[300px] object-cover absolute inset-0 "
            />
          </div>
          <div className="addProduct text-center flex justify-center h-0">
            <a
              href={`/producto/${item.id}`}
              className="font-semibold text-[16px] bg-[#006BF6] py-2 px-4 text-center text-white rounded-3xl h-10"
            >
              Ver producto
            </a>
          </div>
        </div>
      </div>
      <a href={`/producto/${item.id}`}>
        <h2 className="text-[17px] mt-4 text-center">
          {item.producto}
        </h2>
        <div className="flex content-between flex-row gap-4 items-center justify-center">
          <span className="text-[#006BF6] text-[16.45px] font-bold">{item.precio}</span>
          {item.descuento !== 0 && (
            <span className="text-sm text-[#15294C] opacity-60 line-through">{item.descuento}</span>
          )}
        </div>
      </a>
    </div>
  );
};

export default ProductCard;