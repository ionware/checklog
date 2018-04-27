import { combineReducers } from 'redux';
import { loadingBarReducer } from 'react-redux-loading-bar';


const reducer = combineReducers({
    loadingBar: loadingBarReducer,
});

export default reducer;