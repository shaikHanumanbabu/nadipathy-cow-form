@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <a href="#" class="alert-link">{{$error}}</a><br>
            @endforeach
        </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
  </div>
  @endif
    <div class="container col-12 dashboard">

        <form  class="row g-3" method="POST" action="{{  route('whatsapp.update', ['whatsapp' =>  $whatsapp->id ]) }}">
            @csrf
            @if (isset($whatsapp))
                @method('PATCH')
            @endif
            <h5>{{isset($whatsapp) ? 'Update' : 'Create'}} About</h5>

        
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="link" name="link" value="{{ isset($whatsapp->link) ? $whatsapp->link : old('link') }}" placeholder="Enter link">
            </div>

            

            
            
            
            
            
            
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($whatsapp))
                        Update
                    @else
                        Add
                    @endif
                </button>
            </div>
        </form>
    </div>
</main>
@endsection

@section('js-content')

<script type="text/javascript">
    
    tinymce.init({
      selector: 'textarea#description',
    });
  </script>
    
@endsection
