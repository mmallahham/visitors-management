

@extends('layouts.app')
@section('content')  

<h2 class="text-center">{{ $title }} Indoor Report</h2>
<div class="row py-3 m-5">
    <div class="col-md-9">   
        <input type="search" class="form-control " name="search" placeholder="Search">
    </div>
    <div class="col-md-2"> 
        <button class="btn btn-primary">submit</button>
    </div>   
</div>
    <div class="row m-5" >
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <thead class="bg-primary">
                    <tr>
                        <th width="27%"><a class="text-white" href="#">Name</a></th>
                        <th width="16%">Id</th>
                        <th width="25%">Email</th>
                        <th width="10%">Mobile</th>
                        <th width="7%">Image</th>
                        <th width="6%">Type</th>
                        <th width="5%"></th>
                        <th width="5%"></th>
                        <th width="5%"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($visitors as $visitor)
                    <tr>
                        <td>{{ $visitor['name'] }}</td>
                        <td>{{ $visitor['idNumber'] }}</td>
                        <td>{{ $visitor['email'] }}</td>
                        <td>{{ $visitor['mobile'] }}</td>
                        <td><img src="{{ $visitor['vimage'] }}" style="height:50px;padding:0;margin:0"></td>
                        @if ($visitor['type'] == 0)
                            <td><div class="btn btn-info" onclick="">check out</div></td>            
                        @else
                            <td ><div class="btn btn-success">check out</td>            
                        @endif
                        <td><div class="btn btn-primary">log</div></td>            
                        <td><div class="btn btn-primary">delete</div></td>            
                        <td><div class="btn btn-primary">padge</div></td>            
                    </tr>
                @endforeach    
                </tbody>
            </table>
        </div>
    </div>

    
@endsection