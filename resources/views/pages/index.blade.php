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
        <br>
        <hr>
        <blockquote>
            <p class="quotation">
                When you want something, all the universe conspires in helping you to achieve it.
            </p>
            <footer id="quote">— Paulo Coelho (The Alchemist)</footer>
        </blockquote>
        <hr>
        <br>
        <hr>
        <blockquote>
            <p class="quotation">
                Lost opportunities, lost possibilities, feelings we can never get back. That's part of what it means to be alive. But inside our heads - at least that's where I imagine it - there's a little room where we store those memories. A room like the stacks in this library. And to understand the workings of our own heart we have to keep on making new reference cards. We have to dust things off every once in awhile, let in fresh air, change the water in the flower vases. In other words, you'll live forever in your own private library.
            </p>
            <footer id="quote">— Haruki Murakami (Kafka on the Shore)</footer>
        </blockquote>
    </div>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection