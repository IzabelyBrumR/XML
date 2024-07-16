<?php 

    $dom = new DOMDocument("1.0", "UTF-8");
    $dom->load("resources/upload/xml/contatos.xml");

    $dom->preserveWhiteSpace = false;

    $dom->formatOutput = true;

    $root = $dom->createElement("agenda");

    $contato = $dom->createElement("contato");

    $nome = $dom->createElement("nome", "Iza Brum");
    $telefone = $dom->createElement("telefone", "55 933000801");
    $endereco = $dom->createElement("endereco", "Rua Osvaldo Aranha");

    $contato->appendChild($nome);
    $contato->appendChild($telefone);
    $contato->appendChild($endereco);

    $root->appendChild($contato);
    $dom->appendChild($root);

    $dom->save("./resources/upload/xml/contatos.xml");

    header("Content-Type: text/xml");
    
    print $dom->saveXML();
?>