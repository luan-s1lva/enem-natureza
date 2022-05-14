<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Teacher;

class newProfessor extends Mailable
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
    // // // //  */
    public function build()
    {
        $this->subject(subject: 'Confirmação de Cadastro');
        $this->to($this->professor->email, $this->professor->name);
        return $this->view('mail.newProfessor', ['professor' => $this->professor]);
    }
}
