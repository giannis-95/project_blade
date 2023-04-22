<x-app-layout>
    <form action="{{ route('average.update' , $price->id)}}" method="POST">
        @method('PUT')
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
                    <input type="number" class="form-control" name="firstValue" value="{{ $price->first_value}}" id="firstValue">
                </div>
                <div class="col-sm-6 form-group">
                    <label>@lang('table.secondValue')</label>
                    <input type="number" class="form-control" name="secondValue" value="{{ $price->second_value}}" id="secondValue">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-2 form-group">
                    <label for="formGroupExampleInput2">@lang('table.averageValue')</label>
                </div>

                <div class="col-sm-10 form-group">
                    <input type="text" class="form-control" id="averageValue" name="averageValue" value="{{ $price->average_value}}">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <button class="btn btn-primary" type="submit">@lang('buttons.amendment')</button>
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

