<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FeedbackForm extends Component
{
    public $feedback;

    public function render()
    {
        return view('livewire.feedback-form');
    }

    public function submitFeedback()
    {
        // Lógica para salvar o feedback no banco de dados ou enviar por e-mail
        // Exemplo: Feedback::create(['comment' => $this->feedback]);

        // Limpar o campo de feedback após o envio
        $this->feedback = '';

        // Exibir uma mensagem de sucesso
        session()->flash('success', 'Feedback enviado com sucesso!');
    }
}
