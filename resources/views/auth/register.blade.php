@extends('../main_layout.layout')
@section('title', 'Registration')
@section('content')
<main class="app__forms d-flex align-items-center">
    <div class="container">
        <div id="form" class="form-style mx-auto card shadow-sm rounded">
            <div class="form-title bg-light py-2">
                <h5 class="text-center m-0">Sign Up Form</h5>
            </div>
            <form action="{{route('store')}}" method="post" class="p-3">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                    <p class="text-danger">Error message</p>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" autocomplete="off">
                    <p class="text-danger">Error message</p>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="new-password">
                    <p class="text-danger">Error message</p>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Password Confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password Confirmation" autocomplete="new-password">
                    <p class="text-danger">Error message</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <button type="submit" class="btn btn-primary text-uppercase">Signup</button>
                    <a href="{{route('login')}}" class="new-account fs-7">Have your already an account?</a>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
