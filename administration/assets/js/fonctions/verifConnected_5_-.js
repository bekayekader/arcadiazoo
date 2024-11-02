const verifConnected = (must) =>{
    let isAuth = false;
    if($.cookie(_i_cookieDeConnexion) && $.localStorage(_i_storageMenu)){
        isAuth = true;
    }

    if(must){
        // auth requise
        if(!isAuth){
            deconnectNow()
           return;
        }
    }else{
        // deja auth 
        if(isAuth){
           window.location.replace(_i_homePage);
           return; 
        }
    }
}