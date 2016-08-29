@extends('base')

@section('css')
<style>
    .carousel {
        width: 100%;
        margin-top: 50px;
    }
</style>
@stop


@section('outsidecontainer')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/assets/slider/1.png" alt="...">
            <div class="carousel-caption">
                ...
            </div>
        </div>
        <div class="item">
            <img src="/assets/slider/2.png" alt="...">
            <div class="carousel-caption">
                ...
            </div>
        </div>
        ...
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@stop

@section('content')

<div class="row ">
    <div class="col-md-12 ">
        <div class="row ">
            <div class="col-md-4 well empty-well text-center ">
                <h3>About</h3>
                <span class="glyphicon glyphicon-question-sign bigger-icon " aria-hidden="true "></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-md-4 well empty-well text-center ">
                <h3>Test</h3>
                <span class="glyphicon glyphicon-earphone bigger-icon " aria-hidden="true "></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-md-4 well empty-well text-center ">
                <h3>Content</h3>
                <span class="glyphicon glyphicon-share-alt bigger-icon " aria-hidden="true "></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</div>

@stop
