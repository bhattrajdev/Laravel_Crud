@extends('master.layout')
@section('main-section')

<h1 class="text-center text-info hr">Edit Event</h1>

<form action="" method="post" enctype="multipart/form-data">
    @csrf
 
        

{{-- for title --}}
<div class="d-flex flex-row">
<div class="col-md-7 mb-2 p-2">
    <label for="title" class="form-label">Title:-
        <a style="color: red;text-decoration: none;">
            {{$errors->first('title')}}
        </a>
</label>
        <input type="text" class="form-control"  id="title" value="{{$addevent->title}}" name="title">
    </div>

    {{-- for date --}}
    <div class="col-md-5 mb-2 p-2">
        <label for="date" class="form-label">Date:-
            <a style="color: red;text-decoration: none;">
                {{$errors->first('date')}}
            </a></label>
            <input type="text"  class="form-control"  id="date" value="{{$addevent->date}}" name="date">
        </div>
</div>

{{-- for slug --}}
<div class="d-flex flex-row">
<div class="col-md-7 mb-2  p-2">
    <label for="slug" class="form-label">Slug:-
        <a style="color: red;text-decoration: none;">
        {{$errors->first('slug')}}
    </a></label>
        <input type="text" class="form-control" id="slug" value="{{$addevent->slug}}" name="slug">
    </div>

    {{-- for status --}}
    <div class="col-md-5 mb-2 p-2">
        <label for="status"  class="form-label">Status:-
            <a style="color: red;text-decoration: none;">
                {{$errors->first('status')}}
            </a>
        </label>
            <select class="form-select" id="status" name="status">
                <option value="public" id="status" name="status" {{$addevent->status=='public'?'selected':''}}>Public</option>
                <option value="private" id="status" name="status"  {{$addevent->status=='private'?'selected':''}}>Private</option>
            </select>
        </div>
</div>
{{-- for meta title --}}
<div class="d-flex flex-row">
<div class="col-md-7 mb-2 p-2">
    <label for="meta" class="form-label">Meta:-
        <a style="color: red;text-decoration: none;">
            {{$errors->first('meta')}}
        </a>
    </label>
        <input type="text" style="height: 15vh;" class="form-control" id="meta" value="{{$addevent->meta}}" name="meta">
    </div>
    {{-- showing image --}}
    <div class="col-md-5 mb-2 p-2 ">

        <img style="width:150px; height:150px; " src="{{asset('uploads/'.$addevent->image)}}" alt="Image not found" />
        

      
   </div>
  
    
</div>
 {{-- for meta description --}}
 <div class="d-flex flex-row">
<div class="col-md-7 mb-2 p-2">
        <label for="description" class="form-label">Description:-
            <a style="color: red;text-decoration: none;">
                {{$errors->first('description')}}
            </a>
        </label>
            <input type="text"  class="form-control" style="height: 15vh;" id="description" value="{{$addevent->description}}" name="description">
        </div>
        {{-- for video --}}
        <div class="col-md-5 mb-2 p-2">
            <a style="color: red;text-decoration: none;">
                {{$errors->first('image')}}
            </a>
            <input type="file" class="form-control mt-4" id="image" name="image"/>
            <label for="video" class="form-label mt-2">Video:-
                <a style="color: red;text-decoration: none;">
                    {{$errors->first('video')}}
                </a>
            </label>
            <input type="text" class="form-control" id="video" value="{{$addevent->video}}" name="video">
        </div>
 </div>
 
    

        {{-- Intro Text --}}
<div class="col-md-12">
    <div class="col-md-12 p-2">
        <label for="intro_text">Intro Text:-
            <a style="color: red;text-decoration: none;">
                {{$errors->first('intro_text')}}
            </a>
        </label>
        <textarea id="intro_text" class="form-control" name="intro_text" rows="4" cols="50">{{$addevent->intro_text}}</textarea>
    </div>
</div>

{{-- Details --}}

<div class="col-md-12">
    <div class="col-md-12 p-2">
        <label for="details">Details:-
            <a style="color: red;text-decoration: none;">
                {{$errors->first('details')}}
            </a>
        </label>
        <textarea id="details" class="form-control" name="details"  rows="4" cols="50">{{$addevent->details}}</textarea>
    </div>
</div>

{{-- submit button --}}

<div class="col-md-12 p-2">
    <button class="btn btn-success">Update</button>
</div>

</form>
{{-- @endforeach --}}
@endsection