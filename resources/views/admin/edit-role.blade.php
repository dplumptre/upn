@extends('layouts.app_home')

@include('layouts.partials.scripts.datatables_css')

@section('content')


<!-- carry this line below every page -->
<!-- carry this line below every page -->
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Role</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">


<!-- carry this line above every page -->
<!-- carry this line above every page -->




                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">





                        @include('layouts.partials.errors')

<form class="form-horizontal" method="POST" action="{{ asset('admin/'.$role->id.'/update-role') }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                  
<div class="col-md-12 col-12" style="padding-bottom: 15px">

                <label>Role </label>
                <input type="text"  class="form-control border border-info" name="role" value="{{ $role->role}}"/>
            </div>


            

<div class="col-md-12 " style="padding: 15px">
    <button type="submit" class="btn btn-primary">Submit </button>
</div>
            

</form>





                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                @endsection

@push('scripts')
@include('layouts.partials.scripts.datatables_js')
@endpush

