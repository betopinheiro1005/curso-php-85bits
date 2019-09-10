function meuAjax() {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'meu_ajax.php?nome=Maria');
  xhr.onload = function () {
    if (xhr.status === 200) {
      document.getElementById('mensagem')
      .innerHTML = xhr.responseText;
    } else {
      alert('Erro! Status: ' + xhr.status);
    }
};

xhr.send();

}
