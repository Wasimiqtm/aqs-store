@extends('admin.layouts.app')

@section('content')

<section id="main-content" >
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="{{ url('admin/faqs') }}">Faqs</a></li>
                    <li class="active">Add</li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>                
        
            {!! Form::open(['url' => '/admin/faqs', 'class' => 'form-horizontal', 'id' => 'myForm',  'rol' => 'form', 'data-toggle' => 'validator']) !!}
                @csrf
                @include ('admin.faqs.form')
            {!! Form::close() !!}
            
    </section>
</section>


@endsection