function markNotificationAsRead(notificationCount) {
    // if (notificationCount !== 0) {
    //     $.get('/markAsRead');
        
    // }

    var xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", '/markAsRead', false ); // false for synchronous request
        xmlHttp.send( null );
        xmlHttp.responseText;

}

// function httpGet(theUrl)
// {
//     var xmlHttp = new XMLHttpRequest();
//     xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
//     xmlHttp.send( null );
//     return xmlHttp.responseText;
// }