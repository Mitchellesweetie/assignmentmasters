@extends('main')
@section('content')
<section class="py-5">
    <div class="container px-5">
        <div class="row g-4 align-items-start">
            <div class="col-lg-4">
                <div class="card section-card p-4">
                    <img class="profile-image mb-3" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=900&q=80" alt="Profile portrait">
                    <h4 class="fw-bold mb-1">Mitchelle</h4>
                    <p class="text-muted mb-3">Laravel Developer</p>
                    <div class="d-grid gap-2">
                        <a href="{{ route('contact') }}" class="btn btn-primary">Contact Me</a>
                        <a href="{{ route('about') }}" class="btn btn-outline-dark">Read About</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card section-card p-4 p-lg-5 mb-4">
                    <h2 class="fw-bold mb-3">Professional Profile</h2>
                    <p class="text-muted mb-0">
                        I build modern web applications with Laravel and Bootstrap, combining clean backend structure with practical frontend design. My projects focus on usability, performance, and maintainability.
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card stats-card p-4 h-100">
                            <h3 class="fw-bold mb-1">15+</h3>
                            <p class="mb-0">Completed web design and development projects</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card stats-card p-4 h-100">
                            <h3 class="fw-bold mb-1">4+</h3>
                            <p class="mb-0">Years of hands-on coding and UI implementation</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card section-card p-4 h-100">
                            <h5 class="fw-semibold">Core Skills</h5>
                            <p class="text-muted mb-0">Laravel, PHP, Bootstrap, JavaScript, MySQL, and responsive design workflows.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card section-card p-4 h-100">
                            <h5 class="fw-semibold">Work Approach</h5>
                            <p class="text-muted mb-0">Plan clearly, build iteratively, and keep communication simple during delivery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
