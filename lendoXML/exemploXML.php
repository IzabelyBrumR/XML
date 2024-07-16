<?php 
    $link = "https://www.devmedia.com.br/xml/devmedia_full.xml";

    $xml = simplexml_load_file($link)->channel;

    foreach($xml->item as $item){

        echo "<strong>Título: </strong>"
            .$item->title."<br/>";

        echo "<strong>Link: </strong>"
            .$item->link."<br/>";

        echo "<strong>Descrição: </strong>"
            .$item->description."<br/>";

        echo "<strong>Autor: </strong>"
            .$item->author."<br/>";

        echo "<strong>Data: </strong>"
            .$item->pubDate."<br/>";

    }
?>