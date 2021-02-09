<nav class="navbar navbar-expand-lg navbar-light bg-primary p-3 shadow-lg sticky-top">
     <div class="container">
          <a class="navbar-brand" href="#">SMS Project</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
     
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::path() === '/' ? 'active' : '' }}">
                         <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ Request::is('create') ? 'active' : '' }}">
                         <a class="nav-link" href="{{ route('create') }}">Add New</a>
                    </li>
               </ul>
          </div>
     </div>
</nav>