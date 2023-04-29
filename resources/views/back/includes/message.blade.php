<div class="position-fixed bottom-0 start-0 p-3 mb-4">
    @if($errors->any())
    @foreach ($errors->all() as $error)
    <div class="toast align-items-center text-bg-danger border-0 mt-3" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
            {{ $error }}
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    @endforeach
    @endif

    @include('flash::message')
</div>