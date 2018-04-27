import React from 'react';
import LoadingBar  from 'react-redux-loading-bar';

const ReduxProgressBar = () => (
    <LoadingBar
        style={{backgroundColor: '#F76B8A', height: '3px', zIndex: 999999}}
        updateTime={550}
        maxProgress={98}
        progressIncrease={5}
    />
);

export default ReduxProgressBar;