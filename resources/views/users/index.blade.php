<x-app-layout>
    <div class="container">
        <div class="row mt-2">
            <div class="col" style="text-align: right;">
                <a class="btn btn-primary" href="{{ route('dashboard') }}">@lang('buttons.back')</a>
            </div>
        </div>
        <div class="row mt-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">@lang('table.#')</th>
                        <th scope="col">@lang('table.name')</th>
                        <th scope="col">@lang('table.email')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>
