@extends('homepages/base')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" class="d-flex">
                        @csrf
                        <input type="text" class="form-control" name="contact" placeholder="enter your contact number">
                        <input type="submit" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if ($payment)
     <div class="row">
           <div class="col-lg-12">
               <table class="table">
                   <tr>
                       <th>id</th>
                       <th>Name</th>
                       <th>Month</th>
                       <th>Amount</th>
                       <th>Status</th>
                   </tr>
                   @foreach ($payment as $pay)
                       <tr>
                           <td>{{$pay->id}}</td>
                           <td>{{$pay->student->name}}</td>
                           <td>{{$pay->due_date}}</td>
                           <td>{{$pay->amount}}</td>
                           <td>
                                @if ($pay->status == "paid")
                                    <a href="" class="btn btn-success disabled">Paid</a>
                                @else
                                    <form action="{{ route('makePayment')}} " method="post" class="btn btn-success">x
                                        @csrf 
                                        <input type="hidden" value="{{$pay->id}}" name="pay_id">
                                        <input type="hidden" value="{{$pay->student->contact}}" name="contact">
                                        <input type="submit" class="btn btn-success" value="Pay">
                                    </form>
                                    
                                @endif
                                    

                           </td>
                       </tr>
                   @endforeach
               </table>
           </div>
       </div>
</div>
@endif
</div>
@endsection