const createEmptyModal = (title, data, fin =0 ) => {

    $("#modal-title").html("<h5>"+title+"</h5>")
    let contenu = "<table class='table'>"

    for (const [key, value] of Object.entries(data)){
        contenu = `${contenu} <tr><td>${key}</td> <td>${toNum(value)}</td></tr>  `
    }

    fin &&
    (contenu = `${contenu} <tr class="table-success"><td>TOTAL</td> <td>${toNum(fin)}</td></tr>  `)


   contenu = `<div class="text-center">${contenu}</table> <p><button class="btn btn-primary"  data-dismiss="modal">Fermer</button></p></div>`

      $("#modal-body").html(contenu)
      $("#mod-success").modal('show');

 
}

