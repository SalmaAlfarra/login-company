@extends('base::master')
@section('content')
    <section class="app-user-list">

                    <div class="dt-buttons btn-group flex-wrap ">
                        <a href="{{ route('customer.create') }}" class="btn add-new btn-primary mt-50"
                            style="margin: 20px;">Add customer</a>
                    </div>
                    <!-- list section start -->
                    <div class="card">

                        <div class="container">

                            <div class="card-datatable table-responsive pt-0">
                                <table class="court-list-table table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th></th>
                                            <th>الاسم الشخصي للعميل</th>
                                            <th>رقم الملف</th>
                                            <th>الإجراء</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- list section end -->
                </section>
    @endsection
            @section('js')
                <script src="{{asset('datatable/jquery.js')}}"></script>
                <script src="{{asset('datatable/jquery.dataTables.min.js')}}"></script>
                <script src="{{asset('datatable/datatables.bootstrap4.min.js')}}"></script>
                <script src="{{asset('datatable/dataTables.responsive.min.js')}}"></script>
                <script src="{{asset('datatable/responsive.bootstrap4.js')}}"></script>
                <script src="{{asset('datatable/datatables.checkboxes.min.js')}}"></script>
                <script src="{{asset('datatable/datatables.buttons.min.js')}}"></script>
                <script src="{{asset('datatable/jszip.min.js')}}"></script>
                <script src="{{asset('datatable/pdfmake.min.js')}}"></script>
                <script src="{{asset('datatable/vfs_fonts.js')}}"></script>
                <script src="{{asset('datatable/buttons.html5.min.js')}}"></script>
                <script src="{{asset("datatable/buttons.print.min.js")}}"></script>
                <script src="{{asset("datatable/dataTables.rowGroup.min.js")}}"></script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <script type="text/javascript">
                    $(function () {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        // ################## Index #################################

                        var table = $('.court-list-table').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: "{{ route('customer.index') }}",
                            /*  "language": {
                                "url": "{{ asset('datatableLang/'.app()->getLocale() . '.json') }}"
                            }, */
                            columns: [{
                                    data: 'id',
                                    name: 'id'
                                },
                                {
                                    data: 'full_name',
                                    name: 'full_name'
                                },
                                {
                                    data: 'file_number',
                                    name: 'file_number'
                                },
                                {
                                    data: 'action',
                                    name: 'action',
                                    orderable: false,
                                    searchable: false
                                },
                            ],
                            buttons: [{
                                text: 'Add customer',
                                className: 'add-new btn btn-primary mt-50',
                                attr: {
                                    'data-toggle': 'modal',
                                    'data-target': '#modals-slide-in'
                                },
                                init: function (api, node, config) {
                                    $(node).removeClass('btn-secondary');
                                }
                            }],
                            responsive: {
                                details: {
                                    display: $.fn.dataTable.Responsive.display.modal({
                                        header: function (row) {
                                            var data = row.data();
                                            return 'Details of ' + data['full_name'];
                                        }
                                    }),
                                    type: 'column',
                                    renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                                        tableClass: 'table',
                                        columnDefs: [{
                                                targets: 2,
                                                visible: false
                                            },
                                            {
                                                targets: 3,
                                                visible: false
                                            }
                                        ]
                                    })
                                }
                            },

                        });

                        // ################## Delete ####################################

                        $('body').on('click', '.deletecourt', function () {

                            var customer_id = $(this).data("id");
                            Swal.fire({
                                title: '{{ __('messages.are you sure?') }}',
                                text: "{{ __('messages.you will not be able to revert this!') }}",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: '{{ __('messages.yes, delete it!') }}'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $.ajax({
                                    data: {
                                    "_token": "{{ csrf_token() }}",
                                    "customer_id": customer_id
                                            },
                                        type: "DELETE",
                                        url: "{{ route('customer.store') }}" +
                                            '/' + customer_id,
                                        success: function (data) {
                                            table.draw();
                                        },
                                        error: function (data) {
                                            console.log('Error:', data);
                                        }
                                    });
                                    Swal.fire(
                                        'هل انت متاكد من الحذف',
                                        'تم الحذف بنجاح',
                                    'تم الحذف بنجاح',
                                    )
                                }
                            });
                        });


                    });

                    </script>

                <script>
                    $(window).on('load', function () {
                        if (feather) {
                            feather.replace({
                                width: 14,
                                height: 14
                            });
                        }
                    })

                </script>
            @endsection


