import React from 'react';

const formatString = (string) => {
    let value = string.replace("_", " ");
    return value.charAt(0).toUpperCase() + value.slice(1);
};


const Info = ({ label, value }) => {
    return (
        <div className="col-xs-4 info-field">
            <label>{formatString(label)}</label>
            <span className="info">{ value || "------------------------"}</span>
        </div>
    );
};


const DisplayFrame = ({ bioData }) => {
    const objectKeys = Object.keys(bioData);
    const Information = objectKeys.map((element, index) => {
        if (typeof bioData[element] === 'object')
            return (<Info label={element} value={bioData[element].value} key={index}/>);

        return (<Info label={element} value={bioData[element]} key={index}/>);
    });
    return (
        <div className="display-frame">
            <div className="container-fluid">
                <div className="divider">
                    <h3 className="text-uppercase title">
                        Preview Record
                    </h3>
                </div>
                <div className="row-pad-all-3x" style={{ marginTop: '20px'}}>
                    { Information }
                </div>
            </div>
        </div>
    );
};


export default DisplayFrame;