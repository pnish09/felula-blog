@extends('layouts.master')
@section('content')
<div class="container-fluid px-4">   
                        <h1 class="mt-4">User</h1>
                        
                        
                       
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
                                            <th>Email</th>
                                            <th>Role</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($user as $record)<tr> 
                                            
                                            <td>{{$record->name}}</td>
                                            <td>{{$record->email}}</td>
                                            <td>{{$record->role}}</td>
                                           
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection               