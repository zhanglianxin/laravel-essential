<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(40)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'zhanglianxin';
        $user->email = 'zhanglianxin@trans-cosmos.com.cn';
        $user->password = bcrypt('zhanglianxin');
        $user->is_admin = true;
        $user->activated = true;
        $user->save();
    }
}
