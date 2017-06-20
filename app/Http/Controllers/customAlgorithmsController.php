<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customAlgorithmsController extends Controller
{
	public function scoring(Request $request) {
		$this->validate($request, [
            'memberAddress1' => 'required',
            'memberAddress2' => 'required'
        ]);
		$factorPoints = [280,290,200,170,100,90,100];

        $memberAddressPoint = $factorPoints[0]*($this->calculateSimilarity($request->input('memberAddress1'),$request->input('memberAddress2'))/100);
        $shippingAddressPoint = $factorPoints[1]*($this->calculateSimilarity($request->input('shippingAddress1'),$request->input('shippingAddress2'))/100);
        $paymentIDPoint = $factorPoints[2]*($this->compareValue($request->input('paymentID1'),$request->input('paymentID2'))/100);
        $mobilePoint = $factorPoints[3]*($this->calculateSimilarity($request->input('mobile1'),$request->input('mobile2'))/100);
        $orderEmailPoint = $factorPoints[4]*($this->calculateSimilarity($request->input('oemail1'),$request->input('oemail2'))/100);
        $memberEmailPoint = $factorPoints[5]*($this->calculateSimilarity($request->input('memail1'),$request->input('memail2'))/100);
        $IPAddressPoint = $factorPoints[6]*($this->compareValue($request->input('ip1'),$request->input('ip2'))/100);

        $totalPoints = round($memberAddressPoint+$shippingAddressPoint+$paymentIDPoint+$mobilePoint+$orderEmailPoint+$memberEmailPoint+$IPAddressPoint);

        if ($totalPoints <= 400) {
        	$hasil = 'Not Fraud';
        } elseif ($totalPoints > 400 && $totalPoints <= 500) {
        	$hasil = 'Need Concern';
        } else {
        	$hasil = 'fraud';
        }
        return redirect('/similarity')->with('success', 'Score = '.$totalPoints.' points, Category = '.$hasil);
	}

    public function calculateSimilarity ($str1, $str2) {
    	$str1len = strlen($str1);
    	$str2len = strlen($str2);
    	$lev = levenshtein($str1, $str2);

    	if($str1len < $str2len){    
    		$pct = ($str1len - $lev) / $str1len;    
    	} else {    
    		$pct = ($str2len - $lev) / $str2len;    
    	}   
    	$pct = abs($pct * 100); 

    	return $pct;
    }

    public function compareValue ($v1, $v2) {
    	if ($v1 == $v2) {
    		$result = 100;
    	} else {
    		$result = 0;
    	}

    	return $result;
    }
}
