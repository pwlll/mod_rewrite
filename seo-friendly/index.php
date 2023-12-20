<?php
echo '<a href="../index.html">&laquo; Lista zadań</a>';
echo '<h1>Przyjazny SEO adres URL</h1>';
echo '<p>Wstęp odbieranie parametrów</p>';
echo '<p>Do adresu URL, po nazwie skryptu, dodaj ciąg:</p>';
echo '<pre><code>?mod=user&id=13&view=edit</code></pre>';
$qs = $_SERVER['QUERY_STRING'];
echo '<p>Query string z adresu URL:</p>';
echo '<pre><code>'.$qs.'</code></pre>';
echo '<h2>Tablica wykrytych parametrów:</h2>';
$qsa = (strstr($qs,'&')) ? explode('&',$qs) : explode('/',$qs);
var_dump($qsa);
echo '<h2>Testowanie</h2>';
echo '<p>Kliknij w odnośnik: <a href="user/13/edit">Weryfikuj</a></p>';
echo '<h2>Rezultat</h2>';
echo ($qsa[1]!='id=edit') ? '<p style="color: red; font-weight: 800;">Nie przepisano adresu</p>' : '<p style="color: green; font-weight: 800;">Przepisano adres URL</p>';
?>
