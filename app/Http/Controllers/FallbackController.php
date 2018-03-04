<?php

namespace App\Http\Controllers;

class FallbackController extends Controller
{
    /**
     * Respond with a generic message.
     *
     * @param Botman $bot
     * @return void
     */
    public function index($bot)
    {
        $bot->reply('Sorry, I did not understand these commands. Try: \'Start Conversation\'');
    }
}
