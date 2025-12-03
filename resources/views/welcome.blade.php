<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Laravel App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fc;
        }
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                        url('https://images.unsplash.com/photo-1522199710521-72d69614c702') center/cover no-repeat;
            color: #fff;
            display: flex;
            align-items: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
        }
        .hero p {
            font-size: 1.2rem;
            margin-top: 10px;
        }
        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.1);
        }
        .feature-box {
            padding: 30px;
            border-radius: 12px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">My Laravel App</a>
        <a href="/login" class="btn btn-outline-light">Login</a>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero">
    <div class="container">
        <h1>Welcome to Your Laravel Project</h1>
        <p class="mt-3">Build powerful web applications with clean design & modern technology.</p>
        <a href="/register" class="btn btn-primary btn-lg mt-4 px-4 py-2">Get Started</a>
    </div>
</div>

<!-- Features Section -->
<div class="container mt-5">

    <h2 class="text-center mb-4 fw-bold">Why Choose Our Laravel Application?</h2>

    <p class="text-center mb-5 text-muted">
        Our platform is built using the powerful Laravel framework, offering a solid foundation for 
        speed, security, and scalability. Whether you're a developer or a business owner, you will 
        benefit from a clean structure and modern UI.
    </p>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="shadow-sm feature-box bg-white text-center h-100">
                <h4>⚡ Lightning Fast Development</h4>
                <p class="mt-2">
                    Laravel’s expressive syntax, built-in tools, and package ecosystem shortens 
                    development time dramatically. Build modern apps with clean and readable code.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="shadow-sm feature-box bg-white text-center h-100">
                <h4>🛡️ Enterprise-Level Security</h4>
                <p class="mt-2">
                    With CSRF protection, encryption, secure routing, and authentication scaffolding, 
                    your application stays safe from most common web vulnerabilities.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="shadow-sm feature-box bg-white text-center h-100">
                <h4>🎨 Beautiful & Customizable UI</h4>
                <p class="mt-2">
                    Designed using Bootstrap 5, the interface is modern, responsive, and easy to modify 
                    to match your brand. Add components quickly with reusable layouts.
                </p>
            </div>
        </div>

    </div>
</div>

<!-- About Section -->
<div class="container mt-5">
    <div class="row align-items-center">

        <div class="col-md-6">
            <h2 class="fw-bold">About This Platform</h2>
            <p class="text-muted mt-3">
                This Laravel project is built to help businesses and developers launch powerful
                web applications faster. With modular code structure, API-ready design, and 
                beautiful UI components, you get a complete toolkit to scale your application.
            </p>
            <ul class="mt-3">
                <li>✔ REST API Ready</li>
                <li>✔ Modular MVC Structure</li>
                <li>✔ Clean & Maintainable Code</li>
                <li>✔ Seamless Database Integration (MySQL/PostgreSQL)</li>
            </ul>
        </div>

        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d"
                 class="img-fluid rounded shadow"
                 alt="About Image">
        </div>

    </div>
</div>

<!-- Call to Action -->
<div class="container text-center my-5">
    <div class="p-5 bg-primary text-white rounded shadow">
        <h2 class="fw-bold">Ready to Start Building?</h2>
        <p class="mt-2">
            Join today and experience the power of Laravel with beautiful UI and modern features.
        </p>
        <a href="/register" class="btn btn-light btn-lg mt-3">Create Your Account</a>
    </div>
</div>

<!-- Footer -->
<footer class="text-center mt-5 mb-4 text-muted">
    © {{ date('Y') }} My Laravel App — Designed with ❤️ and Bootstrap 5.
</footer>


</body>
</html>
