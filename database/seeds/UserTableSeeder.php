<?php
use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Aditya Pratama';
        $user->email = 'orochimadit@gmail.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());

        $admin = new User;
        $admin->name = 'Perusahaan';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('password');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
