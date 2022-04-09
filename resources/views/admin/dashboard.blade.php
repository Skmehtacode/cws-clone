@extends('admin/master')

@section('content')
    <div class="row">
        <div class="col-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h2 class="display-4">{{ $countStudent }}</h2>
                    <h6>Total Student</h6>
                </div>
            </div>    
        </div>
        <div class="col-4">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h2 class="display-4">50+</h2>
                    <h6>Total Due</h6>
                </div>
            </div>    
        </div>
        <div class="col-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h2 class="display-4">50+</h2>
                    <h6>Total Courses</h6>
                </div>
            </div>    
        </div>    
    </div> 
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Due date</th>
                    <th>Status</th>
                </tr>

                @foreach ($due_payment as  $due)
                    <tr>
                        <td>{{ $due->id}}</td>
                        <td>{{ $due->student_id}}</td>
                        <td>{{ $due->amount}}</td>
                        <td>{{ $due->due_date}}</td>
                        <td>{{ $due->status}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection