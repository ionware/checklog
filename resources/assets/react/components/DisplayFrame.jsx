import React from 'react';

const formatString = (string) => {
    let value = string.replace("_", " ");
    return value.charAt(0).toUpperCase() + value.slice(1);
};


const Info = ({ label, value, col }) => {
    let data;
    if (typeof value === 'object')
        data = value.value;
    else
        data = value;
    return (
        <div className={`col-xs-${col} info-field`}>
            <label>{formatString(label)}</label>
            <span className="info">{ data || "--------------------"}</span>
        </div>
    );
};


const DisplayFrame = ({ bioData, onSubmit }) => {
    const objectKeys = Object.keys(bioData);
    return (
        <div className="display-frame">
            <div className="container-fluid">
                <div className="divider">
                    <h3 className="text-uppercase title">
                        Preview Record
                    </h3>
                </div>
                <div className="row">
                    <div className="col-xs-4 pull-right">
                        <button className="button btn-block btn-primary btn-rad" onClick={onSubmit}>Add Record</button>
                    </div>
                </div>
                <div className="row-pad-all-3x" style={{ marginTop: '20px'}}>
                    <Info label={"Surname"} col={4} value={bioData.surname} />
                    <Info label={"Firstname"} col={4} value={bioData.firstname} />
                    <Info label={"Lastname"} col={4} value={bioData.lastname} />
                </div>
                <div className="row pad-all-3x">
                    <Info label={"Home Address"} col={6} value={bioData.home_address} />
                    <Info label={"Contact Address"} col={6} value={bioData.contact_address} />
                </div>
                <div className="row pad-all-3x">
                    <Info label={"Date of Birth"} col={4} value={bioData.dob} />
                    <Info label={"Gender"} col={4} value={bioData.gender} />
                    <Info label={"Marital Status"} col={4} value={bioData.marital_status} />
                </div>
                <div className="row pad-all-3x">
                    <Info label={"Telephone 1"} col={4} value={bioData.telephone_1} />
                    <Info label={"Telephone 2"} col={4} value={bioData.telephone_2} />
                    <Info label={"Profession"} col={4} value={bioData.profession} />
                </div>
                <div className="row pad-all-3x">
                    <Info label={"State of Origin"} col={4} value={bioData.state_origin} />
                    <Info label={"State of Birth"} col={4} value={bioData.state_birth} />
                    <Info label={"Maiden name"} col={4} value={bioData.maiden_name} />
                </div>
                <div className="row pad-all-3x">
                    <Info label={"Next of Kin"} col={5} value={bioData.kin_name} />
                    <Info label={"Relationship"} col={3} value={bioData.kin_relationship} />
                    <Info label={"Kin's Telephone"} col={4} value={bioData.kin_telephone} />
                </div>
            </div>
        </div>
    );
};


export default DisplayFrame;