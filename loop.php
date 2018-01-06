<?php
	$br ='<br>';
	$loop ='Loop';
	$loopintro ='Loop mane hocce 1ta kaj ke bar bar kora otthat loop holo kono kicu bar bar howya.php te loop hocce 3 prokar 1.for loop 2.while loop 3.foreach loop akhon amra sikhbo for loop bistarito nice dewya holo jodi bola hoy amake 1-100 porjonto lekho tahole amake echo korte hobe echo 1; airokom 100 bar ete amader onek kosto hobe ai kaj ta jodi shoz a kora jeto kemon hoto R ai kaj korar jonno loop er bebohar for loop initiazition er mane bola hoy koto theke suru hobe conditon hobe koto porjonto hobe ta ki boro theke naki choto theke abong last a thake increment/decrement increment korte hole variable er shate jog hobe == and decrement hole variable er shate -- nice bistarito bhabe kora holo';
	echo $loop .$br .$loopintro;
	$loopwrite = 'for (initilazition;condition;increment/decrement){}';
	echo $br .$loopwrite;
	/*for($m=100;$m>=1;$m--){
		echo  $m .$br;
	}
	//aikhane 1-100 porjonto lekha show kora hoy
	*/
	for ($k=1;$k<=99;$k+=2){
		echo $k ;
	}
	for($i=1;$i<=100;$i++){
		echo $i ;
	}
	$while ='While Lop aita bebohar korte ja korte hoy ta nice dewya holo';
	echo $while .$br;
	$w=1;
	while ($w<=100){
		echo $w .$br;
		$w+=2;
	}
	//Foreach loop
	$foreach = 'Foreach loop eti bebohar korte hole amader age array somporke jante hobe jemon amra age array te kaj korecilam sekhane kinto sov key othoba value ke ekshate call kore browser a show korte partam amader browser a show korar jonno amra tokhon kortam holo key echo kortam sudu seta dekhte petam aj ta theke mukti pete ja korte hoy ta janbo';
	echo $foreach .$br;
	$father =array('mesbah','munjur','ashraf','rahi');
	foreach($father as $all_friend){
		echo $all_friend .$br;
	}
?>