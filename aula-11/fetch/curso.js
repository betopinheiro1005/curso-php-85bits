function meuFetch() {
  window.fetch("meu_fetch.php?nome=Maria")
  .then(response => response.text())
  .then(data => {
    document.getElementById('mensagem')
    .innerHTML = data;
  })
  .catch(error => alert('Erro!' + error));
}
