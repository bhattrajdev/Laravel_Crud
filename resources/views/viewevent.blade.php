@extends('master.layout')
@section('main-section')
<div class="table-responsive">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Meta</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Video</th>
                <th scope="col">Intro_text</th>
                <th scope="col">Details</th>
                <th scope="col">Status</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $page = isset($_GET['page'])?$_GET['page']:1; 
            $key = 1+ ($page -1)*7;
              ?>
            @foreach ($addevent as $key => $event) 
            <tr class="">
                <td scope="row">{{++$key}}</td>
                <td>{{$event->title}}</td>
                <td>{{$event->slug}}</td>
                <td>{{$event->meta}}</td>
                <td><img style="width:100px; height:100px;" src="{{asset('/uploads/'.$event->image)}}" /></td>
                <td>{{$event->description}}</td>
                <td>{{$event->video}}</td>
                <td>{{$event->intro_text}}</td>
                <td>{{$event->details}}</td>
                <td>{{$event->status}}</td>
                <td>{{$event->date}}</td>
                <td>    
                <a href="{{url('viewevent/edit/id=')}}{{$event->id}}" class="btn btn-primary">Edit</a>
                    <a href="{{url('/viewevent/delete/id=')}}{{$event->id}}"  onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    {{$addevent->links()}}
</div>




@endsection