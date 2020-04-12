<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Ajax 3</title>
    <script src="../assets/jquery-3.4.1.min.js"></script>
</head>
<body>
   <p id="text">Texto original</p>
   <button onclick = "alterar()">Alterar</button>

   <script>
        function alterar() {
            $.ajax({
                type: 'POST',
                url: 'resposta.php',
                data: {valor1: 10, valor2: 30},
                success: function(dados) {
                   //console.log(dados)
                   $("#text").text(dados)
                },
                error: function() {
                    console.log('ERRO');
                }
            });
        }
   </script> 
</body>
</html>