<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Admin();
        $admin->name="Shashank Singh";
        $admin->email='ssinghhdi@gmail.com';
        $admin->username="ssinghhdi";
        $admin->password=bcrypt("sha2nkishacker");
        $admin->save();
    }
}
