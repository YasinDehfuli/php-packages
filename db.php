<?php
require_once 'vendor/autoload.php'; // important


$faker = Faker\Factory::create('fa_IR');

//echo $faker->realText(2000);
//die();
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'uni',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
//$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

for ($i = 0; $i < 100; $i++) {
    Capsule::table('students')->insert([
        'name' => $faker->name,
        'username' => $faker->userName,
        'email' => $faker->email,
        'address' => $faker->address,
        'tel' => $faker->phoneNumber
    ]);
}

Capsule::table('student')->delete(14);
Capsule::table('student')->where('id',18)->update(
    ['username' => 'newuser']
);

$students = Capsule::table('students')
    ->where('id','>',8)->get();
echo '<pre>';
print_r($students);