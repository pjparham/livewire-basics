<div>
    <div>
        <form wire:submit="add">
            <input type="text" wire:model.change="todo">
{{--            --}}
{{--            wire:model isn't live by design to save network requests--}}
{{--            wire:model.change and wire:model.blur are both first thing to try when you need more responsive--}}
{{--            they don't make a ton of network requests but allow it to be more 'live'--}}
{{--            if you need it to be totally live and don't care about how many network requests, wire:model.live is your friend--}}

            <span>Current todo: {{ $todo }}</span>

            <button type="submit">Add</button>
        </form>
    </div>

    <ul>
        @foreach ($todos as $todo)
            <li>{{$todo}}</li>
        @endforeach
    </ul>
</div>
