<?php

require_once 'config.database.php';
require_once 'vendor/autoload.php';


use Illuminate\Database\Eloquent\Model;

class User extends Illuminate\Database\Eloquent\Model {

    public function post()
    {
        return $this->hasMany(Post::class);
    }

}

class Post extends Illuminate\Database\Eloquent\Model {}

class Category extends Illuminate\Database\Eloquent\Model {}

class Tag extends Illuminate\Database\Eloquent\Model {}



//____________________________________________________________________________________________________________________________

// $user=new User;
// $user->firstName='Dasha-3';
// $user->lastName='Vosha-3';
// $user->firstName='Dasha-4';
// $user->lastName='Vosha-45';
// $user->save();


$user = User::find(1);

//---------------
User::insert([
    ['firstName' => 'Kasha-6', 'lastName'=>'Bosha-6','created_at'=>'2019-09-17 00:15:45','updated_at'=>'2019-09-17 00:15:45'],
    ['firstName' => 'Kasha-7', 'lastName'=>'Bosha-7','created_at'=>'2019-09-17 00:15:45','updated_at'=>'2019-09-17 00:15:45'],
]);

// //---------------
// $id = User::insertGetId(
//     ['firstName' => 'Hasha-10', 'lastName'=>'Mosha-10']
// );


//---------------
User::where('id', 16)
    ->update(['firstName' => 11111]);


//---------------
//$user=User::all();

echo '<pre>';
//var_dump($user);
print_r($user);
//print_r($id);
echo '</pre>';



?>