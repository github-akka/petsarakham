@extends('profiles.base')
@section('content')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">       
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{ asset('/images/public/users-avatar')}}/{{Auth::user()->avatar}}">
           
                <span class="font-weight-bold"></span><span class="text-black-50">{{Auth::user()->email}}</span><span> </span></div>
            
        </div>
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="text-center">Profile Settings </h2>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Name :</label><input type="text" id="name" name="name" class="form-control"  value="{{Auth::user()->name}}"></div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Address :</label><input  class="form-control" value="{{Auth::user()->address}}"></div>
                    <div class="col-md-12"><label class="labels">Phone :</label><input type="number" class="form-control" value="{{Auth::user()->phone}}"></div>
                    <div class="col-md-12"><label class="labels">FB :</label><input type="text" class="form-control"  value="{{Auth::user()->facebook}}"></div>
                    <div class="col-md-12"><label class="labels">IG :</label><input type="text" class="form-control"  value="{{Auth::user()->ig}}"></div>
                    
                </div>
                <br><br>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        
    </div>
</div>
@endsection