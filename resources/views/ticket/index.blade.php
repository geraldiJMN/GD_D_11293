@extends('dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ticket</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('ticket')}}">Ticket</a>
                    </li>
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive p-0">
                            <table class="table table-hover text-no-wrap">
                                <thead>
                                    <tr>
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Class</th>
                                        <th class="text-center">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($ticket as $item)
                                    <tr>
                                        <td class="text-center">{{$item->movie->title}}</td>
                                        <td class="text-center">{{$item->class}}</td>
                                        <td class="text-center">{{$item->price}}</td>
                                    </tr>
                                    @empty
                                    <div class="alert alert-danger">
                                        Data Tiket belum tersedia
                                    </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $ticket->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
