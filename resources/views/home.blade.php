@extends('layouts.layout')
@section('title', 'Home')
@section('content')
    <div>
        @section('records')
            <div class="row">
                @foreach ($addbook as $item)
                                        
                    @for ($i = 0; $i <=0; $i++)
                        <div class="col-sm-6">  
                            <br>

                            <b>{{$item->name}}</b> s/o {{$item->fname}}<br>
                            {{$item->add}},<br>
                            {{$item->city}}, {{$item->state}},<br>
                            {{$item->country}}-({{$item->pincode}}),<br>   
                            E-Mail: {{$item->email}},<br>  
                            Mobile: {{$item->mobile}}<br>
                        </div>    
                    @endfor
                @endforeach
               <div class="text-center">         
                    {{$addbook->links()}}
                </div>
            </div>
        @endsection
    </div>
@endsection