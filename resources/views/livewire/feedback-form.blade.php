<div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submitFeedback">
        <label for="feedback">Deixe seu feedback:</label>
        <textarea wire:model="feedback" id="feedback" rows="4"></textarea>

        <button type="submit">Enviar Feedback</button>
    </form>
</div>
