<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Excel;
use DB;
use App\Http\Controllers\customAlgorithmsController;

class TransactionsController extends Controller
{
    public function promoCodes() {
      $promo_codes = DB::table('transactions')
                        ->select('promo_code')
                        ->where('promo_code','not like','BhinnekaPoin%')
                        ->distinct()
                        ->get();

      return $promo_codes;
    }

    public function index() {
        $transactions = Transaction::whereNotNull('promo_code')
                            ->where('promo_code','not like','BhinnekaPoin%')
                            ->groupBy('user_id')
                            ->orderBy('id', 'ASC')
                            ->paginate(20);

        $promo_codes = $this->promoCodes();

        return view('transactions.index', compact(['transactions','promo_codes']));
    }

    public function getProcess() {
      $promo_codes = $this->promoCodes();

      foreach ($promo_codes as $promo_code) {
        $transactions = Transaction::whereNotNull('promo_code')
                            ->where('promo_code','=',$promo_code->promo_code)
                            ->groupBy('user_id')
                            ->orderBy('id', 'ASC')
                            ->paginate(20);
        foreach ($transactions as $transaction) {
          $subTransactions = Transaction::whereNotNull('promo_code')
                                ->where([['promo_code','=',$promo_code->promo_code],['user_id','!=',$transaction->user_id]])
                                ->groupBy('kodetrx')
                                ->orderBy('id', 'ASC')
                                ->paginate(20);

          $fixID = 0;
          $fixScore = 0;
          foreach ($subTransactions as $subTransaction) {
            $result = Transaction::autoScoring($transaction, $subTransaction);
            if ($result > $fixScore) {
              $fixID = $subTransaction->id;
              $fixScore = $result;
            }
          }
          if ($fixScore <= 400) {
            $hasil = null;
          } elseif ($fixScore > 400 && $fixScore <= 500) {
            $hasil = 'Need Concern, '.$transaction->id.' Link to '.$fixID.' with score = '.$fixScore;
          } else {
            $hasil = 'Fraud, '.$transaction->id." Link to ".$fixID." with score = ".$fixScore;
          }

          DB::table('transactions')
            ->where('id', $transaction->id)
            ->update(['keterangan' => $hasil]);
        }

      }

      return redirect('/transactions');
    }

    public function list($promo_code) {
        $transactions = Transaction::where('promo_code',$promo_code)->groupBy('kodetrx')->orderBy('user_id', 'ASC')->paginate(20);
        $promo_codes = $this->promoCodes();

        return view('transactions.index', compact(['transactions','promo_codes']));
    }

    public function getExcel() {
      $transactions = Transaction::select('id', 'name', 'user_id', 'kodetrx', 'mobile',
      'member_address', 'shipping_address', 'member_email', 'order_email', 'payment_id','item','total_amount','discount','promo_code','keterangan')->whereNotNull('keterangan')->get();
      Excel::create('transactions', function($excel) use($transactions) {
        $excel->sheet('Sheet 1', function($sheet) use($transactions) {
            $sheet->fromArray($transactions);
        });
      })->export('xls');
    }
}
