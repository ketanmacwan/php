<?php
function clac_sal($salary,$absent_days)
{
	if ($absent_days <= 3)
		$cut_par_day = 50;
	else if($absent_days > 3 && $absent_days < 7)
		$cut_par_day = 75;
	else
		$cut_par_day = 100;
	$total_cut = $absent_days*$cut_par_day;
	$net_salary = $salary - $total_cut;
	return $net_salary;
}
echo "net salary is ".clac_sal(25000,5);
?>