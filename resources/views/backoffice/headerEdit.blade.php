@extends('adminlte::page')

@section('content')
  <header>
      <h1 class="editation text-center">Header</h1>
  </header>

  {{-- logo --}}
  <div class="container">
    <div class="form-register">
  <form name="" action="" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="form-group d-flex">
      <label class="mr-3 mt-2" for="">LOGO:</label> 
      <input class="form-control w-25 mr-3" required="required" type="file" name="img"></label>
      <input type="submit" value="Update" class="btn btn-primary mb-2">
      {{-- logo --}}


      {{-- phrase --}}
    </div> 
    <div class="form-group d-flex">
      <label class="mr-3 mt-2" for="">Phrase:</label>
      <input class="form-control w-25 mr-3" value="" name="" id="" >
      <input type="submit" value="Update" class="btn btn-primary mb-2">
    </div>
    {{-- phrase --}}
  </form>
  <form name="" action="" method="POST" enctype="multipart/form-data" >
      @csrf

    <div class="form-group d-flex">
      <label class="mr-3 mt-2" for=""> Images carousel:</label> 
      <input class="form-control w-25 mr-3" required="required" type="file" name="">
      <input type="submit" value="Add" class="btn btn-primary mb-2">
    </div><!-- close .form-group -->
  </form>
    </div>
  </div>
  <div class="container">
  <table class="table table-striped">
    <thead>
    <tr class="center">
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        {{-- @foreach ($ as $) --}}
        <tr>
        <td></td>
        <td class="w-50"><img class="w-50" src=""></td>
        <td class="w-25"><a href="" class="btn btn-primary">delete</a></td>
        </tr>
        {{-- @endforeach --}}

    </tbody>
  </table>
  </div>



@endsection
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">

@endsection