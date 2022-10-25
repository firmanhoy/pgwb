<nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand active" href="/">Andrean Firmansyah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link {{ (request()->is('profile')) ? 'active':'' }}" href="/profile">Profile</a>
                    <a class="nav-link {{ (request()->is('About')) ? 'active':'' }}" href="/about">About</a>
                    <a class="nav-link {{ (request()->is('projects')) ? 'active':'' }}" href="/projects">Projects</a>
                    <a class="nav-link {{ (request()->is('contact')) ? 'active':'' }}" href="/contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>