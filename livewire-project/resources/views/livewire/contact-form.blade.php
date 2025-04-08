<div>
    <form wire:submit.prevent="submit">
        <label for="name">Nama:</label>
        <input type="text" id="name" wire:model="name">

        <label for="email">Email:</label>
        <input type="email" id="email" wire:model="email">

        <label for="message">Pesan:</label>
        <textarea id="message" wire:model="message"></textarea>

        <button type="submit">Kirim</button>
    </form>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
    @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
    @error('message') <div class="alert alert-danger">{{ $message }}</div> @enderror
</div>
