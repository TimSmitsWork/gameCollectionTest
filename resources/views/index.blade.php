<x-layout>
    <div class="row">
        <div class="col">
            <a href="{{ route('games.create') }}" class="btn btn-primary" role="option">Add game</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <ul>
                @forelse ($games as $game)
                    <li><a href="{{ route('games.show', ['game' => $game]) }}">{{ $game->name }}</a></li>
                @empty
                    <p>No games yet.</p>
                @endforelse
            </ul>
        </div>
    </div>
</x-layout>
