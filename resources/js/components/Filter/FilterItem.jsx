import React from 'react'

const FilterItem = ({ title, children, className = 'flex flex-col gap-4 w-full', items = [], itemId = 'id', itemName = 'name' }) => {
  const relativeId = title.toLowerCase().split(' ').filter(Boolean).join('-')
  return (<div className="flex flex-col gap-4 w-full">
    <h2 className="font-semibold">{title}</h2>
    <div className={className}>
      {children ? children : items.map(item => {
        return (<>
          <label key={`item-${item[itemId]}`} htmlFor={`item-${relativeId}-${item[itemId]}`} className="text-custom-border flex flex-row gap-2  items-center cursor-pointer">
            <input id={`item-${relativeId}-${item[itemId]}`} name={relativeId} type="checkbox" className="bg-[#DEE2E6] rounded-sm  border-none" value={item[itemId]} />
            {item[itemName]}
          </label>
        </>)
      })}
    </div>

  </div>)
}

export default FilterItem