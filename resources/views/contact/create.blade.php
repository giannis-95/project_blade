<x-app-layout>
    <div class="container">
        <div class="row mt-2">
            <div class="col" style="text-align: right;">
                <a class="btn btn-primary" href="{{ route('dashboard') }}">@lang('buttons.back')</a>
            </div>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <form action="{{ route('contact.contact_insert') }}" method="POST">
            @method('POST')
            @csrf
           <div class="form-group">
                <label for="Name">Firstname: </label>
                <input type="text" class="form-control" placeholder="Name" name="firstname" value="{{ old('firstname') }}" required>
           </div>
           <div class="form-group">
                <label for="Name">Lastname: </label>
                <input type="text" class="form-control" placeholder="Name" name="lastname" value="{{ old('lastname') }}" required>
           </div>
           <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
           </div>
           <div class="form-group">
                <label for="phone">Phone: </label>
                <input type="text" class="form-control" placeholder="phone" name="phone" value="{{ old('phone') }}" required>
            </div>
           <div class="form-group">
                <button type="submit" class="btn btn-primary">Send</button>
           </div>
         </form>

    </div>
</x-app-layout>
