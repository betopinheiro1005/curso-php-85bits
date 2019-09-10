function selectEstados(fonte_id, alvo_id) {
  fonte = document.getElementById(fonte_id);
  alvo = document.getElementById(alvo_id);
  alvo.length = 0;
  let regiao_selecionada = fonte.options[fonte.selectedIndex].value;
  if (regiao_selecionada == '')
  return;
  window.fetch("estados.php?regiao_selecionada=" + regiao_selecionada)
  .then(response => response.json())
  .then(data => {
    for (var i = 0; i < data.length; i++) {
      var option = document.createElement("option");
      option.innerHTML = data[i].nome;
      option.value = data[i].id;
      alvo.options.add(option);
    }
  })
  .catch(error => alert('Erro!' + error));
}
