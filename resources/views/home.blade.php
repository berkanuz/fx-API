@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Hello <span style="color: #ff0000">{{ session('email') }}</span></h3> <p>You are logged in!</p></div>

                    <div class="card-body">

                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                       <div class="container">
                             <h4> Fx Rate</h4>
                            <p>You can see the table from below: </p>            
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>FROM</th>
                                    <th>TO</th>
                                    <th>VALUE</th>
                                </tr>
                                </thead>
                                <tbody id="table-body">
                                
                                </tbody> 
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
