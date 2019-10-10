@extends('layouts.teacher')

@section('content')
    <div class="container">
      @foreach($reserved as $row)
    <h4 class="mt-2">ข้อมูลรายวิชา {{ $row->subject_name}}</h4>
   
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>รหัสวิชา</th>
                    <th>ชื่อวิชา</th>
                    <th>ห้องเรียน</th>
                    <th>อาจารย์ผู้สอน</th>
                    <th>สถานะ</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subject as $item)
                    <tr>
                    <td>{{ $item->stud_id }}</td>
                    <td>{{ $item->subject_id }}</td>
                    <td>{{ $row->class_room }}</td>
                    <td>{{ $row->teacher }}</td>
                    
                    <td>{{ $item->status_re }}</td>
                    <td>
                        @if( $item->status_re == 'ยังไม่อนุมัติ')
                        <form action="{{ url('/teacher/' . $item->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <input type="hidden" class="form-control" id="status_re" name="status_re" value="อนุมัติแล้ว">
                            <button class="btn btn-success mt-2" type="submit">อัพเดทข้อมูล</button>
                        </form>
                        
                        @endif
                    </td>
                    </tr>
                @endforeach
               
            </tbody>
        </table>
        @endforeach
    </div>
@endsection