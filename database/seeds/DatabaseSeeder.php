<?php

use App\Conversation;
use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ConversationsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
    }
}
