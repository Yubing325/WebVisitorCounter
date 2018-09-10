<?php
	//PHP Visitor Counter
	//Author: Leon(Y.B Liang)
	//bingsnote.info
 	$path= "img";// define the path of images
 	$f_name = "log.txt";// where records the visitor info 
	$n_digit = 10;
 	//if file isn't created, initial it with value 1
	if(!file_exists($f_name)){
 	$fp=fopen($f_name,"w");
 	fputs($fp,"1");
 	fclose($fp);
 }
 	$fp=fopen($f_name,"r"); //read log file
 	$hits=fgets($fp,$n_digit); //starts counting
 	fclose($fp); //close log file
 	$hits=(int)$hits + 1;// counter increase by 1
 	$hits=(string)$hits; 
 	$fp=fopen($f_name,"w"); //reopen the log file for writing
 	fputs($fp,$hits);// 
 	fclose($fp); //close log file
	//display visitors number by small pics
	for($i=0;$i<$n_digit;$i++)
	
	$hits = str_replace("$i","<img src='$path/$i.gif' >","$hits");
	echo $hits;   
?>