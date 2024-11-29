<x-layout>
    <div class="container-fluid my-5">
        <div class="row text-center justify-content-center">
            <div class="col-12 col-md-6">
                <h1>Login</h1>
            </div>
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
    <div class="container my-5 p-5 shadow">
        <div class="row text-center justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="passowrd" class="form-control" id="password">
                    </div>
                    <div class="mb-3 form-check">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>