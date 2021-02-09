@extends('layouts.master')

@section('content')
    <div class="container my-3">
          <div class="row">
               <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <div class="card rounded-0">
                         <div class="card-header bg-primary rounded-0">
                              <h3 class="card-title text-center text-white mb-0">Edit Student</h3>
                         </div>
                         <form action="{{ url("update/$record->id") }}" method="POST">
                               <div class="card-body">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                         <label for="name">Name : </label>
                                         <input type="text" class="form-control rounded-0  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Student's Name" value="{{ $record->name }}">
                                         @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                         <label for="email">Email : </label>
                                         <input type="email" class="form-control rounded-0 @error('email') is-invalid @enderror" id="email" name="email" placeholder="Student's Email" value="{{ $record->email }}">
                                         @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                         <label for="phone">Phone : </label>
                                         <input type="text" class="form-control rounded-0 @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Student's Phone Number" value="{{ $record->phone }}">
                                         @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                         <label for="name">Address : </label>
                                         <textarea name="address" id="" cols="30" rows="5" class="form-control rounded-0 @error('address') is-invalid @enderror" placeholder="Student's Address">{{ $record->address }}</textarea>
                                         <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                                    </div>
                               </div>
                               <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-block rounded-0">Update</button>
                               </div>
                          </form>
                    </div>
               </div>
          </div>
    </div>
@endsection