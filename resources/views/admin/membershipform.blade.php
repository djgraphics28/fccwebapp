@extends('admin.template.master')

@section('main_content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a href="{{ url('/admin-record') }}">
            <button type="button" class="btn btn-default btn-sm" >Back</button>
        </a>

        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Registration Form</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Registration Form</h3>

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
                <form id="addmember" method="POST" action="{{ url('/save-member') }}" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="effect3" id="profile-container" style="width:200px;height:200px;">
                                    <img id="profileImage" src="{{ asset('public/dist/img/images.png') }}" style="width:200px;height:200px;" />
                                </div>
                                <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture style="display:none;">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label for="">Member Name: </label>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="lname">Lastname<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" placeholder="ex. dela Cruz" name="lname" id="lname" onkeyup="this.value = this.value.toUpperCase();" >
                                </div>
                                <div class="col-md-3">
                                    <label for="fname">Firstname<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" placeholder="ex. Juan" name="fname" id="fname" onkeyup="this.value = this.value.toUpperCase();">
                                </div>
                                <div class="col-md-3">
                                    <label for="mname">Middlename</label>
                                    <input type="text" class="form-control" placeholder="ex. Bonifacio" name="mname" id="mname" onkeyup="this.value = this.value.toUpperCase();">
                                </div>
                                <div class="col-md-3">
                                    <label for="ename">Extensionname</label>
                                    <input type="text" class="form-control" placeholder="ex. JR. , II, III" name="ename" id="ename" onkeyup="this.value = this.value.toUpperCase();">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="gender">Gender<span style="color:red;">*</span></label>
                                    <select class="form-control select2" name="gender" id="gender">
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="bdate">Birth Date<span style="color:red;">*</span></label>
                                    <input type="date" onchange="calage()" class="form-control" name="birthdate" id="birthdate">
                                </div>
                                <div class="col-md-1">
                                    <label for="age">Age</label>
                                    <input type="text" class="form-control" disabled  id="age">
                                </div>
                                <div class="col-md-5">
                                    <label for="pob">Place of Birth</label>
                                    <input type="text" class="form-control" placeholder="ex. Binalonan, Pangasinan" name="placeofbirth" id="placeofbirth" onkeyup="this.value = this.value.toUpperCase();">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="civil_status">Civil Status<span style="color:red;">*</span></label>
                                    <select class="form-control select2" name="civil_status" id="civil_status">
                                        <option value="" disabled selected>Select Civil Status</option>
                                        <option value="1">Single</option>
                                        <option value="2">Married</option>
                                        <option value="3">Widowed</option>
                                    </select>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="occupation">Occupation</label>
                                    <input type="text" class="form-control" placeholder="ex. Farmer" name="occupation" id="occupation" onkeyup="this.value = this.value.toUpperCase();">
                                </div>
                                <div class="col-md-2">
                                    <label for="contact">Contact Number</label>
                                    <input type="text" class="form-control" placeholder="ex. 09*********" name="contactnumber" id="contactnumber">
                                </div>
                                <div class="col-md-2">
                                    <label for="validno">ValidNo</label>
                                    <input type="text" class="form-control" placeholder="ex. 09*********" name="validno" id="validno">
                                </div>
                                <div class="col-md-2">
                                    <label for="tin">TIN</label>
                                    <input type="text" class="form-control" placeholder="ex. 123-7777-233" name="tin" id="tin">
                                </div>

                            </div>
                            <hr>

                        </div>
                        </div>

                    </div><!-- col-md-12 end -->
                </div><!-- row end -->

                <div class="row">
                    <div class="col-md-12">
                        <label for="">Member Address: </label>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="street">No. / Street</label>
                                <input type="text" class="form-control" placeholder="ex. #123 Sta fe Street" name="street" id="street">
                            </div>
                            <div class="col-md-3">
                                <label for="barangay">Barangay</label>
                                <input type="text" class="form-control" placeholder="ex. Mangcasuy" name="barangay" id="barangay">
                            </div>
                            <div class="col-md-3">
                                <label for="municipality">Municipality</label>
                                <input type="text" class="form-control" placeholder="ex. San Quintin" name="municipality" id="municipality">
                            </div>
                            <div class="col-md-3">
                                <label for="province">Province</label>
                                <input type="text" class="form-control" placeholder="ex. Pangasinan" name="province" id="province">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="areatilage">Area Tilage</label>
                                <input type="text" class="form-control" placeholder="ex. #123" name="areatilage" id="areatilage">
                            </div>
                            <div class="col-md-3">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" placeholder="ex. San Quintin" name="location" id="location">
                            </div>
                            <div class="col-md-3">
                                <label for="othersource">Other Source of income</label>
                                <input type="text" class="form-control" placeholder="ex. *******" name="othersource" id="othersource">
                            </div>
                            <div class="col-md-3">
                                <label for="tenurialstatus">Tenurial Status</label>
                                <input type="text" class="form-control" placeholder="ex. Pangasinan" name="tenurialstatus" id="tenurialstatus">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="passbooknumber">Passbook Number</label>
                                <input type="text" class="form-control" placeholder="ex. 432" name="passbooknumber" id="passbooknumber">
                            </div>
                            <div class="col-md-3">
                                <label for="emailaddress">Email Address</label>
                                <input type="email" class="form-control" placeholder="ex. example@gmail.com" name="emailaddress" id="emailaddress">
                            </div>
                            <div class="col-md-3">
                                <label for="capital">Shared Capital(min. of 2000.00)</label>
                                <input type="number" class="form-control" name="capital"  id="capital">
                            </div>
                            <div class="col-md-3">
                                <label for="ornumber">OR Number</label>
                                <input type="text" class="form-control" name="ornumber"  id="ornumber">
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{-- <button onclick="saveMember()" class="btn btn-primary float-right">Save Member</button> --}}
                                    <button type="submit" class="btn btn-primary">Save Member</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- View Record modal -->
        <div class="modal fade" id="view-record" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">
                                Add View Record
                        </h4>
                    </div>
                    <div class="modal-body" style="background-color: #f1f1f1db!important;">
                        <div class="row">
                            <div class="col-md-3">

                              <!-- Profile Image -->
                              <div class="box box-primary">
                                <div class="box-body box-profile">
                                  <img class="profile-user-img img-responsive" id="prof_pic" src="" alt="User profile picture">

                                  <h5 class="profile-username text-center" id="profile-username"></h5>

                                  <p class="text-muted text-center" id="idnum"></p>

                                  <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                      <b>Age</b> <a class="pull-right" id="prof-age"></a>
                                    </li>
                                    <li class="list-group-item">
                                      <b>Birthday</b> <a class="pull-right" id="prof-bday"></a>
                                    </li>
                                    <li class="list-group-item">
                                      <b>Gender</b> <a class="pull-right" id="prof-gender"></a>
                                    </li>
                                  </ul>
                                </div>
                                <!-- /.box-body -->
                              </div>
                              <!-- /.box -->
                            </div>

                            <!-- /.col -->
                            <div class="col-md-9">
                              <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                  <li class="active"><a href="#info" data-toggle="tab" aria-expanded="false">Info</a></li>
                                  <li class=""><a href="#cp" data-toggle="tab" aria-expanded="false">Contact Person</a></li>
                                </ul>
                                <div class="tab-content">
                                  <div class="tab-pane active" id="info">

                                  </div>
                                  <!-- /.tab-pane -->
                                  <div class="tab-pane" id="cp">

                                  </div>
                                  <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                              </div>
                              <!-- /.nav-tabs-custom -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.View Record modal -->

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
    $(document).ready(function(){

        $("#profileImage").click(function(e) {
            $("#imageUpload").click();
        });

        function fasterPreview( uploader ) {
            if ( uploader.files && uploader.files[0] ){
                $('#profileImage').attr('src',
                    window.URL.createObjectURL(uploader.files[0]) );
            }
        }

        $("#imageUpload").change(function(){
            fasterPreview( this );
        });

         /* datatable initialization */
        $('#records_tbl').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{url('/admin-get-records')}}",
            columns: [
                { data: 'unique_id_num', name: 'id' },
                { data: 'fullname', name: 'name' },
                { data: 'birthdate', name: 'age' },
                { data: 'gender', name: 'gender' },
                { data: 'action', name: 'action', className: 'text-center' }
            ]
        }); /* datatable initialization */

         /* datepicker initialization */
        $('#datepicker').datepicker({
            autoclose: true,
        }); /* datepicker initialization */

         /* Delete Button */
        $('#records_tbl').on('click', '#btn-del', function(){
            $.ajax({
                url: "{{ url('/admin-del-record') }}",
                type: "POST",
                data: {'data': $(this).attr('data-id'),'_token': $('meta[name="csrf-token"]').attr('content')},
                success: function(items) {
                    if(items.status != 500)
                    {
                        toastr.success('Successfully Deleted.', 'Success!');
                        setTimeout(function(){ window.location.reload() }, 3000);
                    } else {
                        toastr.error('Something went wrong.', 'Oops!');
                    }
                }
            });
        }); /* Delete Button */

         /* View Button */
        $('#records_tbl').on('click', '#btn-view', function(){
            console.log($(this).attr('data-id'));
            var url = "{{$base_url}}";
            if($(this).attr('data-id'))
            {
                $.ajax({
                    url: "{{ url('/admin-get-record') }}",
                    type: "POST",
                    data: {'data': $(this).attr('data-id'),'_token': $('meta[name="csrf-token"]').attr('content')},
                    success: function(items) {
                        if(items){
                            var prof_pic = items.user[0].profile_pic;
                            var cp_name = items.user[0].cp_fname + " " + items.user[0].cp_mname + " " + items.user[0].cp_lname;

                            if(items.user[0].profile_pic != null || items.user[0].profile_pic != "")
                            {
                                $("#prof_pic").attr('src', url + '/' + prof_pic);
                            } else {
                                $("#prof_pic").attr('src',"{{ asset('public/dist/img/images.jpg') }}");
                            }

                            $("#idVal").val(items.user[0].id);

                            $("#profile-username").text(capitalized(items.user[0].fname + ' ' + items.user[0].mname + ' ' + items.user[0].lname));
                            $("#prof-age").text(getAge(items.user[0].birthdate));
                            $("#prof-bday").text(moment(items.user[0].birthdate).format('MMM DD, YYYY'));
                            $("#prof-gender").text(items.user[0].gender);
                            $("#idnum").text(items.user[0].unique_id_num);
                            $("#info").html('<form class="form-horizontal"> <div class="form-group"> <label for="" class="col-sm-3 control-label">Civil Status</label> <div class="col-sm-9"> <input type="text" class="form-control" readonly="" value="'+ items.user[0].cs +'"> </div> </div> <div class="form-group"> <label for="" class="col-sm-3 control-label">Address</label> <div class="col-sm-9"> <input type="text" class="form-control" readonly="" value="'+ items.user[0].address +'"> </div> </div> <div class="form-group"> <label for="" class="col-sm-3 control-label">Street</label> <div class="col-sm-9"> <input type="text" class="form-control" readonly="" value="'+ items.user[0].street +'"> </div> </div> <div class="form-group"> <label for="" class="col-sm-3 control-label">Barangay</label> <div class="col-sm-9"> <input type="text" class="form-control" readonly="" value="'+ items.user[0].barangays +'"> </div> </div> <div class="form-group"> <label for="" class="col-sm-3 control-label">Phone Number</label> <div class="col-sm-9"> <input type="text" class="form-control" readonly="" value="'+ items.user[0].phone_num +'"> </div> </div> <div class="form-group"> <label for="" class="col-sm-3 control-label">Telephone Number</label> <div class="col-sm-9"> <input type="text" class="form-control" readonly="" value="'+ items.user[0].tel_num +'"> </div> </div> </form>'); $("#view-record").modal('show');
                            $("#cp").html('<form class="form-horizontal"> <div class="form-group"> <label for="" class="col-sm-3 control-label">Name</label> <div class="col-sm-9"> <input type="text" class="form-control" readonly="" value="'+ cp_name +'"> </div> </div> <div class="form-group"> <label for="" class="col-sm-3 control-label">Relationship</label> <div class="col-sm-9"> <input type="text" class="form-control" readonly="" value="'+ items.user[0].relationship +'"> </div> </div> <div class="form-group"> <label for="" class="col-sm-3 control-label">Address</label> <div class="col-sm-9"> <input type="text" class="form-control" readonly="" value="'+ items.user[0].cp_address +'"> </div> </div> <div class="form-group"> <label for="" class="col-sm-3 control-label">Phone Number</label> <div class="col-sm-9"> <input type="text" class="form-control" readonly="" value="'+ items.user[0].cp_phone_num +'"> </div> </div> <div class="form-group"> <label for="" class="col-sm-3 control-label">Telephone Number</label> <div class="col-sm-9"> <input type="text" class="form-control" readonly="" value="'+ items.user[0].cp_tel_num +'"> </div> </div> </form>'); }
                    }
                });
            }
        }); /* View Button */

        /* get Age */
        function getAge(dateString) {
            var today = new Date();
            var birthDate = new Date(dateString);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            return age;
        }

        /* To Capitalized string */
        function capitalized(txt)
        {
            var str = txt;
            str = str.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                return letter.toUpperCase();
            });

            return str;
        }
    });

    function calage(){
    var bdate = $('#birthdate').val();

    // var mydate = new Date(bdate);
    // var str = mydate.toDateString("MMMM yyyy");


    var today = new Date();
    var birthDate = new Date(bdate);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    // return age;
    $('#age').val(age);
}

function saveMember(){

}
</script>
@endsection
