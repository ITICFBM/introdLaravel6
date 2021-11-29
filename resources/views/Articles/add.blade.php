        $this->middleware(['auth','verified']);

        @extends('Layout/app')
        @section('content')
        <div class="container">
            <h3> aqui ira mi formulario de articles</h3>
        </div> 
        @endsection
        