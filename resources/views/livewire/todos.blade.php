<div class="m-5">
    <div>
        <form wire:submit="add">
            <input type="text" wire:model.change="todo" placeholder="Type to do list here...">
{{--            --}}
{{--            wire:model isn't live by design to save network requests--}}
{{--            wire:model.change and wire:model.blur are both first thing to try when you need more responsive--}}
{{--            they don't make a ton of network requests but allow it to be more 'live'--}}
{{--            if you need it to be totally live and don't care about how many network requests, wire:model.live is your friend--}}


            <button type="submit" class="rounded-xl bg-amber-800 w-20 text-amber-50 ">Add</button>
        </form>
    </div>
        <div class="mt-10 ml-5 bg-amber-100 p-12 w-80 rounded-xl">
            <ul >
                @foreach ($todos as $todo)
                    <li class="list-disc">{{$todo}}</li>
                @endforeach
            </ul>
        </div>
</div>
