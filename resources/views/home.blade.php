@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body bg-dark shadow-none text-white">
                    <div class="display-4 text-monospace">Total Donations: ${{$totalDonations}}</div>
                </div>
              </div>
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                <form action="{{route('donate')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" name='name' placeholder="name here">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Phone Number</label>
                            <input type="text" value="{{old('phone')}}" class="form-control @error('phone') is-invalid @enderror" id="exampleFormControlInput2" name='phone' placeholder="amount">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput3">To</label>
                            <input type="text" value="{{old('receiver')}}" class="form-control @error('receiver') is-invalid @enderror" id="exampleFormControlInput3" name='receiver' placeholder="To">
                            @error('receiver')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput4">Amount</label>
                            <input type="text" value="{{old('amount')}}" class="form-control @error('amount') is-invalid @enderror" id="exampleFormControlInput4" name='amount' placeholder="Amount">
                            @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-dark align-self-center" type='submit'>submit</button>
                        </div>
                        
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
