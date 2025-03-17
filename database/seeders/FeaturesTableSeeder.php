<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{
    public function run()
    {
        $features = [
            ['id' => 1,  'name' => 'Model',           'description' => 'The function of a model in laravel represents the data structure in the files and helps interact with the database.'],
            ['id' => 2,  'name' => 'View',            'description' => 'The function of a view in laravel helps handle the presentation of layers and the user interface.'],
            ['id' => 3,  'name' => 'Controller',      'description' => 'The function of a controller in laravel helps manage the application logic and presents as the bridge between the Model and the View. '],
            ['id' => 4,  'name' => 'Routes',         'description' => 'The function of routes in laravel helps define the URL endpoints and helps map them to controller actions.'],
            ['id' => 5,  'name' => 'Middleware',     'description' => 'The function of a middleware in laravel helps filter the HTTP requests entering the application from the user.'],
            ['id' => 6,  'name' => 'Blade Templates', 'description' => 'The function of a blade template in laravel helps render the views with dynamic content.'],
            ['id' => 7,  'name' => 'Migrations',     'description' => 'The function of the migration in laravel acts as the version control for database schema, allowing the user to easily modify it if needed.'],
            ['id' => 8,  'name' => 'Seeders',        'description' => 'The function of seeders in laravel helps populate the database with initial or test data.'],
            ['id' => 9,  'name' => 'Database',        'description' => 'The function of a database in laravel is to configure and interact with the database systems.'],
            ['id' => 10, 'name' => 'Eloquent ORM',    'description' => 'The Eloquent ORM in laravel acts as the active record implementation for working with databases.'],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}