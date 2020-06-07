<?php
$data = array("idConnect" => 248, "token" => "XFLG0GRANT1CKBHP5IU9PJS5L72HK89YNU1HM228UV14QZYDOT", "user" => "leandroc", "empresa" => "doTerra", "contato" => $_POST['name'], "telefone" => $_POST['phone'], "email" => $_POST['email'], "assunto" => "Novo Cadastro", "mensagem" => $_POST['interest'], "idAcaoEmail" => 20234, "idAcaoAlerta" => 20235);
$data_string = json_encode($data);                                                                                   
 
$ch = curl_init('http://api.engbox.com.br/dbm-contactus/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);                                                                                                                   
 
$result = curl_exec($ch);

if($result) {
  header("Location: ../agradecimento.html");
}