<!-----------------------------------------------------------------------------------
--
-- View Practitioner Registration
--
------------------------------------------------------------------------------------->

<div class="container medlab_panel_container">
    <div class="row">
        <!--
        -- Practitioner Registration Approval
        -->
        <div class="col-md-12 col-sm-12 col-xm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            New Practitioner Registration
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-5" style="text-align: right;">
                            <form class="form-horizontal" role="form" method="POST" action="/account/practitioner-registration/{{ $registration->id }}/delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn btn-default" type="submit">Delete Registration</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="/account/practitioner-registration/{{ $registration->id }}/create">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
                            <div class="container-fluid">

                                <!--
                                -- Practitioner Name
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Practitioner Detail</h4>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Title<span style="color: red;">*</span></th></tr>
                                                    <tr>
                                                        <td>
                                                            {!! Form::select('title', $titleList, $registration->title, ['class' => 'form-control']) !!}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Email Address<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="email" placeholder="Email" value="{{ $registration->email }}"></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">First Name<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ $registration->first_name }}"></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Last Name<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ $registration->last_name }}"></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Provider Number<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="provider_number" placeholder="Provider Number" value="{{ $registration->provider_number }}"></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Telephone<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="telephone" placeholder="Phone Num." value="{{ $registration->telephone }}"></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Mobile Phone<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="mobile_phone" placeholder="Mobile Num." value="{{ $registration->mobile_phone }}"></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--
                                -- Practitioner Password
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Password</h4>

                                        <div class="row" style="margin-top: 20px">
                                            <div class="col-md-12 col-sm-12">
                                                <button type="button" id="change_password_btn" class="btn btn-default">Change Password: No</button>
                                                <input type="hidden" name="change_password" value="0">
                                                <input type="checkbox" id="change_password" name="change_password" class="hidden" value="1">
                                            </div>
                                        </div>

                                        <div  id="password_change_box">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Password<span style="color: red;">*</span></th></tr>
                                                        <tr><td><input type="password" class="form-control" name="password" placeholder="Password" value="" disabled></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Confirm Password<span style="color: red;">*</span></th></tr>
                                                        <tr><td><input type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password" value="" disabled></td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="container-fluid">

                                <!--
                                -- Business Detail
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Business Detail</h4>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Name of the Clinic/Business<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="clinic_name" placeholder="Clinic/Business Name" value="{{ $registration->clinic_name }}" disabled></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Business Type<span style="color: red;">*</span></th></tr>
                                                    <tr>
                                                        <td>
                                                            {!! Form::select('business_type', $businessTypeList, $registration->business_type, ['class' => 'form-control', 'disabled']) !!}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Business Number<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="business_number" placeholder="Business Num." value="{{ $registration->business_number }}" disabled></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Street Address<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="street_address_one" placeholder="Street" value="{{ $registration->street }}" disabled></td></tr>
                                                    <tr><td style="padding-top: 10px;"><input type="text" class="form-control" name="street_address_two" placeholder="Suburb" value="{{ $registration->suburb }}" disabled></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">City<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="city" placeholder="City" value="{{ $registration->city }}" disabled></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">State/Region<span style="color: red;">*</span></th></tr>
                                                    <tr>
                                                        <td>
                                                            @if($registration->country == 'NZ')
                                                                {!! Form::select('state', $nzRegion, $registration->state, ['class' => 'form-control', 'id' => 'state_select', 'disabled']) !!}
                                                            @else
                                                                {!! Form::select('state', $auState, $registration->state, ['class' => 'form-control', 'id' => 'state_select', 'disabled']) !!}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Country<span style="color: red;">*</span></th></tr>
                                                    <tr>
                                                        <td>
                                                            @if($registration->country == 'NZ')
                                                                <select class="form-control" id="country_select" name="country" disabled>
                                                                    <option value="AU">Australia</option>
                                                                    <option selected="selected" value="NZ">New Zealand</option>
                                                                </select>
                                                            @else

                                                                <select class="form-control" id="country_select" name="country" disabled>
                                                                    <option selected="selected" value="AU">Australia</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                </select>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Post Code<span style="color: red;">*</span></th></tr>
                                                    <tr><td><input type="text" class="form-control" name="postcode" placeholder="Post Code" value="{{ $registration->postcode }}" disabled></td></tr>
                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!--
                                -- Clinic Search Box
                                -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Clinic Information</h4>

                                        <div class="alert alert-info" style="text-align: center; margin-bottom: 5px; margin-top: 5px;">
                                            Please use this search function select a clinic for the practitioner
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">State/Region</th></tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control" id="company_state_select" name="company_state">
                                                                <option value="ACT">ACT</option>
                                                                <option value="NSW">NSW</option>
                                                                <option value="NT">NT</option>
                                                                <option value="QLD">QLD</option>
                                                                <option value="SA">SA</option>
                                                                <option value="TAS">TAS</option>
                                                                <option value="VIC">VIC</option>
                                                                <option value="WA">WA</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Country</th></tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control" id="company_country_select" name="company_country">
                                                                <option selected="selected" value="AU">Australia</option>
                                                                <option value="NZ">New Zealand</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Suburb</th></tr>
                                                    <tr><td><input type="text" id="company_suburb" class="form-control" name="company_suburb" placeholder="Suburb" value=""></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Post Code</th></tr>
                                                    <tr><td><input type="text" id="company_postcode" class="form-control" name="company_postcode" placeholder="Post Code" value=""></td></tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Name of the Practitioner Clinic</th></tr>
                                                    <tr><td><input type="text" id="company_name" class="form-control" name="company_name" placeholder="Practitioner Clinic Name" value=""></td></tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Business Type</th></tr>
                                                    <tr>
                                                        <td>
                                                            {!! Form::select('company_type', $businessTypeList, null, ['class' => 'form-control', 'id' => 'company_type']) !!}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <table style="width:100%;">
                                                    <tr><th class="medlab_registration_form_section_subtitle">Business Number</th></tr>
                                                    <tr><td><input type="text" id="company_business_number" class="form-control" name="company_business_number" placeholder="Business Num." value=""></td></tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div style="margin-top: 10px;">
                                            <button type="button" id="find_company_btn" title="Find Clinic" class="btn btn-primary btn-block">
                                                Find Clinic
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="container-fluid">

                                <!--
                                -- Clinic Result Box
                                -->
                                <div class="col-md-12 col-sm-12">
                                    <div class="well" style="background-color: transparent; background-image: none">
                                        <h4 class="medlab_registration_form_section_title">Clinic Search</h4>
                                        <br>
                                        <div class="well medlab_registration_search_result_well" style="background-image: none">
                                            <div class="medlab_registration_search_result">
                                                SEARCH RESULTS
                                            </div>
                                            <div id="find_company_display_box">

                                            </div>
                                        </div>

                                        <div class="alert alert-info" style="text-align: center; margin-bottom: 0px;">
                                            If you cannot find the clinic, please use the function below to create a new clinic.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="container-fluid">

                                <!--
                                -- Create New Clinic Box
                                -->
                                <div class="col-md-12 col-sm-12">
                                    <div class="well" style="background-color: transparent; background-image: none">

                                        <div data-toggle="collapse" href="#create_clinic_box">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <h4 class="medlab_registration_form_section_title">
                                                        Create New Clinic
                                                        <span class="glyphicon glyphicon-menu-down" aria-hidden="true" style="font-weight: bold; font-size: 20px; float: right"></span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="create_clinic_box" class="collapse">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Name of the Clinic/Business<span style="color: red;">*</span></th></tr>
                                                        <tr><td><input id="create_new_clinic_name" type="text" class="form-control" name="create_new_clinic_name" placeholder="Clinic/Business Name" value="{{ $registration->clinic_name }}"></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Business Type<span style="color: red;">*</span></th></tr>
                                                        <tr>
                                                            <td>
                                                                {!! Form::select('create_new_business_type', $businessTypeList, $registration->business_type, ['class' => 'form-control', 'id' => 'create_new_business_type']) !!}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Business Number<span style="color: red;">*</span></th></tr>
                                                        <tr><td><input id="create_new_business_number" type="text" class="form-control" name="create_new_business_number" placeholder="Business Num." value="{{ $registration->business_number }}"></td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Street Address<span style="color: red;">*</span></th></tr>
                                                        <tr><td><input id="create_new_street_address_one" type="text" class="form-control" name="create_new_street_address_one" placeholder="Street" value="{{ $registration->street }}"></td></tr>
                                                        <tr><td style="padding-top: 10px;"><input id="create_new_street_address_two" type="text" class="form-control" name="create_new_street_address_two" placeholder="Suburb" value="{{ $registration->suburb }}"></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">City<span style="color: red;">*</span></th></tr>
                                                        <tr><td><input id="create_new_city" type="text" class="form-control" name="create_new_city" placeholder="City" value="{{ $registration->city }}"></td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">State/Region<span style="color: red;">*</span></th></tr>
                                                        <tr>
                                                            <td>
                                                                @if($registration->country == 'NZ')
                                                                    {!! Form::select('create_new_state', $nzRegion, $registration->state, ['class' => 'form-control', 'id' => 'create_new_state_select']) !!}
                                                                @else
                                                                    {!! Form::select('create_new_state', $auState, $registration->state, ['class' => 'form-control', 'id' => 'create_new_state_select']) !!}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Country<span style="color: red;">*</span></th></tr>
                                                        <tr>
                                                            <td>
                                                                @if($registration->country == 'NZ')
                                                                    <select class="form-control" id="create_new_country_select" name="create_new_country">
                                                                        <option value="AU">Australia</option>
                                                                        <option selected="selected" value="NZ">New Zealand</option>
                                                                    </select>
                                                                @else

                                                                    <select class="form-control" id="create_new_country_select" name="create_new_country">
                                                                        <option selected="selected" value="AU">Australia</option>
                                                                        <option value="NZ">New Zealand</option>
                                                                    </select>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <table style="width:100%;">
                                                        <tr><th class="medlab_registration_form_section_subtitle">Post Code<span style="color: red;">*</span></th></tr>
                                                        <tr><td><input id="create_new_postcode" type="text" class="form-control" name="create_new_postcode" placeholder="Post Code" value="{{ $registration->postcode }}"></td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <br>
                                            <button id="create_new_clinic_btn" type="button" title="Create New Clinic" class="btn btn-default btn-block">Create New Clinic</button>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div>
                            <button type="submit" title="Register" class="btn btn-primary btn-block">Create Practitioner Account</button>
                        </div>

                    </form>

                    <p style="text-align: center">
                        <br>
                        <br>
                        <a class="btn btn-default" href="/account/practitioner-registration">Back to Practitioner Registration</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

