@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- table  --}}
                    <a href="" class="btn btn-primary " style="float: right" type="button">Add New Class</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Class Name</th>
                            <th  colspan="2" scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ( $class as $key=>$val)
                            <tr>
                                <th scope="row"> {{++$key}} </th>
                                <td colspan="2">{{$val->class_name}}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                    <a href="" class="btn btn-sm btn-info">Edit</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                      </table>
                      {{-- table --}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
