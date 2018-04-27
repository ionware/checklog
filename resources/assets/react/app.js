import React, { Component } from 'react';
import {connect} from 'react-redux';
import  LoadingBar from './components/ReduxProgressBar';
import FormFrame from './components/FormFrame';
import DisplayFrame from './components/DisplayFrame';
import { showLoading } from 'react-redux-loading-bar';

class App extends Component {
    constructor(props) {
        super(props);

        this.state = {

        };

        this.onInputChange = this.onInputChange.bind(this);
        this.onFormSubmit = this.onFormSubmit.bind(this);
    }

    onInputChange(key, value) {
        this.setState({ [key]: value });
    }

    onFormSubmit() {
        this.props.showLoader();
    }

    render() {
        return (
            <div>
                <LoadingBar/>
                <FormFrame
                    onChange={this.onInputChange}
                    bioData={this.state}
                    onSubmit={this.onFormSubmit} />
                <DisplayFrame bioData={ this.state } />
            </div>
        );
    }
}


const mapStateToProps = (state) => {
    return {}
};

const mapDispatchToProps = (dispatch) => {
    return {
        showLoader: () => dispatch(showLoading())
    }
};

export default connect(mapStateToProps, mapDispatchToProps)(App);