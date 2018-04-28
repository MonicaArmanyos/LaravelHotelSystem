@extends('layouts.admin.master')

@section('content')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Profile <a href="{{route('users.show',['user'=>$user->id])}}"><button  type="button" class="btn btn-info"  style="position:absolute;right:1%;">Show Profile</button></a></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('updateProfile',['user'=>$user->id])}}"  enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{csrf_field()}}
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input class="form-control" id="exampleInputName"  type="text" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input class="form-control" id="exampleInputEmail1" type="email" name="email" value="{{$user->email}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputNationalID">Mobile</label>
                  <input class="form-control" id="exampleInputMobile" pattern="[0-9]*" type="text" name="mobile" value="{{$user->mobile}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputNationalID">National ID</label>
                  <input class="form-control" id="exampleInputNationalID" pattern="[0-9]*" type="text" name="national_id" value="{{$user->national_id}}">
                </div>
                <div class="form-group">
                <label>Profile Image</label>
                <br/>
                <img src="{{ asset($user->avatar_image) }}" width="100" heigth="100"/>
                <br/>
                  <label for="exampleInputFile"> Upload New Image Profile</label>
                  <input id="exampleInputFile" type="file" name="avatar_image" multiple>
                  <p class="help-block">Uploaded Image must be an image with extensions jpg,jpeg.</p>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>  

@endsection