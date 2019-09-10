<!DOCTYPE html>
<html lang="pt-BR">
  <head> <title>Formulário Assíncrono</title>
    <script src="curso.js"></script> </head>
    <body>
      <form id="meu_form" action="meu_form_data.php" enctype="multipart/form-data">
      <label>Nome:</label>
      <input type="text" name="nome"/>
      <label>Email:</label>
      <input type="email" name="email"/>
      <input type="file" name="anexo" multiple="multiple"/>
      <input type="submit" value="Cadastrar"/>
    </form>
    <div id="mensagem"></div>
    <script>
      const form = document.getElementById('meu_form');
      form.addEventListener('submit', meuFormData);
    </script>
  </body>
</html>
