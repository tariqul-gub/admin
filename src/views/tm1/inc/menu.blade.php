<li class="nav-item">
    <a href="{{ route('admin.home') }}" class="nav-link @if (Route::is('admin.home')) active @endif">
        <span class="material-symbols-outlined">
            team_dashboard
        </span>
        Dashboard
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('project.index') }}" class="nav-link">
        <span class="material-symbols-outlined">
            group
        </span>
        Project
    </a>
</li>

</li>

<li class="nav-item accordion-item d-none">
    <a href="#" class="nav-link accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseOne">
        <span class="material-symbols-outlined">
            dashboard
        </span>
        Dashboard
    </a>
    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#sidebar-menu">
        <div class="accordion-content">
            <a href="" class="nav-link">
                <span class="material-symbols-outlined">
                    dashboard
                </span>
                Dashboard
            </a>
            <a href="" class="nav-link active">
                <span class="material-symbols-outlined">
                    dashboard
                </span>
                Dashboard
            </a>
            <a href="" class="nav-link">
                <span class="material-symbols-outlined">
                    dashboard
                </span>
                Dashboard
            </a>
            </a>

        </div>
    </div>
</li>
