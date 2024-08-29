
{{-- content start --}}

@extends('backend.layouts.master_page')

@section('title')
<title>Edit temp2</title>
@endsection

@section('content')

<div class="content">
   

    <form class="mb-9" method="post" action="{{ route('post.temp2') }}">

        @csrf

      <div class="row g-3 flex-between-end mb-5">
        <div class="col-auto">
          <h2 class="mb-2"></h2>
          <h5 class="text-body-tertiary fw-semibold"></h5>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-2 mb-sm-0" type="submit">Publish</button>
        </div>
      </div>

      <div class="row g-5">

                <div class="col-12 col-xl-6">
                    <div class="mb-2">Title</div>
                    <input class="form-control mb-5" type="text"  name="title" placeholder="" required/>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="mb-2">h1-title</div>
                    <input class="form-control mb-5" type="text"  name="h1-title" placeholder="" required/>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="mb-2">h1-description</div>
                    <textarea class="mb-5 form-control" name="description"  name="h1-description"></textarea>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="mb-2">h2-title</div>
                    <input class="form-control mb-5" type="text"  name="h2-title" placeholder="" required/>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="mb-2">h2-description</div>
                    <textarea class="mb-5 form-control" name="description" name="h2-description"></textarea>
                </div>

    </div>
    </form>

   
  </div>

@endsection()
{{-- content end --}}