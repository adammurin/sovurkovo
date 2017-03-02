@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
        @yield('aimeos_head')
        @yield('aimeos_body')
        @yield('aimeos_nav')
        @yield('aimeos_stage')
    </div>
</div>
<div class="container">
    <div class="row">
        @section('aimeos_head')
            <?= $aibody['basket/mini'] ?>
        @stop
         
        @section('aimeos_aside')
             <?= $aibody['catalog/detail'] ?>
        @stop
    </div>
</div>
@endsection
