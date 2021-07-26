@extends('layouts.layout')
@section('title', 'delete Contacts')
@section('content')
    <div>
        @section('records')
                <div>
                    @if(session()->has('status'))
                        <div class="alert alert-success">
                        {{session('status')}}     
                        </div>
                    @endif
                </div>
            <div class="row">
                @foreach ($addbook as $item)
                       <div class="col-sm-6">  
                            <br>
                            <a href="{{ url('/delete', $item->id)}}"><b> {{$item->name}} s/o {{$item->fname}} </b> </a><br>
                            {{$item->add}},<br>
                            {{$item->city}}, {{$item->state}},<br>
                            {{$item->country}}-({{$item->pincode}}),<br>   
                            E-Mail: {{$item->email}},<br>  
                            Mobile: {{$item->mobile}}<br>
                        </div>
                @endforeach
               <div class="text-center">         
                    {{$addbook->links()}}
                </div>
            </div>
        @endsection
    </div>
@endsection