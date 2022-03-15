<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=100; $i++){
               $todo = new Todo();
               $todo->title = "Todo " . $i;
               $todo->description = "Dit is descriptie nummer " . $i;
               $todo->save();
        }
    }
}
