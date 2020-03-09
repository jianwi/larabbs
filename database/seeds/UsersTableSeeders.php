<?php

use Illuminate\Database\Seeder;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'dujianjun',
            'email' => 'v@jianwi.cn',
            'password' => Hash::make('jianwi.cn'),
            'email_verified_at' => "2020-3-1 14:00"
        ]);
    }
}
