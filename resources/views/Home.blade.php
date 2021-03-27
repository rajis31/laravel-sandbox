@extends("layout")


@section("main")
    <p>This is the main section</p>
    <a href="{{ route('logout') }}">Logout</a>
@show

@section("content")
    @include("partials.header")
    @include("partials.welcome",["name"=>"Raji"])
    @include("partials.form")
    @include("partials.footer")
@endsection






    
  
   