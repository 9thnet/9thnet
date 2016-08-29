@extends('layout')

@section('css')
    <link href="/css/front/index.css" rel="stylesheet">
@endsection

@section('content')
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item">
                    <img src="/images/1.jpg" alt="#">
                    <div class="carousel-caption">
                        <h1>Example headline.</h1>
                        <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous"
                            Glyphicon buttons on the left and right might not load/display properly due to web browser
                            security rules.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
                <div class="item active">
                    <img src="/images/2.jpg" alt="#">
                    <div class="carousel-caption">
                        西建
                    </div>
                </div>
                <div class="item">
                    <img src="/images/3.jpg" alt="#">
                    <div class="carousel-caption">
                        草堂
                    </div>
                </div>
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

        <div class="container">
            <div class="starter-template">
                <h1>启明于今天</h1>
                <p class="lead"><span class="glyphicon glyphicon-star">相信这是一个新的开始，而且明天会更好.</span><br>
                    请让我们的想法付诸于行动，一切都会变得越来越好.</p>
            </div>
        </div>
@endsection