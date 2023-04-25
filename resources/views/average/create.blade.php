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
                <table class="table table-hover" id="createRowsTable">
                    <thead>
                        <tr>
                            <th scope="col">@lang('form.numberOfColumns')</th>
                            <th>
                                <button type="button" class="btn btn-primary" id="createRow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg></button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
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

            $(document).on('click' , '#createRow' , function(){
                let createRow = $(document).find('#createRowsTable tbody').append(`
                    <tr>
                        <td><input type="number" class="form-control" name="prices[]"></td>
                        <td>
                            <button type="buttom" class="btn btn-danger" id="removeRows"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                            </svg></button>
                        </td>
                    </tr>
                `);
            })

            $("#createRowsTable").on('click' , '#removeRows', function(){
                $(this).closest("tr").remove()
            })
        });
    </script>

</x-app-layout>

