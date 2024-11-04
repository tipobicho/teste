<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Variáveis do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $empresa = htmlspecialchars($_POST['empresa']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $descricao = htmlspecialchars($_POST['descricao']);

    // Destinatário e Assunto do e-mail
    $to = "estefaniogoncalves1@gmail.com"; // Substitua pelo e-mail desejado para receber os formulários
    $subject = "Novo Pedido de Reserva - Protocolo de Sonhos";

    // Corpo do e-mail
    $message = "
    Nome: $nome\n
    Email: $email\n
    Empresa / Evento: $empresa\n
    Telefone: $telefone\n
    Descrição do Evento: $descricao\n
    ";

    // Cabeçalhos do e-mail
    $headers = "From: $email";

    // Envio do e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Houve um problema ao enviar sua mensagem.";
    }
}
?>