<?php

require_once 'config.database.php';
require_once 'vendor/autoload.php';


use Illuminate\Database\Eloquent\Model;


class User extends Illuminate\Database\Eloquent\Model {

    public function post() // возвращает список постов пользователя
    {
        return $this->hasMany(Post::class);
        //return $this->hasOne(Post::class);
    }
}

class Post extends Illuminate\Database\Eloquent\Model {

    public function user() // возвращает пользователя
    {
        //return $this->belongsTo(User::class);
        return $this->hasMany(User::class);
    }

        public function сategory() // возвращает список категорий
    {
        //return $this->belongsTo(Category::class);
        return $this->hasMany(Category::class);
    }

        public function tag() // возвращает список тэгов
    {
        //return $this->belongsToMany(Tag::class);
        return $this->hasMany(Tag::class);
    }
}

class Category extends Illuminate\Database\Eloquent\Model {

    public function post() // возвращает список постов пользователя
    {
        //return $this->hasMany(Post::class);
        return $this->hasMany(Post::class);
    }
}

class Tag extends Illuminate\Database\Eloquent\Model {

    public function post() // возвращает список постов пользователя
    {
        return $this->hasMany(Post::class);
        //return $this->belongsTo(Post::class);
    }
}


    $insert_User=User::insertGetId(
        ['firstName' =>'Hasha-'.rand(1,10), 'lastName'=>'Mosha-'.rand(1,10),'created_at'=>'2019-10-07 00:15:45','updated_at'=>'2019-10-07 00:15:45']
    );

    $insert_Category=Category::insertGetId(
     ['category'=>'Category-'.rand(1,10), 'created_at'=>'2019-10-07 00:15:45','updated_at'=>'2019-10-07 00:15:45']
    );

    $insert_Post=Post::insertGetId(
     ['user_id'=>1,'category_id'=>1,'post' =>'Post-'.rand(1,40),'created_at'=>'2019-10-07 00:15:45','updated_at'=>'2019-10-07 00:15:45']
    );//'user_id'=>rand(1,10),'category_id'=>rand(1,10),

    $insert_Tag=Tag::insertGetId(
     ['tag' =>'Tag-'.rand(1,50), 'created_at'=>'2019-10-07 00:15:45','updated_at'=>'2019-10-07 00:15:45']
    );//'tag_id'=>rand(1,10),


$tag = Tag::all();

    // echo '<pre>';
    // print_r($tag);
    // echo '<br>';
    // echo '</pre>';


    $user = User::find(1);
    $post = Post::find(1);
    $category = Post::find(1);
    $tag = Post::find(1);


// echo '<pre>';
// var_dump($user->post->created_at);
// var_dump($post->user->firstName);
// var_dump($category->post);
// var_dump($tag->user);
// echo '</pre>';


    echo '<pre>';
    // print_r($user->post->created_at);
    // print_r($post->user->firstName);
    // print_r($category->post);
    // print_r($tag->user);
    echo '</pre>';

//_________________________________________________________________________________________________________

                    // $user=new User;
                    // $user->firstName='Dasha-3';
                    // $user->lastName='Vosha-3';
                    // $user->firstName='Dasha-4';
                    // $user->lastName='Vosha-45';
                    // $user->save();


//---------------
// $user = User::find(1);


//---------------
// User::insert([
//     ['firstName' => 'Kasha-16', 'lastName'=>'Bosha-6','created_at'=>'2019-09-17 00:15:45','updated_at'=>'2019-09-17 00:15:45'],
//     ['firstName' => 'Kasha-17', 'lastName'=>'Bosha-7','created_at'=>'2019-09-17 00:15:45','updated_at'=>'2019-09-17 00:15:45'],
// ]);


//---------------
                    // $id = User::insertGetId(
                    //     ['firstName' => 'Hasha-10', 'lastName'=>'Mosha-10']
                    // );


//---------------
// User::where('id', 16)
//     ->update(['firstName' => 11111]);


//---------------
                    //$user=User::all();


//_________________________________________________________________________________________________________


// echo '<pre>';
// //var_dump($user);
// print_r($user->);
// //print_r($id);
// echo '</pre>';

?>