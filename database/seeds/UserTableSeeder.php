<?php
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder{
  public function run(){
    DB::table('users')->delete();
    \App\User::create(array(
      'name'=>'AJAT Admin',
      'username'=>'ajat',
      'email'=>'ajatdesenvolvimento@gmail.com',
      'password'=>Hash::make('ajat123ajat')
    ));
  }
}
?>
