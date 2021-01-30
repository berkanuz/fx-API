@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h3>Hello {{ session('email') }} </h2>
                        {{ __('You are logged in!') }} 

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
                                <tbody>
                                  <tr>
                                    <td>John</td>
                                    <th scope="col">currencies()</th>
                                    <td>john@example.com</td>
                                  </tr>
                                  <tr>
                                    <td>Mary</td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                  </tr>
                                  <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
