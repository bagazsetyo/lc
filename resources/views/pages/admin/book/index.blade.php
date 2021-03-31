@extends('layouts.admin')
@section('content')
    <section>
        <div class="card mt-5">
            <div class="container">
                <div class="table-responsive mt-5 mb-5">
                    <div class="text-right">
                        <a href="{{route('book.create')}}" class="btn btn-primary mb-3">create</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>name</td>
                                <td>qty</td>
                                <td>judul</td>
                                <td>desc</td>
                                <td>action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $d)
                            <tr>
                                <td>
                                    {{$d->id ?? 'tidak ada'}}
                                </td>
                                <td>
                                    {{$d->name ?? 'tidak ada'}}
                                </td>
                                <td>
                                    {{$d->qty ?? 'tidak ada'}}
                                </td>
                                <td>
                                    {{$d->judul ?? 'tidak ada'}}
                                </td>
                                <td>
                                    {{$d->desc ?? 'tidak ada'}}
                                </td>
                                <td>
                                    <a href="{{route('book.edit',$d->id)}}" class="btn btn-warning">
                                        edit
                                    </a>
                                    <form action="{{route('book.destroy',$d->id)}}" method="post" class="form-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">hapus</button>
                                    </form>
                                </td>
                            </tr>
                                @empty
                                <tr>
                                <td colspan="6">tidak ada data</td>
                                </tr>
                                @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection