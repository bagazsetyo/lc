@extends('layouts.admin')
@section('content')
    <section>
        <div class="card mt-5">
            <div class="container">
                <div class="table-responsive mt-5 mb-5">
                    <form action="{{route('user.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>name</label>
                            <input type="text" 
                                    name="name" 
                                    value="{{old('name')}}" 
                                    class="form-control @error('name') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" 
                                    name="email" 
                                    value="{{old('email')}}" 
                                    class="form-control @error('email') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" 
                                    name="password" 
                                    value="{{old('password')}}" 
                                    class="form-control @error('password') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection