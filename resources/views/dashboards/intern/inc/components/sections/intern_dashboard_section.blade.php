<section id="main-content" class="" style="padding: 0px !important;">
    <section class="wrapper" style="padding: 0px !important;">
        @include('inc.messages')
        <h3><i class="fa fa-angle-right"></i>Important Dates</h3>
        <!-- SIMPLE TO DO LIST -->
        <div class="row mt">
            <div class="col-md-12">
                <div class="white-panel pn">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h5><i class="fa fa-tasks"></i> Cohort Four</h5>
                        </div>
                        <br>
                    </div>
                    <div class="custom-check goleft mt">
                        <table id="todo" class="table table-hover custom-check">
                            <tbody>
                            <tr>
                                <td>
                                    <span class="check"><input type="checkbox" class="checked"></span>
                                    <a href="index.html#">Internship start date:  February 17, 2020 </a></span>
                                    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="check"><input type="checkbox" class="checked"></span>
                                    <a href="index.html#">Friday Sessions (weekly):  February 14 - end of program </a></span>
                                    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="check"><input type="checkbox" class="checked"></span>
                                    <a href="index.html#">Phase 2 Block Week:  March 23, 2020 – March 26, 2020 </a></span>
                                    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="check"><input type="checkbox" class="checked"></span>
                                    <a href="index.html#">Phase 3 Block Week:  May 11, 2020 – May 14, 2020  </a></span>
                                    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="check"><input type="checkbox" class="checked"></span>
                                    <a href="index.html#">Last day of internship: July 11, 2020  </a></span>
                                    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="check"><input type="checkbox" class="checked"></span>
                                    <a href="index.html#">Graduation date:  August 3, 2020   </a></span>
                                    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /table-responsive -->
                </div>
                <!--/ White-panel -->
            </div>
            <!-- /col-md-12 -->
        </div>
        <!--  row -->
    </section>
    <!-- /wrapper -->
    <section class="wrapper" style="padding: 0px; margin-top: 0px; !important;">
        <div class="row mt">

            <div class="col-lg-6 col-md-6 col-sm-12">
                <!--  ALERTS EXAMPLES -->
                <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> Work Plan Notifications</h4>
                    <div class="alert alert-success"><b>{{$workPlans->count()}}!</b> You successfully read this important alert message.</div>
                    <div class="alert alert-success"><b>{{$workPlans->count()}}!</b> You successfully read this important alert message.</div>
                    <div class="alert alert-info"><b>Heads up!</b> This alert needs your attention, but it's not super important.</div>
                    <div class="alert alert-warning"><b>Warning!</b> Better check yourself, you're not looking too good.</div>
                    <div class="alert alert-danger"><b>Oh snap!</b> Change a few things up and try submitting again.</div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <!--  ALERTS EXAMPLES -->
                <div class="showback">
                    <h4><i class="fa fa-angle-right"></i> Attendance Sheets Notifications</h4>
                    <div class="alert alert-success"><b>Well done!</b> You successfully read this important alert message.</div>
                    <div class="alert alert-info"><b>Heads up!</b> This alert needs your attention, but it's not super important.</div>
                    <div class="alert alert-warning"><b>Warning!</b> Better check yourself, you're not looking too good.</div>
                    <div class="alert alert-danger"><b>Oh snap!</b> Change a few things up and try submitting again.</div>
                </div>
            </div>
        </div>

    </section>
</section>

