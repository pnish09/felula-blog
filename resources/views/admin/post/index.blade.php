@extends('layouts.master')
@section('content')
<div class="container-fluid px-4">   
                        <h1 class="mt-4">Post</h1>
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                            <a class="btn  btn-default" href="{{ url('admin/add-adminPost') }}"><i class="fas fa-plus"></i> Add Post</a>
                                
                            </div>
                            
                            
                            
                        </div>
                       
                        <div class="card mb-4">
                            
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                List
                            </div>
                            <div class="card-body">
                            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Slug</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($post as $record)
                                    <tr> 
                                            
                                            <td>{{$record->name}}</td>
                                            <td><img src="{{ asset('uploads/post/'.$record->image)}}" width="100"></td>
                                            <td>{{$record->category->name}}</td>
                                            <td>{{$record->slug}}</td>
                                            <td><a href="{{ url('admin/edit-adminPost/'.$record->id) }}"><i class="fas fa-pen"></i></a> &nbsp&nbsp  &nbsp&nbsp <a href="{{ url('admin/delete-adminPost/'.$record->id) }}"><i class="fas fa-trash"></i></a></td>
                                            
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection               