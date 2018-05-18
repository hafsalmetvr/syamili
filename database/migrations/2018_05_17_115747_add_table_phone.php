<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTablePhone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        /*DB::table('phones')->insert(array(
            'phones'=>'9496181329',
             'user_id'=>'41',
             'created_at' =>now(),
             'updated_at' =>now()
         
            ));
        DB::table('phones')->insert(array(
            'phones'=>'9496181329',
             'user_id'=>'55',
             'created_at' =>now(),
             'updated_at' =>now()
         
            ));
        DB::table('books')->insert(
        array(
            'book_name' => 'Laravel books',
            'Author' => 'syamilykrishna',
            'price' => '150',
            'user_id' => '20',
             'created_at' =>now(),
             'updated_at' =>now()
         )
    );*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
