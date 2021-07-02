@extends("layout")
@section("main")
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Home</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div style="margin:0 30px">
            <div class="row">
                @foreach($apart as $ap)
                    <div class="col-md-4">
                        <img src="upload/{{$ap->__get("image")}}" width="100%">
                        <H3>Name</H3>
                        <span>HHHHH</span>
                    </div>
                @endforeach
            </div>
        </div>


{{--        <div class="card-footer">--}}
{{--            {!! $apart->links("vendor.pagination.default") !!}--}}
{{--        </div>--}}
        <!-- /.content -->
    </div>
@endsection
