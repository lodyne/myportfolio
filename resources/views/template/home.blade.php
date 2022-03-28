@extends('template.layout.layout')
@section('content')
    <main id="main">

        <!-- ======= About Section ======= -->
            @include('template.partials.about')
        <!-- End About Section -->

        <!-- ======= Services Section ======= -->
            @include('template.partials.service')
        <!-- End Services Section -->

        <!-- ======= Projects Section ======= -->
            @include('template.partials.portfolio')
        <!-- End Projects Section -->

        <!-- ======= Testimonials Section ======= -->
            {{-- @include('template.partials.testimonials') --}}
        <!-- End Journal Section -->

        <!-- ======= Contact Section ======= -->
            @include('template.partials.contact')
        <!-- End Contact Section -->

    </main>
@endsection
