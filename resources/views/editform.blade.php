@extends('layouts.layout')
@section('title', 'Update Record')
@section('content')
    <div>
        @if(session()->has('status'))
            <div class="alert alert-success">
                    {{session('status')}}
            </div>
        @endif
    </div>
    <div>
       <form action="" method="POST">
            @csrf
            @method('PUT')
        <div class="row">
             <div class="col-sm-12">
    
                <div>
                    Name :
                    <input type="text" id="name" name="name" class="form-control" value="{{$addbook->name}}">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class= "col-sm-6">
                <div>
                    E-Mail
                    <input type="text" id="email" name="email" class="form-control" value="{{$addbook->email}}">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class= "col-sm-6">
                <div>
                    Mobile Number :
                    <input type="number" id="mobile" name="mobile" class="form-control" value="{{$addbook->mobile}}">
                    @error('mobile')
                        {{$message}}
                    @enderror
                </div>
            
            </div>   
        </div>
        <br>
        <div class="row">
             <div class="col-sm-12">
                <div>
                    Father's Name :
                    <input type="text" id="fname" name="fname" class="form-control" value="{{$addbook->fname}}">
                    @error('fname')
                        {{$message}}
                    @enderror
                    </div>

                </div>
        </div>   
        <br>
        <div class="row">
             <div class="col-sm-12">
    
                <div>
                    Address :
                    <input type="text" id="add" name="add" class="form-control" value="{{$addbook->add}}">
                    @error('add')
                        {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class= "col-sm-6">
                <div>
                    City :
                    <input type="text" id="city" name="city" class="form-control" value="{{$addbook->city}}">
                    @error('city')
                        {{$message}}
                    @enderror
                </div>
            </div>    
            <div class= "col-sm-6">
                <div>
                    State :
                    <input type="text" id="state" name="state" class="form-control" value="{{$addbook->state}}">
                    @error('state')
                        {{$message}}
                    @enderror
                </div>
            </div>    
        </div> 
        <br>   
        <div class="row">
            <div class= "col-sm-6">
                <div>
                    Country :
                    <input type="text" id="country" name="country" class="form-control" value="{{$addbook->country}}">
                    @error('country')
                        {{$message}}
                    @enderror
                </div>
            </div>    
            <div class= "col-sm-6">
                <div>
                    Pin Code :
                    <input type="number" id="pincode" name="pincode" class="form-control" value="{{$addbook->pincode}}">
                    @error('pincode')
                        {{$message}}
                    @enderror
                </div>

            </div>    
        </div>    
            <div class="text-center" >
                <button type="submit" class="btn btn-outline-primary mt-5 my-5 p-md-3" >Update Record</button>
                <button type="reset" class="btn btn-outline-info mt-5 my-5 my-5 p-md-3" >Reset</button>
            </div>    
        </form>
    </div>
@endsection