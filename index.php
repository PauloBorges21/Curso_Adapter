<?php
session_start();


spl_autoload_register(function ($class){

    if(file_exists('classes/'.$class.'.php')){
        require 'classes/'.$class.'.php';
    }
});


$pessoa = new Pessoa("Paulo",80);
//$pessoa->setNome("Paulo");
//$pessoa->setIdade(80);

$pa = new PessoaAdapter($pessoa);

$pa->setSexo("masculino");

echo "Nome: ".$pa->getNome()."</br>";
echo "Idade: ".$pa->getIdade()."</br>";
echo "Sexo: ".$pa->getSexo();

