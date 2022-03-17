<header>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
         <h1 class="navbar-brand">MOVIES</h1>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link {{ request()->routeIs('movies.index') ? 'active' : '' }}"
                     href="{{ route('movies.index') }}">
                     Movie List
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
</header>
