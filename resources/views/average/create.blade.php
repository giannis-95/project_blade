<x-app-layout>
    @error('errorAverage')
    <div class="col">
        <div class="alert alert-danger">
            {{$message}}
        </div>
    </div>
    @enderror

    <form action="{{ route('average.insert') }}" method="POST">
        @method('POST')
        @csrf
        <div class="container">
            <div class="row mt-2">
                <div class="col" style="text-align: right;">
                    <a class="btn btn-primary" href="{{ route('dashboard') }}">@lang('buttons.back')</a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-6 form-group">
                    <label>@lang('table.firstValue')</label>
                    <input type="number" class="form-control" name="firstValue" id="firstValue">
                </div>
                <div class="col-sm-6 form-group">
                    <label>@lang('table.secondValue')</label>
                    <input type="number" class="form-control" name="secondValue" id="secondValue">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-2 form-group">
                    <label for="formGroupExampleInput2">@lang('table.averageValue')</label>
                </div>

                <div class="col-sm-5 form-group">
                    <input class="form-control" id="averageValue" disabled>
                </div>

                <div class="col-sm-5 form-group">
                    <input type="number" class="form-control" name="averageValue" step="0.5">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <button class="btn btn-primary" type="submit">@lang('buttons.create')</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        $(document).ready(function(){
            $(document).on('input', '[name="firstValue"] , [name="secondValue"]' , function(){
                let firstValue = $('[name="firstValue"]').val()
                let secondValue = $('[name="secondValue"]').val()
                let average_value = (parseInt(firstValue) + parseInt(secondValue))/2
                $('#averageValue').val(average_value)
            });
        });
    </script>

</x-app-layout>

