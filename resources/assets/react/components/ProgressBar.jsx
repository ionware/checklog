import React from 'react';
import TopbarProgress from 'react-topbar-progress-indicator';

TopbarProgress.config({
    barColors: {
        "0" : "#F76B8A"
    }
});

const ProgressBar = ({ isLoading }) => {
    return isLoading ? <TopbarProgress /> : null;
};

export default ProgressBar;