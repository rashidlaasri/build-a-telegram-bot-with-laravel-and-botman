<?php

namespace App\Http\Controllers;

use App\Services\DogService;

class AllBreedsController extends Controller
{
    /**
     * Controller constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->photos = new DogService;
    }

    /**
     * Return a random dog image from all breeds.
     *
     * @return void
     */
    public function random($bot)
    {
        // $this->photos->random() is basically the photo URL returned from the service.
        // $bot->reply is what we will use to send a message back to the user.
        $bot->reply($this->photos->random());
    }

    /**
     * Return a random dog image from a given breed.
     *
     * @return void
     */
    public function byBreed($bot, $name)
    {
        // Because we used a wildcard in the command definition, Botman will pass it to our method.
        // Again, we let the service class handle the API call and we reply with the result we get back.
        $bot->reply($this->photos->byBreed($name));
    }
}
