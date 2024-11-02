const miniLoader = (etat) => {
  console.log(etat);
  if (etat == "start") {
    $("body").append(`
      <div style="background-color:rgba(250,250,250,1);border:2px solid green; border-radius: 50%; position:fixed;bottom:20px;right:15px;z-index:9999999;padding:10px" id="miniLoaderId">
      <img src="./assets/gif/735.gif?">
      </div>
      `);
  } else $("#miniLoaderId").remove();
};
