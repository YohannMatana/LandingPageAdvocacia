<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Novo Contato do Site</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .header {
            background-color: #D4AF37;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: white;
            padding: 30px;
            border-radius: 0 0 5px 5px;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: bold;
            color: #D4AF37;
            margin-bottom: 5px;
        }
        .field-value {
            padding: 10px;
            background-color: #f5f5f5;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Novo Contato do Site</h2>
        </div>
        <div class="content">
            <p>Você recebeu uma nova mensagem através do formulário de contato do site.</p>
            
            <div class="field">
                <div class="field-label">Nome:</div>
                <div class="field-value">{{ $dados['nome'] }}</div>
            </div>

            <div class="field">
                <div class="field-label">E-mail:</div>
                <div class="field-value">{{ $dados['email'] }}</div>
            </div>

            <div class="field">
                <div class="field-label">Telefone:</div>
                <div class="field-value">{{ $dados['telefone'] }}</div>
            </div>

            <div class="field">
                <div class="field-label">Mensagem:</div>
                <div class="field-value">{{ $dados['mensagem'] }}</div>
            </div>

            <hr style="margin: 30px 0; border: none; border-top: 1px solid #ddd;">
            
            <p style="color: #666; font-size: 12px;">
                Esta mensagem foi enviada através do formulário de contato do site Abigail Cristina Advocacia.
            </p>
        </div>
    </div>
</body>
</html>

