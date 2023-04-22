<x-app-layout>
    <div class="container">
        <div class="row mt-4">
            @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">{{ session('success') }}</div>
            @endif

            <div class="row">
                <div class="col-sm-6">
                    <a class="btn btn-primary" href="{{ route('average.create') }}">@lang('buttons.createPrices')</a>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary" href="{{ route('users.index') }}">@lang('buttons.users')</a>
                </div>
            </div>

            <p id="demo"></p>

            <div class="row mt-4">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">@lang('table.firstValue')</th>
                        <th scope="col">@lang('table.secondValue')</th>
                        <th scope="col">@lang('table.averageValue')</th>
                        <th scope="col">@lang('table.created_at')</th>
                        <th scope="col">@lang('table.amendment')</th>
                        <th scope="col">@lang('table.delete')</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($prices as $price)
                        <tr>
                            <td>{{ $price->first_value }}</td>
                            <td>{{ $price->second_value }}</td>
                            <td>{{ $price->average_value }}</td>
                            <td>{{ $price->created_at }}</td>
                            <td>
                                <a href="{{ route('average.edit' ,$price->id)}}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                </svg></a>
                            </td>
                            <td>
                                <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $price->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg></a>
                            </td>
                            @include('average.modal.delete')
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $prices->links() }}
            </div>
        </div>
  </div>
  <script>
        let hello = function() {
            return "Hello World!";
        }

        document.getElementById("demo").innerHTML = hello();
    </script>

</x-app-layout>
