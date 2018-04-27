import { NotificationManager } from 'react-notifications';


const sendTTY =(type = null, title,  message) => {
    switch (type) {
        case 'success':
            NotificationManager.success(message, title);
            break;
        case 'warning':
            NotificationManager.warning(message, title);
            break;
        default:
            NotificationManager.error(message, title);
    }
};

export default sendTTY;