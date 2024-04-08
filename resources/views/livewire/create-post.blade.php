<div>
    <h2>New Post:</h2>

    Current Title: <span x-text="$wire.title"></span>
<br/>
    <button x-on:click="$wire.title=''">clear title</button>

    <div x-data="{count: 0}">
        <span x-text="count"></span>

        <button x-on:click="count++">+</button>
        <button x-on:click="count--">-</button>
    </div>

    <form wire:submit="save">
        <label>
            <span>Title</span>
            <input type="text" wire:model="title">
            @error('title') <em> {{$message}}</em>@enderror
        </label>

        <label>
            <span>Content</span>
            <textarea wire:model="content"></textarea>
            <small>Characters:
                <span x-text="$wire.content.length"></span>
            </small>
            @error('content') <em> {{$message}}</em>@enderror
        </label>

        <button type="submit">Save</button>
    </form>
</div>
