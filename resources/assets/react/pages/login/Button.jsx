import React from 'react';
/**
 * The Login Page Button Component. Probably, only the
 * Login Page can ever use this component
 * */

const Button = ({ text }) => {
    return (
        <div className="row pad-tb-4x">
            <div className="col-xs-12">
                <button
                    className="button btn-block btn-secondary btn-rad"
                    type="submit">
                    { text }
                </button>
            </div>
        </div>
    );
};

export default Button;