@extends('layouts.admin')
@section('content')
    <section>
        <div class="card mt-5">
            <div class="container">
                <div class="table-responsive mt-5 mb-5">
                    <form action="{{route('detailbook.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>name</label>
                            <select class="form-control" name="user_id">
                                @foreach($user as $u)
                                <option 
                                    value="{{$u->id}}"
                                    @if(old('user_id') == $u->id) selected @endif>
                                    {{$u->name}}        
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>book</label>
                            <select class="form-control" name="book_id">
                                @foreach($book as $b)
                                <option 
                                    value="{{$b->id}}"
                                    @if(old('book_id') == $b->id) selected @endif>
                                    {{$b->judul}}        
                                </option>
                                @endforeach
                            </select>
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