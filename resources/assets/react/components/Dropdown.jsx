import React from 'react';
import Select from 'react-select';


const Dropdown = ({ options, value, placeholder, onSelectChange, className, name, label}) => {
    return (
        <div className={ className }>
            <label>{label}</label>
            <Select options={options} value={value}
                        onChange={(value) => onSelectChange(name, value)} placeholder={placeholder} />
        </div>
    );
};

export default Dropdown;