<?php

require_once 'config.database.php';
require_once 'vendor/autoload.php';

//namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Illuminate\Database\Eloquent\Model {}

$user=new User;
$user->firstName='Dasha-2';
$user->lastName='Vosha-2';
$user->save();

//---------------
$user=User::insert([
    ['firstName' => 'Kasha-6', 'lastName'=>'Bosha-6'],
    ['firstName' => 'Kasha-7', 'lastName'=>'Bosha-7'],
]);

//---------------
$id = User::insertGetId(
    ['firstName' => 'Hasha-10', 'lastName'=>'Mosha-10']
);


//---------------
User::where('id', 36)
    ->update(['firstName' => 11111]);


//---------------
$user=User::all();
 
//$user=Suser::where('firstName','!=','Masha')->get();

echo '<pre>';
//var_dump($user);
print_r($id);
echo '</pre>';

//____________________________________________________________________
// class Aser {
//     public $first_Name;
//     public $last_Name;

//     public function __construct ($Name, $suName){
//         $this->first_Name=$Name;
//         $this->last_Name=$suName;
//     }
// };

// $buser=new Aser('Ivan','Ivanov');
// echo '<pre>';
// //var_dump($buser);
// print_r($buser);
// echo '</pre>';

// $buser=new Aser('Petr','Petrov');
// echo '<pre>';
// //var_dump($buser);
// print_r($buser);
// echo '</pre>';

?>