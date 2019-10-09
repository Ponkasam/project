@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4 class="mt-5">ข้อเสนอแนะทั้งหมด</h4>
        <form action="#">
            <table class="table table-bordered mt-2">
                <thead>
                    <tr>
                        <th scope="col">ข้อเสนอแนะ</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comment as $item)
                        <tr>
                            <td>{{ $item->suggestion }}</td>
                            <td>
                            <div class="btn-group" role="group">
                                <form action="{{ url('/all/'. $item->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger" type="submit">ลบ</button>
                                </form>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    </div>
@endsection