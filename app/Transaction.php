<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  protected $fillable = [
      'name', 'user_id', 'kodetrx', 'mobile', 'member_address', 'shipping_address', 'member_email', 'order_email', 'payment_id', 'total_amount','discount','promo_code','item','keterangan'
  ];

  public static function autoScoring($value1, $value2)	{
    $factorPoints = array();

		$parameters = Parameter::get();
		foreach ($parameters as $parameter) {
			array_push($factorPoints, $parameter->value);
		}

    similar_text($value1->member_address,$value2->member_address,$memberAddressValue);
		similar_text($value1->shipping_address,$value2->shipping_address,$shippingAddressValue);
		$paymentIdValue = self::compareValue($value1->payment_id,$value2->payment_id);
		similar_text($value1->mobile,$value2->mobile,$mobileValue);
		similar_text($value1->member_email,$value2->member_email,$memberEmailValue);
		similar_text($value1->order_email,$value2->order_email,$orderEmailValue);

    $memberAddressPoint = $factorPoints[0]*$memberAddressValue/100;
    $shippingAddressPoint = $factorPoints[1]*$shippingAddressValue/100;
    $paymentIDPoint = $factorPoints[2]*$paymentIdValue/100;
    $mobilePoint = $factorPoints[3]*$mobileValue/100;
    $orderEmailPoint = $factorPoints[4]*$orderEmailValue/100;
    $memberEmailPoint = $factorPoints[5]*$memberEmailValue/100;

    $totalPoints = round($memberAddressPoint+$shippingAddressPoint+$paymentIDPoint+$mobilePoint+$orderEmailPoint+$memberEmailPoint);

		return $totalPoints;
	}

  public static function compareValue ($v1, $v2) {
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
