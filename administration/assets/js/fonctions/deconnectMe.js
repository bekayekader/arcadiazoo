const deconnectMe = () => {
  if (confirm("Êtes-vous sûr?")) {
    deconnectNow();
  }
};

const deconnectNow = () => {
  $.removeCookie(_i_cookieDeConnexion, { path: "/" });
  $.removeCookie(_i_cookieUtilisateur, { path: "/" });
  $.removeCookie(_i_cookieDroits, { path: "/" });
  $.localStorage(_i_storageMenu, null);
  window.location.replace(_i_loginPage);
};

const connectNow = (rep) => {
  var menu = rep.data.menu;
  var caisses = rep.data.caisses;

  try {
    $.localStorage(_i_storageMenu, menu);
    $.cookie(_i_cookieDeConnexion, rep.data.token, {
      expires: rep.data.duree || 12,
      path: "/",
    });
    $.cookie(_i_cookieUtilisateur, JSON.stringify(rep.data.user), {
      expires: rep.data.duree || 12,
      path: "/",
    });
    $.cookie(_i_cookieDroits, JSON.stringify(rep.data.droits), {
      expires: rep.data.duree || 12,
      path: "/",
    });
    window.location.replace(_i_homePage);
  } catch (error) {
    console.log(error);
    notifyMy("Erreur de base de donnée");
  }
};
