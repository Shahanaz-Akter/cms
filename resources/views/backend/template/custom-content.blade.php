
{{-- content start --}}

@extends('backend.layouts.master_page')

@section('title')
<title>Customize Template</title>
@endsection

@section('content')

<div class="content">
   
@if($t_id == 1)
<p>Temp-01</p>

 {{-- temp-1 --}}
 <section class="d-flex justify-content-between">

    <div class="bg-light p-5">

        <div>I am from Template 1.</div>

        <div>
            <div>
                <h1>H1 tag</h1>
                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At dolor magnam tenetur voluptate
                     reprehenderit doloremque, libero ex ratione officia error!</div>
            </div>
    
            <br>
            <div>
                <h2>H2 tag</h2>
    
                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At dolor magnam tenetur voluptate
                     reprehenderit doloremque, libero ex ratione officia error!</div>
            </div>
        </div>
    
    </div>

    <div class="bg-white p-5">
    <form class="mb-9" method="post" action="{{ route('post.temp1') }}">

        @csrf

      <div class="row g-3 flex-between-end mb-5">
        <div class="col-auto">
          <h2 class="mb-2"></h2>
          <div class="text-body-tertiary fw-semibold">
            <a href="{{ route('template') }}">
           <div class="btn btn-dark">← Back</div></a>
        </div>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-2 mb-sm-0" type="submit">Publish</button>
        </div>
      </div>

      <div class="row g-5">

                <div class="col-12 col-xl-6">
                    <div class="mb-2">Title</div>
                    <input class="form-control mb-1" type="text"  name="title" placeholder="" />
                </div>
                <div class="col-12 col-xl-6">
                    <div class="mb-2">h1-title</div>
                    <input class="form-control mb-1" type="text"  name="h1-title" placeholder="" />
                </div>
                <div class="col-12 col-xl-6">
                    <div class="mb-2">h1-description</div>
                    <textarea class="mb-1 form-control" name="description"  name="h1-description"></textarea>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="mb-2">h2-title</div>
                    <input class="form-control mb-1" type="text"  name="h2-title" placeholder="" />
                </div>
                <div class="col-12 col-xl-6">
                    <div class="mb-2">h2-description</div>
                    <textarea class="mb-1 form-control" name="description" name="h2-description"></textarea>
                </div>

    </div>
    </form>
</div>
</section>
@endif


@if($t_id == 2)
<p>Temp-02</p>
{{-- temp-2 --}}
<section class="d-flex justify-content-between">

    
    <div class="bg-light p-5">

        <div>I am from Template 1.</div>

        <div>
            <div>
                <h1>H1 tag</h1>
                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At dolor magnam tenetur voluptate
                     reprehenderit doloremque, libero ex ratione officia error!</div>
            </div>
    
            <br>
            <div>
                <h2>H2 tag</h2>
    
                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At dolor magnam tenetur voluptate
                     reprehenderit doloremque, libero ex ratione officia error!</div>
            </div>
        </div>
    
    </div>

    <div class="bg-white p-5">
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
</section>
@endif


@if($t_id == 3)
<p>Temp-03</p>

{{-- temp-3 --}}
<section class="d-flex justify-content-between">

    
    <div class="bg-light p-5">

        <div>I am from Template 1.</div>

        <div>
            <div>
                <h1>H1 tag</h1>
                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At dolor magnam tenetur voluptate
                     reprehenderit doloremque, libero ex ratione officia error!</div>
            </div>
    
            <br>
            <div>
                <h2>H2 tag</h2>
    
                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At dolor magnam tenetur voluptate
                     reprehenderit doloremque, libero ex ratione officia error!</div>
            </div>
        </div>
    
    </div>

    <div class="bg-white p-5">
        <form class="mb-9" method="post" action="{{ route('post.temp3') }}">

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
</section>
@endif
</div>

@endsection()
{{-- content end --}}