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
                 <a href="{{ url('admin/paquete/create') }}" class="btn btn-outline-primary">AÑADIR</a>
               </div>
               <div class="card-block">
                  <div class="dt-responsive table-responsive">
                     <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        
                        <div class="row">
                           <div class="col-xs-12 col-sm-12">
                              <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                 <thead>
                                    <tr role="row">
                                       <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 155px;">Name</th>
                                       <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 234px;">Position</th>
                                       <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 111px;">Office</th>
                                       <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 52px;">Age</th>
                                       <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 112px;">Start date</th>
                                       <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 77px;">Salary</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr role="row" class="odd">
                                       <td class="sorting_1">Airi Satou</td>
                                       <td>Accountant</td>
                                       <td>Tokyo</td>
                                       <td>33</td>
                                       <td>2008/11/28</td>
                                       <td>$162,700</td>
                                    </tr>
                                    <tr role="row" class="even">
                                       <td class="sorting_1">Ashton Cox</td>
                                       <td>Junior Technical Author</td>
                                       <td>San Francisco</td>
                                       <td>66</td>
                                       <td>2009/01/12</td>
                                       <td>$86,000</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                       <td class="sorting_1">Bradley Greer</td>
                                       <td>Software Engineer</td>
                                       <td>London</td>
                                       <td>41</td>
                                       <td>2012/10/13</td>
                                       <td>$132,000</td>
                                    </tr>
                                    <tr role="row" class="even">
                                       <td class="sorting_1">Brielle Williamson</td>
                                       <td>Integration Specialist</td>
                                       <td>New York</td>
                                       <td>61</td>
                                       <td>2012/12/02</td>
                                       <td>$372,000</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                       <td class="sorting_1">Cedric Kelly</td>
                                       <td>Senior Javascript Developer</td>
                                       <td>Edinburgh</td>
                                       <td>22</td>
                                       <td>2012/03/29</td>
                                       <td>$433,060</td>
                                    </tr>
                                    <tr role="row" class="even">
                                       <td class="sorting_1">Charde Marshall</td>
                                       <td>Regional Director</td>
                                       <td>San Francisco</td>
                                       <td>36</td>
                                       <td>2008/10/16</td>
                                       <td>$470,600</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                       <td class="sorting_1">Colleen Hurst</td>
                                       <td>Javascript Developer</td>
                                       <td>San Francisco</td>
                                       <td>39</td>
                                       <td>2009/09/15</td>
                                       <td>$205,500</td>
                                    </tr>
                                    <tr role="row" class="even">
                                       <td class="sorting_1">Dai Rios</td>
                                       <td>Personnel Lead</td>
                                       <td>Edinburgh</td>
                                       <td>35</td>
                                       <td>2012/09/26</td>
                                       <td>$217,500</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                       <td class="sorting_1">Garrett Winters</td>
                                       <td>Accountant</td>
                                       <td>Tokyo</td>
                                       <td>63</td>
                                       <td>2011/07/25</td>
                                       <td>$170,750</td>
                                    </tr>
                                    <tr role="row" class="even">
                                       <td class="sorting_1">Gloria Little</td>
                                       <td>Systems Administrator</td>
                                       <td>New York</td>
                                       <td>59</td>
                                       <td>2009/04/10</td>
                                       <td>$237,500</td>
                                    </tr>
                                 </tbody>
                                 <tfoot>
                                    <tr>
                                       <th rowspan="1" colspan="1">Name</th>
                                       <th rowspan="1" colspan="1">Position</th>
                                       <th rowspan="1" colspan="1">Office</th>
                                       <th rowspan="1" colspan="1">Age</th>
                                       <th rowspan="1" colspan="1">Start date</th>
                                       <th rowspan="1" colspan="1">Salary</th>
                                    </tr>
                                 </tfoot>
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
   <!-- Page-body end -->
</div>
@endsection