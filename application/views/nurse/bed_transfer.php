

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Bed Transfer</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Nurse</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Bed Transfer</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel tab-border card-topline-green">
                    <header class="panel-heading panel-heading-gray custom-tab ">
                        Search Patient List
                    </header>
                    <div class="panel-body">
                        <div id="smartwizard" class="col-md-12">
                            <ul>
                                <li><a href="#step-1">Patient List <br /><small>This is step Patient list </small></a></li>
                                <li><a href="#step-2">Bed Transfer<br /><small>This is step Bed Transfer</small></a></li>
                                <li><a href="#step-3">Transferred Patient List<br /><small>This is step Investigation</small></a></li>
                            </ul>
                            <div>
                                <div id="step-1" class="">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="panel-body">
                        <form class=" pad30 form-horizontal" action=" " method="post" id="contact_form">
                            <div class="row d-flex justify-content-center">
                                <div class="form-group col-md-6">
                                    <label><strong>Enter Patient ID:</strong></label>
                                    <input style="border-radius:0px;height:40px;" type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter patient ID ">
                                </div>
                                <div class="form-group col-md-2">
                                    <label style="visibility: hidden;"><strong>Ward Name</strong></label>
                                    <a class="btn btn-primary " type="submit">Search</a>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix">&nbsp;</div>
                        <div class="table-responsive">
                            <table id="" class="table table-bordered" style="width:100%;">
                                <thead>
                                    <tr>

                                        <th>Patient ID</th>
                                        <th>Patient Name</th>
                                        <th>Gender </th>
                                        <th>Ward Type</th>
                                        <th>Ward No</th>
                                        <th>Room Type</th>
                                        <th>Room No</th>
                                        <th>Bed No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>xxxxxx500</td>
                                        <td>patient 1</td>
                                        <td>Male</td>
                                        <td>xxx</td>
                                        <td>5532</td>
                                        <td>xxxx</td>
                                        <td>231</td>
                                        <td>25 </td>
                                    </tr>
                                    <tr>
                                        <td>xxxxxx500</td>
                                        <td>patient 1</td>
                                        <td>Male</td>
                                        <td>xxx</td>
                                        <td>5532</td>
                                        <td>xxxx</td>
                                        <td>231</td>
                                        <td>25 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                </div>
                                <div id="step-2" class="">
        <div class="row">
            <div class="col-md-12 ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Ward Type</label>
                            <select class="form-control  select2">
                                <option value="">example-1 </option>
                                <option value="">example-1</option>
                                <option value="">3example-1 </option>
                                <option value="">4example-1 </option>
                                <option value="">5example-1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Ward Number</label>
                            <input placeholder="Enter Ward Number" type="text" class="form-control" />
                        </div>
                        <div class="col-md-6">
                            <label>Room Type & No</label>
                            <select class="form-control  select2">
                                <option value="">example & 210</option>
                                <option value="">example & 210</option>
                                <option value="">example & 210</option>
                                <option value="">example & 210</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>New Bed No</label>
                            <select class="form-control select2">
                                <option value="">210</option>
                                <option value="">210</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label class="">Tranfer Date & Time</label>
                               <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd  " data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                  <input class="form-control" size="16" type="text" id="dob" name="dob" value="">
                                  <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                               </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Transfer Reason</label>
                            <textarea type="textarea" class="form-control" placeholder="Enter Comment"></textarea>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-sm btn-info" type="button">Transfer Bed</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                </div>
                                <div id="step-3" class="">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <h3 class="text-center">Transferred Patient list</h3><br>
                            <table id="" class="table table-bordered" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Patient ID</th>
                                        <th>Patient Name</th>
                                        <th>Ward Type</th>
                                        <th>Ward Number</th>
                                        <th>Room Type</th>
                                        <th>Room Number</th>
                                        <th>Bed No</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>xxxxxx500</td>
                                        <td>patient 1</td>
                                        <td>xxxx</td>
                                        <td>26</td>
                                        <td>xxxxx</td>
                                        <td>211</td>
                                        <td>25 </td>
                                        <td>Completed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script>
        $(function() {
            $(document).on('click', '.btn-add', function(e) {
                e.preventDefault();

                var controlForm = $('.controls form:first'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span class="glyphicon glyphicon-minus">-</span>');
            }).on('click', '.btn-remove', function(e) {
                $(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
            });
        });
    </script>