<div class="row justify-content-center">
    <form method="POST" action="{{ route('admin.'.$type.'.destroy', $model) }}">
        @csrf
        @method('DELETE')
        <button type="submit" title="{{ __('Удалить') }}" class="btn n btn-danger"><i class="fas fa-trash-alt"></i>
        </button>
    </form>
    <a class="btn btn-primary ml-1" href="{{ route('admin.'.$type.'.edit', $model) }}"><i class="fas fa-pen"></i></a>

</div>