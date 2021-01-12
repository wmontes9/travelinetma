@extends("layouts.admin")
@section("content")
<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Basic Table Sizes</h4>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing
                            elit</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item" style="float: left;">
                            <a href="../index.html"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item" style="float: left;"><a href="#!">Bootstrap Table</a>
                        </li>
                        <li class="breadcrumb-item" style="float: left;"><a href="#!">Basic
                                Initialization</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <!-- Page-body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Zero config.table start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Zero Configuration</h5>
                        <span>DataTables has most features enabled by default, so all
                            you need to do to use it with your own ables is to call the
                            construction function: $().DataTable();.</span>

                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-xs-12 col-sm-12 col-sm-12 col-md-6"><div class="dataTables_length" id="simpletable_length"><label>Show <select name="simpletable_length" aria-controls="simpletable" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-xs-12 col-sm-12 col-md-6"><div id="simpletable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="simpletable"></label></div></div></div><div class="row"><div class="col-xs-12 col-sm-12"><table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 155px;">Name</th><th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 234px;">Position</th><th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 111px;">Office</th><th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 52px;">Age</th><th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 112px;">Start date</th><th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 77px;">Salary</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr role="row" class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr></tbody>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-xs-12 col-sm-12 col-md-5"><div class="dataTables_info" id="simpletable_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div></div><div class="col-xs-12 col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="simpletable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="simpletable_previous"><a href="#" aria-controls="simpletable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="simpletable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="simpletable_next"><a href="#" aria-controls="simpletable" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- Zero config.table end -->
                <!-- Default ordering table start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Default Ordering</h5>
                        <span>Lets say you want to sort the fourth column (3) descending
                            and the first column (0) ascending: your order: would look
                            like this: order: [[ 3, 'desc' ], [ 0, 'asc' ]]</span>

                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <div id="order-table_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-xs-12 col-sm-12 col-sm-12 col-md-6"><div class="dataTables_length" id="order-table_length"><label>Show <select name="order-table_length" aria-controls="order-table" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-xs-12 col-sm-12 col-md-6"><div id="order-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="order-table"></label></div></div></div><div class="row"><div class="col-xs-12 col-sm-12"><table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
                                <thead>
                                    <tr role="row"><th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 155px;">Name</th><th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 234px;">Position</th><th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 111px;">Office</th><th class="sorting_desc" tabindex="0" aria-controls="order-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Age: activate to sort column ascending" style="width: 52px;">Age</th><th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 112px;">Start date</th><th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 77px;">Salary</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr role="row" class="odd">
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td class="sorting_1">66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr role="row" class="even">
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td class="sorting_1">66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td class="sorting_1">64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr><tr role="row" class="even">
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td class="sorting_1">63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr><tr role="row" class="odd">
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td class="sorting_1">61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr><tr role="row" class="even">
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td class="sorting_1">61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td class="sorting_1">59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr><tr role="row" class="even">
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td class="sorting_1">59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td class="sorting_1">55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr><tr role="row" class="even">
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td class="sorting_1">43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr></tbody>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-xs-12 col-sm-12 col-md-5"><div class="dataTables_info" id="order-table_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div></div><div class="col-xs-12 col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="order-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="order-table_previous"><a href="#" aria-controls="order-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="order-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="order-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="order-table_next"><a href="#" aria-controls="order-table" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- Default ordering table end -->
                <!-- Multi-column table start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Multi-Column Ordering</h5>
                        <span>DataTables allows ordering by multiple columns at the same
                            time, which can be activated in a number of different
                            ways</span>

                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <div id="multi-colum-dt_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-xs-12 col-sm-12 col-sm-12 col-md-6"><div class="dataTables_length" id="multi-colum-dt_length"><label>Show <select name="multi-colum-dt_length" aria-controls="multi-colum-dt" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-xs-12 col-sm-12 col-md-6"><div id="multi-colum-dt_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="multi-colum-dt"></label></div></div></div><div class="row"><div class="col-xs-12 col-sm-12"><table id="multi-colum-dt" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="multi-colum-dt_info">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="multi-colum-dt" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 155px;">Name</th><th class="sorting" tabindex="0" aria-controls="multi-colum-dt" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 234px;">Position</th><th class="sorting" tabindex="0" aria-controls="multi-colum-dt" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 111px;">Office</th><th class="sorting" tabindex="0" aria-controls="multi-colum-dt" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 52px;">Age</th><th class="sorting" tabindex="0" aria-controls="multi-colum-dt" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 112px;">Start date</th><th class="sorting" tabindex="0" aria-controls="multi-colum-dt" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 77px;">Salary</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr role="row" class="odd">
                                        <td class="sorting_1 sorting_2">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1 sorting_2">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1 sorting_2">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1 sorting_2">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1 sorting_2">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1 sorting_2">Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1 sorting_2">Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1 sorting_2">Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1 sorting_2">Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1 sorting_2">Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr></tbody>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-xs-12 col-sm-12 col-md-5"><div class="dataTables_info" id="multi-colum-dt_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div></div><div class="col-xs-12 col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="multi-colum-dt_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="multi-colum-dt_previous"><a href="#" aria-controls="multi-colum-dt" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="multi-colum-dt" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi-colum-dt" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="multi-colum-dt_next"><a href="#" aria-controls="multi-colum-dt" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- Multi-column table end -->
                <!-- Complex-header table start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Complex Headers</h5>
                        <span>When using tables to display data, you will often wish to
                            display column information in groups. DataTables fully
                            supports colspan and rowspan in the table's header,
                            assigning the required order listeners to the TH element
                            suitable for that column.</span>

                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <div id="complex-dt_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-xs-12 col-sm-12 col-sm-12 col-md-6"><div class="dataTables_length" id="complex-dt_length"><label>Show <select name="complex-dt_length" aria-controls="complex-dt" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-xs-12 col-sm-12 col-md-6"><div id="complex-dt_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="complex-dt"></label></div></div></div><div class="row"><div class="col-xs-12 col-sm-12"><table id="complex-dt" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="complex-dt_info" style="width: 999px;">
                                <thead>
                                    <tr role="row"><th rowspan="2" class="sorting_asc" tabindex="0" aria-controls="complex-dt" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 155px;">Name</th><th colspan="2" rowspan="1">HR Information</th><th colspan="3" rowspan="1">Contact</th></tr>
                                    <tr role="row"><th class="sorting" tabindex="0" aria-controls="complex-dt" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 235px;">Position</th><th class="sorting" tabindex="0" aria-controls="complex-dt" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 111px;">Salary</th><th class="sorting" tabindex="0" aria-controls="complex-dt" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 74px;">Office</th><th class="sorting" tabindex="0" aria-controls="complex-dt" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 91px;">Extn.</th><th class="sorting" tabindex="0" aria-controls="complex-dt" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending" style="width: 76px;">E-mail</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr role="row" class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr></tbody>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Salary</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Extn.</th><th rowspan="1" colspan="1">E-mail</th></tr>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-xs-12 col-sm-12 col-md-5"><div class="dataTables_info" id="complex-dt_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div></div><div class="col-xs-12 col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="complex-dt_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="complex-dt_previous"><a href="#" aria-controls="complex-dt" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="complex-dt" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex-dt" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="complex-dt_next"><a href="#" aria-controls="complex-dt" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- Complex-header table end -->
                <!-- DOM Positioning table start -->
                <div class="card">
                    <div class="card-header">
                        <h5>DOM Positioning</h5>
                        <span>When customizing DataTables for your own usage, you might
                            find that the default position of the feature elements
                            (filter input etc) is not quite to your liking. To address
                            this issue DataTables takes inspiration from the CSS 3
                            Advanced Layout Module and provides the dom initialization
                            parameter which can be set to indicate where you wish
                            particular features to appear in the DOM. You can also
                            specify div wrapping containers (with an id and / or class)
                            to provide complete layout flexibility.</span>

                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <div id="DOM-dt_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="top"><div class="dataTables_info" id="DOM-dt_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div></div><table id="DOM-dt" class="table table-striped table-bordered nowrap dataTable" aria-describedby="DOM-dt_info" role="grid">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DOM-dt" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 155px;">Name</th><th class="sorting" tabindex="0" aria-controls="DOM-dt" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 234px;">Position</th><th class="sorting" tabindex="0" aria-controls="DOM-dt" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 111px;">Office</th><th class="sorting" tabindex="0" aria-controls="DOM-dt" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 52px;">Age</th><th class="sorting" tabindex="0" aria-controls="DOM-dt" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 112px;">Start date</th><th class="sorting" tabindex="0" aria-controls="DOM-dt" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 77px;">Salary</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr role="row" class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr></tbody>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Salary</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Extn.</th><th rowspan="1" colspan="1">E-mail</th></tr>
                                </tfoot>
                            </table><div class="bottom"><div id="DOM-dt_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="DOM-dt"></label></div><div class="dataTables_length" id="DOM-dt_length"><label>Show <select name="DOM-dt_length" aria-controls="DOM-dt" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div class="dataTables_paginate paging_simple_numbers" id="DOM-dt_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DOM-dt_previous"><a href="#" aria-controls="DOM-dt" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DOM-dt" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DOM-dt" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DOM-dt_next"><a href="#" aria-controls="DOM-dt" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div><div class="clear"></div></div>
                        </div>
                    </div>
                </div>
                <!-- DOM Positioning table end -->
                <!-- Alternative Pagination table start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Alternative Pagination</h5>
                        <span>The default page control presented by DataTables (forward
                            and backward buttons with up to 7 page numbers in-between)
                            is fine for most situations, but there are cases where you
                            may wish to customise the options presented to the end user.
                            This is done through DataTables' extensible pagination
                            mechanism, the pagingType option.</span>

                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <div id="alt-pg-dt_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-xs-12 col-sm-12 col-sm-12 col-md-6"><div class="dataTables_length" id="alt-pg-dt_length"><label>Show <select name="alt-pg-dt_length" aria-controls="alt-pg-dt" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-xs-12 col-sm-12 col-md-6"><div id="alt-pg-dt_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="alt-pg-dt"></label></div></div></div><div class="row"><div class="col-xs-12 col-sm-12"><table id="alt-pg-dt" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="alt-pg-dt_info">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="alt-pg-dt" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 155px;">Name</th><th class="sorting" tabindex="0" aria-controls="alt-pg-dt" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 234px;">Position</th><th class="sorting" tabindex="0" aria-controls="alt-pg-dt" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 111px;">Office</th><th class="sorting" tabindex="0" aria-controls="alt-pg-dt" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 52px;">Age</th><th class="sorting" tabindex="0" aria-controls="alt-pg-dt" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 112px;">Start date</th><th class="sorting" tabindex="0" aria-controls="alt-pg-dt" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 77px;">Salary</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr role="row" class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr></tbody>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-xs-12 col-sm-12 col-md-5"><div class="dataTables_info" id="alt-pg-dt_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div></div><div class="col-xs-12 col-sm-12 col-md-7"><div class="dataTables_paginate paging_full_numbers" id="alt-pg-dt_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="alt-pg-dt_first"><a href="#" aria-controls="alt-pg-dt" data-dt-idx="0" tabindex="0" class="page-link">First</a></li><li class="paginate_button page-item previous disabled" id="alt-pg-dt_previous"><a href="#" aria-controls="alt-pg-dt" data-dt-idx="1" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="alt-pg-dt" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="alt-pg-dt" data-dt-idx="3" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="alt-pg-dt_next"><a href="#" aria-controls="alt-pg-dt" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li><li class="paginate_button page-item last" id="alt-pg-dt_last"><a href="#" aria-controls="alt-pg-dt" data-dt-idx="5" tabindex="0" class="page-link">Last</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- Alternative Pagination table end -->
                <!-- Scroll - Vertical table start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Scroll - Vertical</h5>
                        <span>This example shows the DataTables table body scrolling in
                            the vertical direction. This can generally be seen as an
                            alternative method to pagination for displaying a large
                            table in a fairly small vertical area, and as such
                            pagination has been disabled here (note that this is not
                            mandatory, it will work just fine with pagination enabled as
                            well!).</span>

                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <div id="scr-vrt-dt_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-xs-12 col-sm-12 col-sm-12 col-md-6"></div><div class="col-xs-12 col-sm-12 col-md-6"><div id="scr-vrt-dt_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="scr-vrt-dt"></label></div></div></div><div class="row"><div class="col-xs-12 col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 983px; padding-right: 17px;"><table class="table table-striped table-bordered nowrap dataTable" role="grid" style="margin-left: 0px; width: 983px;"><thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="scr-vrt-dt" rowspan="1" colspan="1" style="width: 150px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="scr-vrt-dt" rowspan="1" colspan="1" style="width: 229px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="scr-vrt-dt" rowspan="1" colspan="1" style="width: 108px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="scr-vrt-dt" rowspan="1" colspan="1" style="width: 50px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="scr-vrt-dt" rowspan="1" colspan="1" style="width: 110px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="scr-vrt-dt" rowspan="1" colspan="1" style="width: 77px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; max-height: 200px; width: 100%;"><table id="scr-vrt-dt" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="scr-vrt-dt_info" style="width: 100%;"><thead>
                                    <tr role="row" style="height: 20px;"><th class="sorting" aria-controls="scr-vrt-dt" rowspan="1" colspan="1" style="width: 150px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th class="sorting" aria-controls="scr-vrt-dt" rowspan="1" colspan="1" style="width: 229px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th class="sorting" aria-controls="scr-vrt-dt" rowspan="1" colspan="1" style="width: 108px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th class="sorting" aria-controls="scr-vrt-dt" rowspan="1" colspan="1" style="width: 50px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th class="sorting" aria-controls="scr-vrt-dt" rowspan="1" colspan="1" style="width: 110px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th class="sorting" aria-controls="scr-vrt-dt" rowspan="1" colspan="1" style="width: 77px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th></tr>
                                </thead><tfoot>
                                    <tr style="height: 20px;"><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 168px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 247px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 126px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 68px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 128px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 95px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th></tr>
                                </tfoot>
                                
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr role="row" class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr></tbody>
                                
                            </table></div><div class="dataTables_scrollFoot" style="overflow: hidden; border: 0px; width: 100%;"><div class="dataTables_scrollFootInner" style="width: 983px; padding-right: 17px;"><table class="table table-striped table-bordered nowrap dataTable" role="grid" style="margin-left: 0px; width: 983px;"><tfoot>
                                    <tr><th rowspan="1" colspan="1" style="width: 168px;">Name</th><th rowspan="1" colspan="1" style="width: 247px;">Position</th><th rowspan="1" colspan="1" style="width: 126px;">Office</th><th rowspan="1" colspan="1" style="width: 68px;">Age</th><th rowspan="1" colspan="1" style="width: 128px;">Start date</th><th rowspan="1" colspan="1" style="width: 95px;">Salary</th></tr>
                                </tfoot></table></div></div></div></div></div><div class="row"><div class="col-xs-12 col-sm-12 col-md-5"><div class="dataTables_info" id="scr-vrt-dt_info" role="status" aria-live="polite">Showing 1 to 20 of 20 entries</div></div><div class="col-xs-12 col-sm-12 col-md-7"></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- Scroll - Vertical table end -->
                <!-- Scroll - Vertical, Dynamic Height table start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Scroll - Vertical, Dynamic Height</h5>
                        <span>This example shows a vertically scrolling DataTable that
                            makes use of the CSS3 (vh) unit in order to dynamically
                            resize the viewport based on the browser window height. The
                            (vh) unit is effectively a percentage of the browser window
                            height. So the (50vh) used in this example is 50% of the
                            window height. The viewport size will update dynamically as
                            the window is resized.</span>

                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <div id="scr-vtr-dynamic_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-xs-12 col-sm-12 col-sm-12 col-md-6"></div><div class="col-xs-12 col-sm-12 col-md-6"><div id="scr-vtr-dynamic_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="scr-vtr-dynamic"></label></div></div></div><div class="row"><div class="col-xs-12 col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 983px; padding-right: 17px;"><table class="table table-striped table-bordered nowrap dataTable" role="grid" style="margin-left: 0px; width: 983px;"><thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="scr-vtr-dynamic" rowspan="1" colspan="1" style="width: 150px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="scr-vtr-dynamic" rowspan="1" colspan="1" style="width: 229px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="scr-vtr-dynamic" rowspan="1" colspan="1" style="width: 108px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="scr-vtr-dynamic" rowspan="1" colspan="1" style="width: 50px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="scr-vtr-dynamic" rowspan="1" colspan="1" style="width: 110px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="scr-vtr-dynamic" rowspan="1" colspan="1" style="width: 77px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; max-height: 50vh; width: 100%;"><table id="scr-vtr-dynamic" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="scr-vtr-dynamic_info" style="width: 100%;"><thead>
                                    <tr role="row" style="height: 20px;"><th class="sorting" aria-controls="scr-vtr-dynamic" rowspan="1" colspan="1" style="width: 150px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th class="sorting" aria-controls="scr-vtr-dynamic" rowspan="1" colspan="1" style="width: 229px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th class="sorting" aria-controls="scr-vtr-dynamic" rowspan="1" colspan="1" style="width: 108px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th class="sorting" aria-controls="scr-vtr-dynamic" rowspan="1" colspan="1" style="width: 50px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th class="sorting" aria-controls="scr-vtr-dynamic" rowspan="1" colspan="1" style="width: 110px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th class="sorting" aria-controls="scr-vtr-dynamic" rowspan="1" colspan="1" style="width: 77px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th></tr>
                                </thead><tfoot>
                                    <tr style="height: 20px;"><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 168px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 247px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 126px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 68px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 128px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 95px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th></tr>
                                </tfoot>
                                
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr role="row" class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr></tbody>
                                
                            </table></div><div class="dataTables_scrollFoot" style="overflow: hidden; border: 0px; width: 100%;"><div class="dataTables_scrollFootInner" style="width: 983px; padding-right: 17px;"><table class="table table-striped table-bordered nowrap dataTable" role="grid" style="margin-left: 0px; width: 983px;"><tfoot>
                                    <tr><th rowspan="1" colspan="1" style="width: 168px;">Name</th><th rowspan="1" colspan="1" style="width: 247px;">Position</th><th rowspan="1" colspan="1" style="width: 126px;">Office</th><th rowspan="1" colspan="1" style="width: 68px;">Age</th><th rowspan="1" colspan="1" style="width: 128px;">Start date</th><th rowspan="1" colspan="1" style="width: 95px;">Salary</th></tr>
                                </tfoot></table></div></div></div></div></div><div class="row"><div class="col-xs-12 col-sm-12 col-md-5"><div class="dataTables_info" id="scr-vtr-dynamic_info" role="status" aria-live="polite">Showing 1 to 20 of 20 entries</div></div><div class="col-xs-12 col-sm-12 col-md-7"></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- Scroll - Vertical, Dynamic Height table end -->
                <!-- Language - Comma Decimal Place table start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Language - Comma Decimal Place</h5>
                        <span>A dot (.) is used to mark the decimal place in Javascript,
                            however, many parts of the world use a comma (,) and other
                            characters such as the Unicode decimal separator (⎖) or a
                            dash (-) are often used to show the decimal place in a
                            displayed number.</span>

                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <div id="lang-dt_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-xs-12 col-sm-12 col-sm-12 col-md-6"><div class="dataTables_length" id="lang-dt_length"><label>Show <select name="lang-dt_length" aria-controls="lang-dt" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-xs-12 col-sm-12 col-md-6"><div id="lang-dt_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="lang-dt"></label></div></div></div><div class="row"><div class="col-xs-12 col-sm-12"><table id="lang-dt" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="lang-dt_info">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="lang-dt" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 155px;">Name</th><th class="sorting" tabindex="0" aria-controls="lang-dt" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 234px;">Position</th><th class="sorting" tabindex="0" aria-controls="lang-dt" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 111px;">Office</th><th class="sorting" tabindex="0" aria-controls="lang-dt" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 52px;">Age</th><th class="sorting" tabindex="0" aria-controls="lang-dt" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 112px;">Start date</th><th class="sorting" tabindex="0" aria-controls="lang-dt" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 77px;">Salary</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr role="row" class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>354</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr></tbody>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-xs-12 col-sm-12 col-md-5"><div class="dataTables_info" id="lang-dt_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div></div><div class="col-xs-12 col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="lang-dt_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="lang-dt_previous"><a href="#" aria-controls="lang-dt" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="lang-dt" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang-dt" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="lang-dt_next"><a href="#" aria-controls="lang-dt" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- Language - Comma Decimal Place table end -->
            </div>
        </div>
    </div>
    <!-- Page-body end -->
</div>
@endsection