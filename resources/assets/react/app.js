import React, { Component } from 'react';
import {connect} from 'react-redux';
import  LoadingBar from './components/ReduxProgressBar';
import FormFrame from './components/FormFrame';
import DisplayFrame from './components/DisplayFrame';
import { showLoading, hideLoading } from 'react-redux-loading-bar';
import { createRecordRequest} from "./utils/requests";
import { NotificationManager, NotificationContainer } from 'react-notifications';
import 'react-notifications/lib/notifications.css';


class App extends Component {
    constructor(props) {
        super(props);

        this.state = {

        };

        this.onInputChange = this.onInputChange.bind(this);
        this.onFormSubmit = this.onFormSubmit.bind(this);
    }

    cleanState() {
        Object.keys(this.state).forEach(key => this.setState({[key]: ''}));
    }

    onInputChange(key, value) {
        this.setState({ [key]: value });
    }

    onFormSubmit() {
        this.props.showLoader();
        const data = {};
        Object.keys(this.state).forEach((key) => {
            if (! this.state[key])
                return false;

            if (typeof this.state[key] === 'object')
                data[key] = this.state[key].value;
            else
                data[key] = this.state[key];
        });
        createRecordRequest(data).then((data) => {
            this.cleanState();
            NotificationManager.success(data.message, "Record Added!");
            },
            (error) => NotificationManager.error("Failed to create patient's record. Some required data are missing", "Record Failed")
        );

        this.props.hideLoader();
    }

    render() {
        return (
            <div>
                <NotificationContainer leaveTimeout={1200} />
                <LoadingBar/>
                <FormFrame
                    onChange={this.onInputChange}
                    bioData={this.state}
                    onSubmit={this.onFormSubmit} />
                <DisplayFrame bioData={ this.state }
                              onSubmit={this.onFormSubmit}
                />
            </div>
        );
    }
}


const mapStateToProps = (state) => {
    return {}
};

const mapDispatchToProps = (dispatch) => {
    return {
        showLoader: () => dispatch(showLoading()),
        hideLoader: () => dispatch(hideLoading())
    }
};

export default connect(mapStateToProps, mapDispatchToProps)(App);