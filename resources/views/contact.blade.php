@extends('layout')
@section('content')
    <section class="py-5">
        <div class="container px-5">
            <div class="contact-hero p-4 p-md-5 mb-5">
                <div class="row align-items-center g-4">
                    <div class="col-md-8">
                        <h1 class="fw-bold mb-2">Let's build your next website</h1>
                        <p class="mb-0 opacity-75">Send your requirements and I will get back with a practical plan.</p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <i class="bi bi-chat-square-text fs-1"></i>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="card section-card p-4 p-lg-5">
                        <h4 class="fw-bold mb-3">Contact Form</h4>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full name</label>
                                <input class="form-control" id="name" type="text" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input class="form-control" id="email" type="email" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone number</label>
                                <input class="form-control" id="phone" type="tel" placeholder="+1 000 000 0000">
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Tell me about your project"></textarea>
                            </div>
                            <button class="btn btn-primary" type="button">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card section-card p-4 mb-4">
                        <img class="about-image mb-3"
                            src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?auto=format&fit=crop&w=900&q=80"
                            alt="Laptop and phone workspace">
                        <h5 class="fw-semibold">Response Time</h5>
                        <p class="text-muted mb-0">I usually respond within 24 hours with next steps and timeline.</p>
                    </div>
                    <div class="card section-card p-4">
                        <h5 class="fw-semibold">Other Channels</h5>
                        <p class="text-muted mb-2">Email: hello@myportfolio.dev</p>
                        <p class="text-muted mb-0">Location: Available for remote projects worldwide.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
