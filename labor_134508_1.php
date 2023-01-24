<?php
	$nr_indeksu='134508';
	$nrGrupy = '1';
	
	echo 'Jakub Burandt '.$nr_indeksu.' grupa '.$nrGrupy.'<br/><br/><br/>';
	

	echo 'Metoda include() i require() - Wyrażenie include dołącza i wykonuje określony plik. Zarówno include i require to bardzo użyteczne sformułowania spotykane w języku PHP.
	Obie funkcje pełnią w PHP <br/> taką samą funkcje – pozwalają połączyć ze sobą kilka plików. Obie instrukcje działają w identyczny sposób,
	aż do momentu wywołania dołączanej zawartości. <br/> Różnica miedzy nimi jest widoczna dopiero w przypadku kiedy plik nie zostanie znaleziony <br/><br/>';
    echo 'Zastosowanie metody include()<br/>';
	echo "A color fruit <br/>";
	include 'vars.php';
	echo "A $color $fruit<br/><br/><br/>";


	echo 'Metoda require_once() - Wyrażenie require_once jest identyczne z require, z wyjątkiem tego, <br/>
	że PHP sprawdzi, czy plik został już dołączony, a jeśli tak, to nie włączy go ponownie.<br/><br/>';
	echo 'Zastosowanie metody require_once() <br/>';
	$s = require_once('vars1.php');
	echo $s;
	$s = require_once('vars1.php');
	echo '<br/>' .$s. '<br/><br/><br/>';


	echo 'Warunek if - Konstrukcja if jest jedną z najważniejszych możliwości wielu języków, w tym PHP. Pozwala na warunkowe wykonywnie fragmentów kodu. <br/><br/>';
	echo 'Zastosowanie warunku if.<br/>';
	if ($nr_indeksu > $nrGrupy)
  		echo "nr_indeksu jest większy niż nrGrupy<br/><br/><br/>";



	echo 'Warunek else - Często chciałbyś wykonać jakieś wyrażenie, jeżeli określony warunek został spełniony i inne wyrażenie, jeżeli warunek się nie spełnił. <br/>
	Do tego właśnie służy else. else rozszerza wyrażenie if o wyrażenie wykonywane w wypadku warunek w wyrażeniu if przyjmuje wartość FALSE. <br/><br/>';
	echo 'Zastosowanie warunku else.<br/>';
	if ($nr_indeksu < $nrGrupy){
		echo "nr_indeksu jest mniejszy niż nrGrupy<br/>";
	}
	else { 
		echo "nr_indeksu jest większy niż nrGrupy<br/><br/><br/>";
	}
		
	  
	echo 'Warunek elseif - elseif, jak sama nazwa wskazuje, jest kombinacją if oraz else. Tak jak else, rozszerza konstrukcję if, <br/>
	aby wykonać inne wyrażenie w wypadku gdy oryginalne wyrażenie if przyjmuje wartość FALSE.<br/>
	Jednakże, w odróżnieniu od else, to alternatywne wyrażenie zostanie wykonane tylko jeżeli wyrażenie warunkowe elseif otrzyma wartość TRUE.<br/><br/>';
	echo 'Zastosowanie warunku elseif.<br/>';
	if ($nr_indeksu < $nrGrupy){
		echo "nr_indeksu jest mniejszy niż nrGrupy<br/>";
	}
	elseif ($nr_indeksu == $nrGrupy){ 
		echo "nr_indeksu jest równy nrGrupy<br/>";
	}
	else { 
		echo "nr_indeksu jest większy niż nrGrupy<br/><br/><br/>";
	}


	echo 'Warunek switch - Instrukcja switch jest podobna do serii instrukcji IF dotyczących tego samego wyrażenia. W wielu przypadkach możesz<br/>
	chcieć porównać tę samą zmienną (lub wyrażenie) z wieloma różnymi wartościami i wykonać inny fragment kodu w zależności od tego, której wartości jest równy.<br/><br/>';
	echo 'Zastosowanie warunku switch.<br/>';
	switch ($nrGrupy) {
		case 0:
			echo "Brak grupy<br/><br/><br/>";
			break;
		case 1:
			echo "Grupa nr 1<br/><br/><br/>";
			break;
		case 2:
			echo "Grupa nr 2<br/><br/><br/>";
			break;
	}


	echo 'Pętla while() - pętle while są najprostszym rodzajem pętli w PHP. Zachowują się tak samo jak ich odpowiedniki z C.<br/><br/>';
	echo 'Zastosowanie pętli while().<br/>';
	$i = 1;
	while ($i <= 3) {
		echo $i++.'<br/>';
	}
	echo '<br/><br/>';


	echo 'Pętla for() - Pętle for są najbardziej złożonymi pętlami w PHP. Zachowuja się jak jej odpowiedniki w C.<br/><br/>';
	echo 'Zastosowanie pętli for().<br/>';
	for ($i = 1; $i <= 3; $i++) {
		echo $i.'<br/>';
	}
	echo '<br/><br/>';


	echo 'Zmienna $_GET - Asocjacyjna tablica (array) zmiennych przekazanych do obecnego skryptu przez parametry adresu URL (tzw. query string).<br/>
	Zauważ że tablica jest tworzona nie tylko dla żądań typu GET, ale dla wszystkich zapytań, które zawierają query string.<br/><br/>';
	echo 'Zastosowanie zmiennej $_GET<br/>';
	echo 'Witaj, ' .htmlspecialchars($_GET["imie"]). '!<br/><br/><br/>';


	echo 'Zmienna $_POST - Tablica asocjacyjna ze zmiennymi przekazanymi do obecnego skryptu metodą HTTP POST,<br/>
	gdy jako Content Type w zapytaniu HTTP użyto application/x-www-form-urlencoded lub multipart/form-data.<br/><br/>';
	echo 'Zastosowanie zmiennej $_POST<br/>';
	echo 'Witaj ' . htmlspecialchars($_POST["name"]) . '!<br/><br/><br/>';


	echo 'Zmienna $_SESSION - Tablica asocjacyjna zawierająca zmienne sesyjne dostępne dla obecnego skryptu. Zawiera pewne informacje początkowe, ale nie jest zmienną superglobalną<br/><br/>';
	echo 'Zastosowanie zmiennej $_SESSION<br/>';
	session_start();
	$_SESSION["newsession"]=$value;
	echo '<br/><br/>';

?>
