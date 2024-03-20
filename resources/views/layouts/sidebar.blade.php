@auth
<div class="col-lg-3"> <!-- Sidebar -->
    <div class="card border-1 shadow-sm">
        <div class="card-body pt-3">
            <ul class="nav flex-column fw-bold gap-2">
                @if (Auth::user()->role == 2 || Auth::user()->role == 3)
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('forum', ["forum_type_id"=>1]) ? 'text-black fw-bold' : 'text-muted' }} text-decoration-none" href="{{route('forum', ["forum_type_id"=>1])}}">
                        <i class="fas fa-home me-2"></i>
                        <span>Internal</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('forum', ["forum_type_id"=>2]) ? 'text-black fw-bold' : 'text-muted' }} text-decoration-none" href="{{route('forum', ["forum_type_id"=>2])}}">
                        <i class="fas fa-globe me-2"></i>
                        <span>External</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
@endauth
