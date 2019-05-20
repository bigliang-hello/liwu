<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 单独处理第一个用户的数据
        $user = new User();
        $user->nickname = 'bigliang';
        $user->password = bcrypt('bigliang123');
        $user->username = 'bigliang';
        $user->avatar = 'https://iocaffcdn.phphub.org/uploads/images/201710/14/1/ZqM7iaP4CR.png';
        $user->is_admin = 1;
        $user->save();
    }
}
