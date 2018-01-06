<?php
	$br ='<br>';
	$array ='Array';
	echo $array .$br;
	$arrays ='Array holo kono kicu ke binnas kora and onek gula value ke ekshate dekhanor jonno je kaj korano hoy array help er jonno print_r (variable) array 3 prokar 1 Indexed array,Associative array,Multidemoncnational array.akhon alochona hove Indexed array niye';
	//**************
	$index ='Indexed Array';
	echo $arrays .$br .$br .$index;
	$father =array(1=>'kazi Abur Rahman','kazi Azimer Rahman','Kazi Arifur Rahman','Kazi Abuahmed','kazi Mesbah Uddin');
	echo $br .$father[5];
	//printf ($father);
//***************
	$associative ='associative arry';
	$asso ='associative array kaj kore shojogi binnas er jemon 1joner results er ke koto marks peyece ta ber korar khetre ai ta bebohar hoy ai associative array kaj kore key=>value niye akhane obossoy strig soho key lekhte hobe.nice 5 vaiyer betoner talika deyor maddhe ta Examples dewya holo note:kan tanle jemon matha ase temon key dore tan dile tar value cole asbe';
	echo $associative .$br .$asso .$br;
	$mother =array('kazi Abur Rahman'=>9000,'kazi Azimer Rahman'=>12000,'Kazi Arifur Rahman'>=22000,'Kazi Abuahmed'>=13000,'kazi Mesbah Uddin'>=15000);
	echo $mother['kazi Abur Rahman'] .$br;
	//print_r ($mother);
//*************
	$multidemontional ='Multidemontional Arry';
	echo $multidemontional .$br;
	$multi ='ai array er kaj holo onek gula value ke ekshate call kore browser show kora otthat mesbah er boyos koto se kon subject a pore and tar hobby ki aigula ke ba onno onek gula array er value ke show korte ai multidemontional array bebohar kora hoy nice ja kora holo ekta variable er moddhe royece ami o amr kicu bondu er data tader sov gula moddhe ki ki value ace abong ta show korte hoy ba ki babe shajano hobe tai hocce multidemontional array   ';
	$multi ='ai array er kaj holo onek gula value ke ekshate call kore browser show kora otthat mesbah er boyos koto se kon subject a pore and tar hobby ki aigula ke ba onno onek gula array er value ke show korte ai multidemontional array bebohar kora hoy nice ja kora holo ekta variable er moddhe royece ami o amr kicu bondu er data tader sov gula moddhe ki ki value ace abong ta show korte hoy ba ki babe shajano hobe tai hocce multidemontional array  ';
	$mesbah =array(
	'mesbah'=>array('age'=>17,'subject'=>'English','GPA'=>4.11,'Hobby'=>'coding'),
	'munjur'=>array('age'=>18,'subject'=>'bangla','GPA'=>3.89,'Hobby'=>'chating')
	);
	echo $mesbah['munjur']['subject'];



?>