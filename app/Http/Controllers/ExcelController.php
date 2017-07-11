<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Excel;
use Input;
use DB;

class ExcelController extends Controller
{
    public function getImport(){
      return view('import');
    }

    public function postImport(){
      Excel::load(Input::file('transaction'),function($reader){
        $reader->select(array('name','mobile','member_address','shipping_address','user_id','kodetrx','member_email','order_email','payment_id','item','total_amount','discount','promo_code'))->each(function($sheet){
          Transaction::firstOrCreate($sheet->toArray());
        });
      });

      return redirect('/transactions');
    }

    public function deleteAll(){
      DB::table('transactions')->truncate();

      $a = Transaction::count();

      if ($a > 1) {
        $message = 'All Files Successfully Deleted';
      } else {
        $message = 'No Remaining Transactions';
      }

      return redirect('/transactions')->with('delete_success',$message);
    }
}
