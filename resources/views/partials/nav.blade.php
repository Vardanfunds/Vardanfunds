<!-- Navbar & Hero Start -->
        <div class="container-fluid sticky-top px-0">
            <div class="position-absolute text-primary" style="left: 0; top: 0; width: 100%; height: 100%;">
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                   <a href="{{ url('/') }}" class="navbar-brand p-0">
    <h1 class="text-primary m-0">
        <img src="{{ asset('assets/img/logo.png') }}" width="100px" alt="Logo">
    </h1>
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="fa fa-bars"></span>
</button>

<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0">

        <!-- Home -->
        <a href="{{ url('/') }}"
           class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">
           Home
        </a>

        <!-- Team -->
        <a href="{{ url('teams') }}"
           class="nav-item nav-link {{ request()->is('teams') ? 'active' : '' }}">
           Team
        </a>

        <!-- Funds Dropdown -->
        <!-- Funds Dropdown -->
        <div class="nav-item dropdown {{ request()->is('funds','Portfolio') ? 'active' : '' }}">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                Funds
            </a>
            <div class="dropdown-menu m-0">
                <a href="{{ url('funds') }}"
                   class="dropdown-item {{ request()->is('funds') ? 'active' : '' }}">
                   Our Funds
                </a>
                <a href="{{ url('Portfolio') }}"
                   class="dropdown-item {{ request()->is('portfiloview') ? 'active' : '' }}">
                   Portfolio
                </a>
            </div>
        </div>

        <!-- Our Approach Dropdown -->
        <div class="nav-item dropdown {{ request()->is('investmentStrategy','sector','partner') ? 'active' : '' }}">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                Our Approach
            </a>
            <div class="dropdown-menu m-0">
                <a href="{{ url('investmentStrategy') }}"
                   class="dropdown-item {{ request()->is('investmentStrategy') ? 'active' : '' }}">
                   Investment Strategy
                </a>
                <a href="{{ url('sector') }}"
                   class="dropdown-item {{ request()->is('sector') ? 'active' : '' }}">
                   Sector & Research
                </a>
                <a href="{{ url('partner') }}"
                   class="dropdown-item {{ request()->is('partner') ? 'active' : '' }}">
                   Partner & Associates
                </a>
            </div>
        </div>

        <!-- Statutory Disclosure Dropdown -->
        <div class="nav-item dropdown {{ request()->is('fundceqube','fundvenus','newspaper') ? 'active' : '' }}">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                Statutory Disclosure
            </a>
            <div class="dropdown-menu m-0">
                <a href="{{ url('fundceqube') }}"
                   class="dropdown-item {{ request()->is('fundceqube') ? 'active' : '' }}">
                   Vardan Ceqube
                </a>
                <a href="{{ url('fundvenus') }}"
                   class="dropdown-item {{ request()->is('fundvenus') ? 'active' : '' }}">
                   Vardan Venus
                </a>
                <a href="{{ url('newspaper') }}"
                   class="dropdown-item {{ request()->is('newspaper') ? 'active' : '' }}">
                   Newsletter
                </a>
            </div>
        </div>

    </div>
</div>


                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->