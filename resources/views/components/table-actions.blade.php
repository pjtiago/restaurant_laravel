<td class="text-right">
    <div class="dropdown">
        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

            <form action="{{$destroyRoute}}" method="post">
                @csrf
                @method('delete')

                <a class="dropdown-item"
                   href="{{$editRoute}}">{{ __('Edit') }}</a>
                <button type="button" class="dropdown-item"
                        onclick="confirm('{{ __("Are you sure you want to delete this record?") }}') ? this.parentElement.submit() : ''">
                    {{ __('Delete') }}
                </button>
            </form>
        </div>
    </div>
</td>
