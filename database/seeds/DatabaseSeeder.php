<?php

use Illuminate\Database\Seeder;
use App\Parameter;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $parameters = [
        ['name' => 'Member Address','value' => '280',],
        ['name' => 'Shipping Address','value' => '290',],
        ['name' => 'Payment ID','value' => '200',],
        ['name' => 'Mobile','value' => '170',],
        ['name' => 'Member E-mail','value' => '90',],
        ['name' => 'Order E-mail','value' => '100',]
      ];
      Parameter::insert($parameters);
    }
}
