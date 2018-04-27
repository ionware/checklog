import React from 'react';
/**
 * Authentication Login Input Component. This module is
 * Only for the Auth Login Page
 * */


const Input = ({ type, pair, placeholder, onInputChange }) => {
    return (
        <div className="row pad-tb-4x">
            <div className="col-xs-12">
                <input
                    type={type}
                    className="edl-input input-brd-primary btn-rad"
                    placeholder={placeholder}
                    onChange={ (e) => onInputChange(e, pair) }
                />
            </div>
        </div>
    );
};

export default Input;