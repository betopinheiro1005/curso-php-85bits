function meuFormData(event) {
  event.preventDefault();
  const formData = new FormData(this);
  var fileInput = document.querySelector('input[type="file"]');
  formData.delete('anexo');
  for (var i=0; i < fileInput.files.length; i++){
    formData.append('anexo'+i, fileInput.files.item(i));
  }
  window.fetch(this.getAttribute("action"), {
    method: 'post',
    body: formData
  }).then(function (response) {
    return response.text();
  }).then(function (text) {
    document.getElementById('mensagem').innerHTML = text;
  });
}
