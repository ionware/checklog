import React from 'react';
import Input from '../components/Input';
import Dropdown from '../components/Dropdown';
import dropDownValues from '../utils/variables';

const FormFrame = ({ onChange, onSubmit, bioData }) => {
    const { gender, marital_status } = dropDownValues;
    return (
        <div className="form-frame">
            <div className="container-fluid">
                <div className="divider">
                    <h3 className="text-uppercase title">
                        <i className="fa fa-database title-icon" />Create patient record
                    </h3>
                </div>
                <p className="small-1x">
                    <span className="mark">*</span>Kindly ensure to fill all fields appropriately before submitting a record.
                </p>
                <div className="row pad-all-3x">
                    <div className="col-xs-4">
                        <Input value={bioData.surname} label="Surname" name="surname" type="text" onInputChange={onChange}/>
                    </div>
                    <div className="col-xs-4">
                        <Input value={bioData.firstname} label="Firstname" name="firstname" type="text" onInputChange={onChange}/>
                    </div>
                    <div className="col-xs-4">
                        <Input value={bioData.lastname} label="Lastname" name="lastname" type="text" onInputChange={onChange}/>
                    </div>
                </div>
                <div className="row pad-all-3x">
                    <div className="col-xs-6">
                        <Input value={bioData.home_address} label="Home Address" name="home_address" type="text" onInputChange={onChange}/>
                    </div>
                    <div className="col-xs-6">
                        <Input value={bioData.contact_address} label="Contact Address" name="contact_address" type="text" onInputChange={onChange}/>
                    </div>
                </div>
                <div className="row pad-all-3x divider-2">
                    <div className="col-xs-4">
                        <Input value={bioData.dob} label="Date of Birth" name="dob" type="date" onInputChange={onChange}/>
                    </div>
                    <div className="col-xs-4">
                        <Dropdown options={gender}
                                  value={bioData.gender} label="Gender"
                                  placeholder="Gender" name="gender" className="custom-dropdown"
                                  onSelectChange={onChange}/>
                    </div>
                    <div className="col-xs-4">
                        <Dropdown options={marital_status}
                                  value={bioData.marital_status} label="Marital Status"
                                  placeholder="Marital Status" name="marital_status"
                                  className="custom-dropdown" onSelectChange={onChange}/>
                    </div>
                </div>
                <div className="row pad-all-3x">
                    <div className="col-xs-4">
                        <Input value={bioData.telephone_1} label="Telephone 1" name="telephone_1" type="text" onInputChange={onChange}/>
                    </div>
                    <div className="col-xs-4">
                        <Input value={bioData.telephone_2} label="Telephone 2" name="telephone_2" type="text" onInputChange={onChange}/>
                    </div>
                    <div className="col-xs-4">
                        <Input value={bioData.profession} label="Profession" name="profession" type="text" onInputChange={onChange}/>
                    </div>
                </div>
                <div className="row pad-all-3x">
                    <div className="col-xs-3">
                        <Input value={bioData.state_origin} label="State of Origin" name="state_origin" type="text" onInputChange={onChange}/>
                    </div>
                    <div className="col-xs-3">
                        <Input value={bioData.state_birth} label="State of Birth" name="state_birth" type="text" onInputChange={onChange}/>
                    </div>
                    <div className="col-xs-6">
                        <Input value={bioData.maiden_name} label="Mother's Maiden name" name="maiden_name" type="text" onInputChange={onChange}/>
                    </div>
                </div>
                <div className="row pad-all-3x divider-2">
                    <div className="col-xs-4">
                        <Input value={bioData.kin_name} label="Next of Kin" name="kin_name" type="text" onInputChange={onChange}/>
                    </div>
                    <div className="col-xs-4">
                        <Input value={bioData.kin_relationship} label="Next of Kin Relationship" name="kin_relationship" type="text" onInputChange={onChange}/>
                    </div>
                    <div className="col-xs-4">
                        <Input value={bioData.kin_telephone} label="Next of Kin's Telephone" name="kin_telephone" type="text" onInputChange={onChange}/>
                    </div>
                </div>
                <div className="row pad-all-3x divider-2">
                    <div className="col-xs-4">
                        <button className="button btn-block btn-primary btn-rad" onClick={onSubmit}>Add Record</button>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default FormFrame;