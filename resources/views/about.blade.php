@extends('layout')
@section('content')
    <section class="py-5">
        <div class="container px-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <span class="badge text-bg-dark mb-3">About Me</span>
                    <h1 class="fw-bold mb-3">I create practical websites with clean design and fast performance.</h1>
                    <p class="lead text-muted mb-4">
                        My focus is helping businesses and individuals launch professional web experiences that feel modern,
                        responsive, and easy to use.
                    </p>
                    <a class="btn btn-primary btn-lg" href="{{ route('contact') }}">Work With Me</a>
                </div>
                <div class="col-lg-6">
                    <img class="about-image"
                        src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=1000&q=80"
                        alt="Team planning and collaborating">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container px-5">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card section-card h-100 p-4">
                        <h5 class="fw-semibold">Design Mindset</h5>
                        <p class="text-muted mb-0">Every project starts with clarity in structure, spacing, and user flow.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card section-card h-100 p-4">
                        <h5 class="fw-semibold">Code Quality</h5>
                        <p class="text-muted mb-0">I prioritize maintainable code that is easy to extend over time.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card section-card h-100 p-4">
                        <h5 class="fw-semibold">Delivery Focus</h5>
                        <p class="text-muted mb-0">The goal is always real-world results, not just visual polish.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
