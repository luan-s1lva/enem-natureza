<?php

namespace App\Mail;

use App\Models\Student;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class newEstudante extends Mailable
{
    use Queueable, SerializesModels;

    private $estudante;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Student $estudante)
    {
        $this->estudante = $estudante;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Confirmação do Cadastro');
        $this->to($this->estudante->email, $this->estudante->name);
        return $this->view('mail.newEstudante',['estudante'=>$this->estudante]);
    }
}
