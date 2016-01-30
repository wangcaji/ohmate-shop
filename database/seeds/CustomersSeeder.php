<?php

use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeId = CustomerType::where('type_en', 'enterprise')->first()->id;
        DB::table('customers')->insert(
            ['id' => 0 , 'type_id' => $typeId, 'openid' => 'enterprise']
        );
    }
}
