@extends('admin/master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-9">Manage {{$title}} Students</div>
            <div class="col-3">
                <div class="btn-group">
                    <a href="{{route('admin.manage.student.active')}}" class="btn btn-info btn-sm">Active</a>
                    <a href="{{route('admin.manage.student.new')}}" class="btn btn-warning btn-sm">new</a>
                    <a href="{{route('admin.manage.student.passout')}}" class="btn btn-success btn-sm">passout</a>
                </div>
            </div>
        </div>
        <table class="table table-hovered table-bordered">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Father Name</th>
                <th>email</th>
                <th>create_at</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            @foreach ($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->contact}}</td>
                        <td>{{$student->father_name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{ date("D d-m-y",strtotime($student->email))}}</td>
                        <td>{{$student->address}},{{$student->city}},{{$student->state}}</td>
                        <td>
                            @if ($student->status != "2")
                                <a href="{{route("admin.passout.student",['id'=>$student->id]) }}" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></a>
                            @endif
                            <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pencil-fill"></i></a>
                            <a href="" class="btn btn-success btn-sm"><i class="bi bi-eye-fill"></i></a>
                            @if ($student->status == 0)
                            <a href="{{ route('admin.approve.student',['id'=>$student->id]) }}" class="btn btn-success btn-sm"><i class="bi bi-arrow-up-right-square-fill"></i></a>
                                
                                
                            @endif
                        </td>
                    </tr>
            @endforeach
        </table>
    </div>
@endsection