@extends('layouts.admin')
@section('content')
    <section>
        <div class="card mt-5">
            <div class="container">
                <div class="table-responsive mt-5 mb-5">
                    <form action="{{route('book.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>name</label>
                            <input type="text" 
                                    name="name" 
                                    value="{{old('name')}}" 
                                    class="form-control @error('name') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>qty</label>
                            <input type="text" 
                                    name="qty" 
                                    value="{{old('qty')}}" 
                                    class="form-control @error('qty') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>desc</label>
                            <input type="text" 
                                    name="desc" 
                                    value="{{old('desc')}}" 
                                    class="form-control @error('desc') is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" 
                                    name="judul" 
                                    value="{{old('judul')}}" 
                                    class="form-control @error('judul') is-invalid @enderror">
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