@extends('admin.blank')
@section('content')

<div class="row">
    <div class="col-lg-12 grid-magin">
        <div class="card">
            <div class="card-body">
                <h2>All slideshows</h2>
                <a href="{{url('/admin/slide/create')}}" class="btn btn-primary btn-fw">show</a>
            </div>
        </div>
    </div>
</div>

@endsection
