const initMenu = (groupe = "_", page = "_") => {
  var menu = $.localStorage(_i_storageMenu) || [];
  var user = JSON.parse($.cookie(_i_cookieUtilisateur));

  let mn = "";
  try {
    menu.map((smenu, cley) => {
      $("#sidebar-nav").append(`
        <li class="nav-item" title="${smenu.description}">
            <a class="nav-link collapsed" href="${smenu.lien}">
                <i class="bi bi-grid"></i>
                <span>${smenu.titre} </span>
            </a>
        </li> `);
    });
    $(".account-name").html(user.email);
    $(".account-description").html(user.nom);
  } catch (error) {
    console.warn("unable to connect");
  }
};
