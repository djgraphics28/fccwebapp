@extends('admin.template.master')

@section('main_content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a href="#" data-toggle="modal" data-target="#modal-station">
            <button type="button" class="btn btn-success btn-sm">Add Borrow</button>
        </a>

        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Borrow</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Shared Capital Lists</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <table class="table table-bordered table-hover datatable" id="sharedcapital_tbl" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Shared Capital</th>
                            <th>OR Number</th>
                            <th>Date of payment</th>
                            <th>Assist by</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $x = 1 ;?>
                        @foreach ($sharedcapital as $item)
                        <tr>
                            <td>{{ $x }}</td>
                            <td>{{ $item->capital }}</td>
                            <td>{{ $item->ornumber }}</td>
                            <td>{{ date('m/d/Y h:i a', strtotime($item->created_at)) }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php $x++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection

@section('js')
@if (session()->has('message'))
    @if (session()->get('message') == 'success')
        <script>
            toastr.success('Successfully Save.', 'Success!');
        </script>
    @endif
@endif
<script>

</script>
@endsection
