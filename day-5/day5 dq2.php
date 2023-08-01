<?php
	$book10price = 850;
	$book12price = 1150;
	$nbook100page = 75;
	$nbook200page = 125;
	$penset = 50;

	$countbook10 = 11;
	$countbook12 = 1;
	$countnbook100page = 1;
	$countnbook200page = 1;
	$countpenset = 1;

	$bookbill = ($book10price * $countbook10) + ($book12price * $countbook12);
	$bookdiscount = (($countbook10 + $countbook12) > 10)? ($bookbill * 0.15) : ($bookbill * 0.1);

	$nbookbill = ($nbook100page * $countnbook100page) + ($nbook200page * 
		$countnbook200page);
	$nbookdiscount = (($countnbook100page + $countnbook200page) > 10)? ($nbookbill * 0.2) : ($nbookbill * 0.1);
	$pensetbill = ($penset * $countpenset);
	$totalbill = ($bookbill + $nbookbill + $pensetbill) - ($nbookdiscount + $nbookdiscount);

	echo "total bill : ".$totalbill;
?>