<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book_list;
use App\Models\Library_list;
use App\Models\Book_keep;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "username" => "admin",
            "email" => "admin@library-app.test",
            "password" => bcrypt("123456"),
            "super_user" => 1,
        ]);
        Book_list::create([
            "name" => "Sample",
            "added_by" => "1",
            "status" => "1",
        ]);
        Book_list::create([
            "name" => "Sample2",
            "added_by" => "1",
            "status" => "1",
        ]);
        Book_list::create([
            "name" => "Sample3",
            "added_by" => "1",
            "status" => "1",
        ]);
        Library_list::create([
            "name" => "Test Library",
            "address" => "Location1 ,Denver",
            "added_by" => 1,
            "book_collection" => json_encode(1)
        ]);
        Library_list::create([
            "name" => "Test2 Library2",
            "address" => "Location2 , Newyork",
            "added_by" => 1,
            "book_collection" => json_encode(2, 3)
        ]);
        Book_keep::create([
            "book_id" => 1,
            "library_id" => 1,
            "status"  => "IN",
            "return_dt" => "2022-09-25"
        ]);
        Book_keep::create([
            "book_id" => 2,
            "library_id" => 2,
            "status"  => "OUT",
            "return_dt" => "2022-09-27"
        ]);
    }
}
