@extends("layout")

@section("content")
    @include("partials.header")
    @include("partials.welcome",["name"=>"Raji"])
    @include("partials.form")
    @include("partials.footer")
@endsection


    
  
   