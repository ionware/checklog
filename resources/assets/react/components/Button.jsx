import React from 'react';
import PropTypes from 'prop-types';



const Button = ({ onClick, className, children }) => {
    return (
        <button
            className={`button ${className}`}
            onClick={onClick}>
                {children}
        </button>
    );
};

Button.propTypes = {
    onClick: PropTypes.func,
    className: PropTypes.string,
};

Button.defaultProps = {
    className: "btn-secondary btn-rad"
};

export default Button;