<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parameter;
use DB;

class customAlgorithmsController extends Controller
{
	public function scoring(Request $request) {
		$factorPoints = array();

		$parameters = Parameter::get();
		foreach ($parameters as $parameter) {
			array_push($factorPoints, $parameter->value);
		}

		similar_text($request->input('memberAddress1'),$request->input('memberAddress2'),$memberAddressValue);
		similar_text($request->input('shippingAddress1'),$request->input('shippingAddress2'),$shippingAddressValue);
		$paymentIdValue = $this->compareValue($request->input('paymentID1'),$request->input('paymentID2'));
		similar_text($request->input('mobile1'),$request->input('mobile2'),$mobileValue);
		similar_text($request->input('memail1'),$request->input('memail2'),$memberEmailValue);
		similar_text($request->input('oemail1'),$request->input('oemail2'),$orderEmailValue);

    $memberAddressPoint = $factorPoints[0]*$memberAddressValue/100;
    $shippingAddressPoint = $factorPoints[1]*$shippingAddressValue/100;
    $paymentIDPoint = $factorPoints[2]*$paymentIdValue/100;
    $mobilePoint = $factorPoints[3]*$mobileValue/100;
    $orderEmailPoint = $factorPoints[4]*$orderEmailValue/100;
    $memberEmailPoint = $factorPoints[5]*$memberEmailValue/100;

    $totalPoints = round($memberAddressPoint+$shippingAddressPoint+$paymentIDPoint+$mobilePoint+$orderEmailPoint+$memberEmailPoint);

    if ($totalPoints <= 400) {
    	$hasil = 'Not Fraud';
    } elseif ($totalPoints > 400 && $totalPoints <= 500) {
    	$hasil = 'Need Concern';
    } else {
    	$hasil = 'fraud';
    }

		$result = [$memberAddressValue, $shippingAddressValue, $paymentIdValue, $mobileValue, $memberEmailValue, $orderEmailValue, $totalPoints, $hasil];
    return redirect('/compare')->with('success',
		'Member Address Score = '.number_format($memberAddressValue).'%<br>
		Shipping Address Score = '.number_format($shippingAddressValue).'%<br>
		Payment ID Score = '.number_format($paymentIdValue).'%<br>
		Mobile Score = '.number_format($mobileValue).'%<br>
		Member E-mail Score = '.number_format($memberEmailValue).'%<br>
		Order E-mail Score = '.number_format($orderEmailValue).'%<br><br>
		<strong>Total Points = '.number_format($totalPoints).' points</strong><br>
		Category = '.$hasil);
	}

  public function compareValue ($v1, $v2) {
		if ($v1 == null && $v2 == null) {
			$result = 0;
		} else {
			if ($v1 == $v2) {
				$result = 100;
			} else {
				$result = 0;
			}
		}

  	return $result;
  }
}
