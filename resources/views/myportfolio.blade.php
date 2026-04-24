@extends('main')
@section('content')
<header class="hero-section py-5">
    <div class="container px-5 py-5">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge rounded-pill text-bg-light border mb-3">Web Developer Portfolio</span>
                <h1 class="display-5 fw-bold mb-3">Building clean, responsive, and user-focused web experiences.</h1>
                <p class="lead text-muted mb-4">
                    I design and build modern websites with Laravel, Bootstrap, and practical UI patterns that convert ideas into usable products.
                </p>
                <div class="d-flex gap-3 flex-wrap">
                    <a class="btn btn-primary btn-lg" href="{{ route('myprofile') }}">View Profile</a>
                    <a class="btn btn-outline-dark btn-lg" href="{{ route('contact') }}">Hire Me</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card section-card">
                    <img class="hero-image" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=900&q=80" alt="Desk setup with laptop for web development">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-2">Quick Overview</h5>
                        <p class="text-muted mb-0">I build complete web experiences from planning and layout to polished, responsive implementation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="py-5 bg-light">
    <div class="container px-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Featured Projects</h2>
            <p class="text-muted mb-0">A few examples of work and capabilities</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm project-card">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=900&q=80" class="card-img-top" alt="Code editor on laptop screen">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Portfolio Website</h5>
                        <p class="card-text text-muted">A personal portfolio built with Laravel and Bootstrap, focused on clean UX and mobile responsiveness.</p>
                    </div>
                    <div class="card-footer bg-white border-0 pt-0 px-4 pb-4">
                        <span class="badge text-bg-primary">Laravel</span>
                        <span class="badge text-bg-dark">Bootstrap</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm project-card">
                    <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?auto=format&fit=crop&w=900&q=80" class="card-img-top" alt="Team discussing product wireframes">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Business Landing Page</h5>
                        <p class="card-text text-muted">A conversion-oriented landing page with clear sections, contact flow, and visual hierarchy.</p>
                    </div>
                    <div class="card-footer bg-white border-0 pt-0 px-4 pb-4">
                        <span class="badge text-bg-primary">UI/UX</span>
                        <span class="badge text-bg-dark">Frontend</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm project-card">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=900&q=80" class="card-img-top" alt="Person working on project planning">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Contact Workflow</h5>
                        <p class="card-text text-muted">An optimized contact form experience with validation-ready structure for smooth communication.</p>
                    </div>
                    <div class="card-footer bg-white border-0 pt-0 px-4 pb-4">
                        <span class="badge text-bg-primary">Forms</span>
                        <span class="badge text-bg-dark">Accessibility</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container px-5">
        <div class="rounded-4 p-4 p-md-5 cta-banner text-center text-md-start">
            <div class="row align-items-center g-3">
                <div class="col-md-8">
                    <h3 class="fw-bold mb-2">Need a modern website for your project?</h3>
                    <p class="mb-0 text-muted">Let’s collaborate and build something practical, fast, and professional.</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <a class="btn btn-dark btn-lg" href="{{ route('contact') }}">Start a Project</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection