<div>
    <form wire:submit.prevent="submitFeedback">
        <label for="name">Nama:</label>
        <input type="text" id="name" wire:model="name">

        <label for="email">Email:</label>
        <input type="email" id="email" wire:model="email">

        <label for="feedback">Feedback:</label>
        <textarea id="feedback" wire:model="feedback"></textarea>

        <button type="submit">Kirim Feedback</button>
    </form>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
    @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
    @error('feedback') <div class="alert alert-danger">{{ $message }}</div> @enderror
</div>
