# Configuração do Email para Formulário de Contato

## ✅ O que foi implementado:

1. **Controller**: `app/Http/Controllers/ContatoController.php` - processa o formulário
2. **Rota**: `/contato/enviar` - recebe os dados do formulário
3. **Template de Email**: `resources/views/emails/contato.blade.php` - formatação do email
4. **Formulário atualizado**: com integração ao backend e máscara de telefone

## 📧 Configuração do Email no .env

Para o formulário funcionar, você precisa configurar as variáveis de email no arquivo `.env`:

### Opção 1: Gmail (Recomendado para testes)

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=seu-email@gmail.com
MAIL_PASSWORD=sua-senha-de-app
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=seu-email@gmail.com
MAIL_FROM_NAME="Abigail Cristina Advocacia"
```

**⚠️ IMPORTANTE para Gmail:**
- Você precisa criar uma "Senha de App" no Google
- Acesse: https://myaccount.google.com/apppasswords
- Crie uma senha de app e use ela no `MAIL_PASSWORD`

### Opção 2: Mailtrap (Para testes sem enviar emails reais)

```env
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=seu-username-mailtrap
MAIL_PASSWORD=sua-senha-mailtrap
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=contato@abigailcristina.com.br
MAIL_FROM_NAME="Abigail Cristina Advocacia"
```

Crie uma conta gratuita em: https://mailtrap.io

### Opção 3: Serviço de Email Profissional (Produção)

Se você tem um serviço de hospedagem com email, use as configurações SMTP fornecidas por eles.

## 🧪 Como Testar

1. Configure o `.env` com uma das opções acima
2. Rode o comando: `php artisan config:clear`
3. Acesse o site e preencha o formulário
4. Verifique se o email chegou

## 🎭 Máscara de Telefone

A máscara de telefone foi implementada e formata automaticamente:
- (68) 99999-9999 (celular com 9 dígitos)
- (68) 9999-9999 (telefone fixo com 8 dígitos)

## 📝 Destino do Email

Por padrão, os emails são enviados para: **rodriguesantunes.adv@gmail.com**

Para alterar, edite o arquivo:
`app/Http/Controllers/ContatoController.php` na linha 24:
```php
$message->to('rodriguesantunes.adv@gmail.com')
```

## 🔍 Debug

Se algo não funcionar:
1. Verifique os logs em: `storage/logs/laravel.log`
2. Teste a configuração de email com: `php artisan tinker` e depois `Mail::raw('Test', function($msg) { $msg->to('seuemail@gmail.com')->subject('Test'); });`

