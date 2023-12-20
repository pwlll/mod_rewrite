<?php
echo '<a href="../index.html">&laquo; Lista zadań</a>';
echo '<h2>Formularz logowania</h2>';
if($_SERVER['HTTPS']){
	echo '<form action="'.$_SERVER['PHP_SELF'].'" method="POST">';
	echo '<inpyt type="text" name="login" />';
	echo '<inpyt type="password" name="passwd" />';
	echo '<inpyt type="submit" name="setBtn" value="Zaloguj" />';
	echo '</form>';
} else {
	echo 'Połączenie nie jest szyfrowane. Logowanie niemożliwe';
	echo '<br/>';
}
?>
<h1>Zadanie</h1>
<ol>
  <li>Utwórz plik <code>.htaccess</code> i umieść w nim poniższe reguły</li>
  <li><p>Reguły sprawdzające protokół połączenia i przekierowujące na połączenie szyfrowane</p>
	<pre><code>RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]</code></pre>
  </li>
  <li>Zweryfikuj działanie reguły przekierowania na protokół <code>HTTPS</code>. Co jest jeszcze potrzebne?</li>
</ol>
