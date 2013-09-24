<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
                              $this->call('UsersTableSeeder');
		 $this->call('NoticesTableSeeder');
	}

}

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'name' => 'System Admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
        ));
    }

}

class NoticesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('notices')->delete();

        User::create(array(
            'description' => 'Midterm exam notice 2013',
            'status' => '1',
            'file_path' => 'file/path/file.pdf',
        ));
        
        User::create(array(
            'description' => 'Final exam shedule',
            'status' => '1',
            'file_path' => 'file/path/file.pdf',
        ));
        
        User::create(array(
            'description' => 'Workshop on SPSS will be held on next Sunday',
            'status' => '1',
            'file_path' => 'file/path/file.pdf',
        ));
    }

}