const axx = async (
  api,
  fdt = [],
  btnLoad = "v",
  globalLoad = false,
  reqLog = false
) => {
  if (globalLoad) {
    loader("start");
  } else miniLoader("start");

  let formData = new FormData();
  fdt.map((fm) => {
    formData.append(fm.key, fm.value);
  });
  $(`#${btnLoad}`).attr("disabled", true);
  let resp = await axios.post("api/" + api, formData, {
    headers: {
      auth: $.cookie(_i_cookieDeConnexion),
      "Content-Type":
        "multipart/form-data; charset=utf-8; boundary=" +
        Math.random().toString(),
    },
  });

  $(`#${btnLoad}`).attr("disabled", false);
  try {
    !resp.data.result && notifyMy(resp.data.infos);
    console.log(resp);
    miniLoader("end");
    if (reqLog && !resp.data.is_auth) {
      alert("Session expirée");
      deconnectNow();
    }
  } catch (error) {
    miniLoader("end");
    console.log(error);
    notifyMy(error);
  }

  miniLoader("end");

  return resp.data;
};
