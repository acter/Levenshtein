<?php
/**
 *
 * @authors Your Name (you@example.org)
 * @date    2014-09-17 16:37:11
 * @version $Id$
 */

class Levenshtein {

    function contrast($str1,$str2)
    {
    	//step 1
    	$n = strlen($str1);
    	$m = strlen($str2);
    	if($n ==0){
    		return '';
    	}

    	if($m ==0){
    		return '';
    	}
    	//step 2初始化两个二维数组
    	for($i=0; $i<=$n;$i++){
    		$d[$i][0] = $i;
    	}
    	for($j=0; $j<=$m;$j++){
    		$d[0][$j] = $j;
    	}
    	//step 3
    	for($i=1;$i<=$n;$i++){
    		${'s'.$i} =  substr($str1,$i-1,1);
    		//step 4
    		for($j=1;$j<=$m;$j++){
    			${'t'.$j} = substr($str2,$j-1,1);
    			if(${'s'.$i} == ${'t'.$j})
    			{
    				$cost = 0;
    			}else{
    				$cost = 1;
    			}
    			//step 6
    			$above = $d[$i-1][$j]+1;
    			$left = $d[$i][$j-1]+1;
    			$diag = $d[$i-1][$j-1]+$cost;
    			$d[$i][$j] = min($above,min($left,$diag));
    		}
    	}
        //step 7
        return $d[$n][$m];
    }
}