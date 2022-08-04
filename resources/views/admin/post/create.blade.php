@extends('layouts.master')
@section('content')
<div class="container-fluid px-4">   
                        <h1 class="mt-4">Post</h1>
                        
                       
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Add Post
                            </div>
                            <div class="card-body">
                            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                @if($errors->any())
                                @foreach($errors->all() as $error)
                                <div>{{$error}}</div>
                                @endforeach
                                   
                                @endif
                                <form action="{{ url('admin/add-adminPost') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="name">Image</label>
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Description</label>
                                    
                                    <textarea class="form-control description" name="description" id="description" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="slug">Category</label>
                                    <select class="form-control" name="category_id" required>
                                    <option value=""> - Select - </option>
                                        @foreach($category as $record)
                                        <option value="{{$record->id}}">{{$record->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="slug">Slug</label>
                                    <input type="text" class="form-control" name="slug" required>
                                </div>
                                
                            <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection               
