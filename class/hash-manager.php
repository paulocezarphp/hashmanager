<?php

class Hashmanager{

	public function hash_1x64($texto){
        
        $chave = "hash_1x641x64164";	
    	$algoritmo = "AES256"; 
    	$mensagem = openssl_encrypt($texto, $algoritmo, $chave, OPENSSL_RAW_DATA, $chave);
    	$total = $mensagem.$mensagem.$mensagem;
    	return trim(substr(base64_encode($total), 0, 64)); 

    }

    public function hash_1x128($texto){
        
        $chave = "hash__1x1281x128";	
    	$algoritmo = "AES256"; 
    	$mensagem = openssl_encrypt($texto, $algoritmo, $chave, OPENSSL_RAW_DATA, $chave);
    	$total = $mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem;
    	return trim(substr(base64_encode($total), 0, 128)); 

    }

    public function hash_1x256($texto){
        
        $chave = "hash__1x2541x254";	
    	$algoritmo = "AES256"; 
    	$mensagem = openssl_encrypt($texto, $algoritmo, $chave, OPENSSL_RAW_DATA, $chave);
    	$total = $mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem.$mensagem;
    	return trim(substr(base64_encode($total), 0, 256)); 

    }

    

}

?>