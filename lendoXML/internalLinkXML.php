<?php
require_once 'shared/header.php';
?>

<h3>Lendo links internos</h3>
<?php
//Caminho está no nosso site (interno)
$link = 'resources/upload/xml/devmedia_full.xml';
//link do arquivo xml
$xml = simplexml_load_file($link)->channel;
//carrega o arquivo XML e retornando um Array
foreach ($xml->item as $item) {
    //faz o loop nas tag com o nome "item"
    //exibe o valor das tags que estão dentro da tag "item"
    //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
    echo "<strong>Título:</strong> "
        . $item->title . "<br />";
    echo "<strong>Link:</strong> "
        . $item->link . "<br />";
    echo "<strong>Descrição:</strong> "
        . $item->description . "<br />";
    echo "<strong>Autor:</strong> "
        . $item->author . "<br />";
    echo "<strong>Data:</strong> "
        . $item->pubDate . "<br />";
    echo "<br />";
} //fim do foreach
?>

<?php
require_once 'shared/footer.php';
?>