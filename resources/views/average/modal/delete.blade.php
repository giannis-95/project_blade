<form action="{{ route('average.delete', $price->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <div class="modal fade" id="exampleModal{{ $price->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('form.Verification')</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">@lang('form.deletePrices')</div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">@lang('buttons.Confirmation')</button>
                <a type="button" class="btn btn-primary">@lang('buttons.cancel')</a>
            </div>
            </div>
        </div>
    </div>
</form>
