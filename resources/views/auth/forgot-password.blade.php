@extends('../main_layout.layout')
@section('title', 'Login')
@section('content')

<main class="app__forms d-flex align-items-center">
    <div class="container">
        <div id="form" class="form-style mx-auto card shadow-sm rounded">
            <div class="form-title bg-light py-2">
                <h5 class="text-center m-0">Password recovery</h5>
            </div>
            <form action="{{route('forgot-password')}}" method="post" class="p-3">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    <p class="text-danger">Error message</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <button type="submit" class="btn btn-primary text-uppercase">send</button>
                    <a href="{{route('login')}}" class="new-account fs-7">Back</a>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
