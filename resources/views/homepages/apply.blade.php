@extends('homepages/base')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center ">Apply here</h4>
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{old("name")}}" class="form-control">
                                @error('name')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                           <div class="row">
                            <div class="mb-3 col">
                                <label for="">Contact</label>
                                <input type="text" name="contact" value="{{old("contact")}}" class="form-control">
                                @error('contact')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col">
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{old("email")}}" class="form-control">
                                @error('email')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                           </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="">Father name</label>
                                    <input type="text" name="father_name" value="{{old("father_name")}}" class="form-control">
                                    @error('father_name')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for="">DOB</label>
                                    <input type="date" name="dob" value="{{old("dob")}}" class="form-control">
                                    @error('dob')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" value="{{old("address")}}" class="form-control">
                                @error('address')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                          <div class="row">
                            <div class="mb-3 col">
                                <label for="">City</label>
                                <input type="text" name="city" value="{{old("city")}}" class="form-control">
                                @error('city')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col">
                                <label for="">State</label>
                                <input type="text" name="state" value="{{old("state")}}" class="form-control">
                                @error('state')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                          </div>
                            <div class="mb-3">
                                <label for="">Education</label>
                                <input type="text" name="education" value="{{old("education")}}" class="form-control">
                                @error('education')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection