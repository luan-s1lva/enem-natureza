<?php

namespace App\Mail;

use App\Models\Teacher;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class aprovarProfessor extends Mailable
{
    use Queueable, SerializesModels;

    private $professor;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Teacher $professor)
    {
        $this->professor = $professor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $this->subject('Confirmação de Identidade');
        $this->to($this->professor->email, $this->professor->name);
        return $this->view('mail.aprovarProfessor', ['professor' => $this->professor]);
    }
}
