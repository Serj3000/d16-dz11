<?php

require_once 'config.database.php';
require_once 'vendor/autoload.php';


use Illuminate\Database\Eloquent\Model;

class User extends Illuminate\Database\Eloquent\Model {

    public function post() // возвращает список постов пользователя
    {
        //return $this->hasMany(Post::class);
        return $this->hasOne(Post::class);
    }

}

$post = new User;
$post->firstName='Post 4';
$post->save();


class Post extends Illuminate\Database\Eloquent\Model {

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

$tost=new Post;
$tost->update('firstName', '=', 1)->get()->first();

class Category extends Illuminate\Database\Eloquent\Model {}

class Tag extends Illuminate\Database\Eloquent\Model {}

 
$user = User::find(1);
$post = Post::find(1);
$result=User::where('id', '=', $user->id)->get()->first();

$result_user=User::where('id', '=', 2)->get()->first();
$result_post=Post::where('id', '=', 4)->get()->first();

// -- UPDATE users
// -- SET lastName='Doe'
// -- WHERE firstName='John';

// -- DELETE FROM users
// -- WHERE firstName='Boby';

echo '<pre>';
echo '<br>_____________________________<br>';
//var_dump($post ->post());
//print_r($post->post());
//var_dump($result);
//var_dump($user);
print_r($result_post);
//print_r($id);
echo '<br> _____________________________<br>';
echo '</pre>';

?>