import React, { Component } from 'react';
import Input from './Input';
import Button from './Button';
import ProgressBar from '../../components/ProgressBar';
import { loginRequest } from '../../utils/requests';
import { NotificationManager, NotificationContainer } from 'react-notifications';
//Modules Stylesheets
import 'react-notifications/lib/notifications.css';

class App extends Component {
    constructor(props) {
        super(props);

        this.state = {
            isLoading: false,
        };

        //Bind Internal function to Class
        this.onInputChange = this.onInputChange.bind(this);
        this.onFormSubmit = this.onFormSubmit.bind(this);
        this.toggleProgress = this.toggleProgress.bind(this);
        this.sendTTY = this.sendTTY.bind(this);
        this.requestHandler = this.requestHandler.bind(this);
    }

    /**
     * Uses Notification Module to sends AJAX Feedbacks
     * */
    sendTTY(type = null, message) {
        switch (type) {
            case 'success':
                NotificationManager.success(message, "Welcome Back!");
                break;
            default:
                NotificationManager.error(message, "An Error Occured");
        }
    }

    /**
     * Toggles the Progress Bar Loader
     * */
    toggleProgress() {
        this.setState({ isLoading: !this.state.isLoading });
    }

    requestHandler(notificationType, TTYData, callback){
        this.sendTTY(notificationType, TTYData);
        this.toggleProgress();
        if (typeof callback === 'function')
            callback();
    }

    onInputChange(event, key) {
        this.setState({ [key]: event.target.value });
    }

    onFormSubmit(e) {
        e.preventDefault();
        this.toggleProgress();

        loginRequest(this.state).then(
            ({ data }) => {
                this.requestHandler('success', data.message,
                    () => setTimeout(() => window.location = "/home", 5000));
            }).catch(() => {
            this.requestHandler(null, "Username or password is incorrect. Please try again");
        });
    }

    render() {
        return (
            <div className="container-fluid">
                <NotificationContainer leaveTimeout={1200} />
                <ProgressBar isLoading={ this.state.isLoading }/>
                <form onSubmit={ this.onFormSubmit }>
                   <Input type="text" pair="username" placeholder="Username" onInputChange={ this.onInputChange }/>
                   <Input type="password" pair="password" placeholder="Password" onInputChange={ this.onInputChange }/>
                    <Button text="sign in" />
                </form>
            </div>
        )
    }
}


export default App;