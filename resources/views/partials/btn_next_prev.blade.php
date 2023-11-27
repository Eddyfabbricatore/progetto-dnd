<div class="btn-box d-flex p-3 gap-4 justify-content-center">
    @if ($prevCharacter)
        <a href="{{ route('characters.show', $prevCharacter->id) }}" class="btn btn-primary">Cazzuto Precedente</a>
    @endif

    @if ($nextCharacter)
        <a href="{{ route('characters.show', $nextCharacter->id) }}" class="btn btn-primary">Cazzuto Successivo</a>
    @endif
</div>
