<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Task de Exemplo',
            'description' => 'Exemplo de descrição',
            'due_date' => '2024-03-20 00:00:00',
            'user_id' => 1,
            'category_id' => 1
        ]);
    }
}
