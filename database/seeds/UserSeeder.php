<?php

use Illuminate\Database\Seeder;
use App\Models\UserGroup;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add Static Data Usergroup
        DB::table( 'user_group' )->delete();

        $access_right = array();

        $access_right['administrator'] = array(
          'group'     => array(
            'c' => true,
            'r' => true,
            'u' => true,
            'd' => true
          ),
          'user'      => array(
            'c' => true,
            'r' => true,
            'u' => true,
            'd' => true
          )
        );
        UserGroup::create( array( 
          'name' => 'Administrator', 
          'privilege' => json_encode( $access_right['administrator'] ) 
        ));

        // Add default Admin username
        DB::table( 'user' )->delete();

        User::create( array(
          'group_id'     => 1,
          'email'        => 'alfan.freeze@gmail.com',
          'password'     => Hash::make( 'asdqwe123' ),
          'name'         => 'Alfan Rlyan',
          'avatar'       => Null,
          'phone'     	 => '012345678910',
          'created_at'   => new DateTime,
          'updated_at'   => new DateTime
        ));

        User::create( array(
          'group_id'     => 1,
          'email'        => 'admin@bash.com',
          'password'     => Hash::make( 'asdqwe123' ),
          'name'         => 'Administrator',
          'avatar'       => Null,
          'phone'     	 => '012345678910',
          'created_at'   => new DateTime,
          'updated_at'   => new DateTime
        ));
    }
}
