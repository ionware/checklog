import React from 'react';
import { createStore } from 'redux'
import reducers from './reducers';
import Root from './Root';
import ReactDOM from 'react-dom';

const store = createStore(reducers);

ReactDOM.render(<Root store={store}/>, document.querySelector("#render"));