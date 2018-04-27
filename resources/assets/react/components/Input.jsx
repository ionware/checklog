import React from 'react';
import propTypes from 'prop-types';


const Input = ({ value, label, type, className, onInputChange, disabled = false, name }) => {
    return (
        <div>
            <label htmlFor={name}>{label}</label>
            <input type={type} className={`edl-input ${className}`}
                   value={value} name={name}
                   disabled={disabled}
                   onChange={({ target }) => onInputChange(name, target.value)}/>
        </div>
    );
};

Input.propTypes = {
    value: propTypes.string.isRequired,
    label: propTypes.string,
    type: propTypes.string,
    className: propTypes.string,
    onInputChange: propTypes.func,
    name: propTypes.string
};
Input.defaultProps = {
    type: 'text',
    value: '',
    className: 'input-brd-primary input-rad',
    name: '',
    onInputChange: (value) => console.log("Unhandled input!")
};

export default Input;
