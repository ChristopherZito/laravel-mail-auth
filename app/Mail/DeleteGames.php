<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DeleteGames extends Mailable
{
    use Queueable, SerializesModels;

    public $game;
    public function __construct($game)
    {
        $this->game = $game;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this    -> from('mia@mail.com')
                        -> view('mail.deletedgame');
    }
}
