<div class="btn-box d-flex justify-content-center p-3 gap-4">
    @if ($prevCharacter)
        <a class="btn btn-primary" href="{{ route('characters.show', $prevCharacter->id) }}">Cazzuto Precedente</a>
    @endif

    @if ($nextCharacter)
        <a class="btn btn-primary" href="{{ route('characters.show', $nextCharacter->id) }}">Cazzuto Successivo</a>
    @endif
</div>
