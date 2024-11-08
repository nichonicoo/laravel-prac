@extends('layout')
@section('content')

<div class="row">
    <div class="col">
        <div class="btn-group" role="group" aria-label="Basic example">

            <a href="{{ route('book.index')}}"  class="btn btn-dark">All</a>
            @foreach ($genres as $genres)
            <a href="{{ route('book.index', ['genre_id'=>$genres->id]) }}"  class="btn btn-dark">{{$genres->name}}</a>

            @endforeach

          </div>
    </div>
</div>


<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th>Cover</th>
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as  $book)
                    <tr>
                        <td>
                            <img src="{{ asset($book->photo) }}" alt="" width="80px">
                        </td>
                        <td>
                            {{$book->name}}
                        </td>
                        <td>
                            {{$book->genre->name}}
                        </td>
                        <td >
                            <a href="{{ route('book.detail', ['book'=>$book->id]) }} " class="btn btn-primary" >Details</a>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
        {{$books->links()}}
    </div>
</div>


@endsection
