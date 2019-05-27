<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call("ThemUser");
    }
}
//thêm dữ liệu
class ThemUser extends Seeder{
	public function run()
	{
		DB::table('users')->insert([
			'name'=>"Thanh Phuong",
			'email'=>"nguyenphuong@gmail.com",
			'password'=>bcrypt('123456'),
			]);
	}
}
