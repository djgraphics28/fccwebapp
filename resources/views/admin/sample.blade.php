@extends('admin.template.master')

@section('main_content')
    yesss
    <table class="table" id="barangay">
        <thead>
            <tr>
                <th>ID</th>
                <th>Barangays</th>
                <th>Code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($barangays as $item)
            <tr>
               <td>{{$item->id}}</td>
               <td>{{$item->name}}</td>
               <td>{{$item->code}}</td>
               <td><button class="btn btn-info">EDIT</button></td>

            </tr>
            @endforeach
        </tbody>

    </table>

@endsection

@section('js')
    <script>
        $('#barangay').DataTable();
    </script>

@endsection

