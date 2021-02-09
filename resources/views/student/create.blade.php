@extends('layouts.master')

@section('content')
    <div class="container my-3">
          <div class="row">
               <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <div class="card rounded-0">
                         <div class="card-header bg-primary rounded-0">
                              <h3 class="card-title text-center text-white mb-0">Add Student</h3>
                         </div>
                         <form action="{{ url('create') }}" method="POST">
                               <div class="card-body">
                                    @csrf
                                    <div class="form-group">
                                         <label for="name">Name : </label>
                                         <input type="text" class="form-control rounded-0  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Student's Name" value="{{ old('name') }}">
                                         @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                         <label for="email">Email : </label>
                                         <input type="email" class="form-control rounded-0 @error('email') is-invalid @enderror" id="email" name="email" placeholder="Student's Email" value="{{ old('email') }}">
                                         @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                         <label for="phone">Phone : </label>
                                         <input type="text" class="form-control rounded-0 @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Student's Phone Number" value="{{ old('phone') }}">
                                         @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                         <label for="address">Address : </label>
                                         <textarea name="address" id="address" cols="30" rows="5" class="form-control rounded-0 @error('address') is-invalid @enderror" placeholder="Student's Address">{{old('address')}}</textarea>
                                         <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                                    </div>
                               </div>
                               <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-block rounded-0">Add New</button>
                               </div>
                          </form>
                    </div>
               </div>
          </div>
    </div>
@endsection