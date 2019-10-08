@extends('layouts.student')

@section('content')
    <div class="container">
      
        <h4 class="mt-2">ข้อมูลรายวิชา</h4>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    
                    <th>รหัสวิชา</th>
                    <th>ชื่อวิชา</th>
                    <th>ห้องเรียน</th>
                    <th>อาจารย์ผู้สอน</th>
                    <th>เทอม</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($reserves as $reserves)
                    <tr>
                        
                        <td>{{ $reserves->subject_id }}</td>
                        <td>{{ $reserves->subject_name }}</td>
                        <td>{{ $reserves->teacher }}</td>
                        <td>{{ $reserves->term }}</td>
                        
                    </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
@endsection