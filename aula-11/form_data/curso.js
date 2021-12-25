function meuFormData(event) {
  event.preventDefault();
  const formData = new FormData(this);
  window.fetch(this.getAttribute("action"), {
    method: 'post',
    body: formData
  }).then(function (response) {
    return response.text();
  }).then(function (text) {
    document.getElementById('mensagem')
    .innerHTML = text;
  });
}
