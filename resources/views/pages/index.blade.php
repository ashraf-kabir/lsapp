@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida massa nisi, a dignissim est tristique vel. Aliquam bibendum consectetur quam ac egestas. Quisque volutpat tellus quis aliquet consectetur. Etiam cursus mattis purus a iaculis. Aliquam eget porta nulla, eget consequat ex. Morbi quis odio dui. Phasellus sollicitudin gravida augue sed rhoncus. Praesent tempor posuere sem, in dignissim ante facilisis nec. Morbi et porta est, sit amet cursus lectus. Nunc nisi arcu, facilisis sit amet dui ac, semper laoreet quam.
        </p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
        <br><br>
        <hr>
        <blockquote>
            <p class="quotation"> 
                We shall not flag or fail. We shall go on to the end. We shall fight in France, we shall fight on the seas and oceans, we shall fight with growing confidence and growing strength in the air, we shall defend our island, whatever the cost may be, we shall fight on the beaches, we shall fight on the landing grounds, we shall fight in the fields and in the streets, we shall fight in the hills; we shall never surrender.
            </p>
            <footer id="quote">— Winston S. Churchill</footer>
        </blockquote>
        <hr>
    </div>
@endsection
