<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('/public/frontend/assets/images/logo/1723172766206.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!--Include the JS & CSS-->
    <link rel="stylesheet" href="/public/richtexteditor/richtexteditor/rte_theme_default.css" />
    <script type="text/javascript" src="/public/richtexteditor/richtexteditor/rte.js"></script>
    <script type="text/javascript" src='/public/richtexteditor/richtexteditor/plugins/all_plugins.js'></script>


    @stack('styles') <!-- For additional styles in child views -->
</head>

<style>
    table {
        /* Ensures consistent column width */
        width: 100%;
        /* Adjust the table to fill its container */
    }

    th {
        white-space: nowrap;
        /* Prevents wrapping */
        overflow: hidden;
        /* Hides text overflow */
        text-overflow: ellipsis;
        /* Adds "..." if text is too long */
    }
</style>

<body style="background-color: #121212" class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.includes.header')
        <!-- Navbar -->
        @include('admin.includes.top-bar')

        <!-- Sidebar -->
        @include('admin.includes.side-bar')

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Content Header -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="mb-2 row">
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                @yield('breadcrumb')
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content') <!-- Dynamic Content -->
                </div>
            </section>
        </div>

        <!-- Footer -->
        @include('admin.includes.footer')
        @include('admin.includes.script')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>


    <script>
        $(document).ready(function() {
            if (!$.fn.DataTable.isDataTable('#example1')) {
                $('#example1').DataTable();
            }
        });
    </script>

    <style>
        table td,
        table th {
            white-space: normal !important;
            word-wrap: break-word;
        }
    </style>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
                placeholder: 'Write here...',
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'codeview']]
                ],
                callbacks: {
                    onImageUpload: function(files) {
                        let editor = $(this);
                        for (let i = 0; i < files.length; i++) {
                            let reader = new FileReader();
                            reader.onload = function(e) {
                                editor.summernote('insertImage', e.target.result);
                            }
                            reader.readAsDataURL(files[i]);
                        }
                    }
                }
            });
        });
    </script>


    <script>
        var editor1 = new RichTextEditor("#div_editor1");
        //editor1.setHTMLCode("Use inline HTML or setHTMLCode to init the default content.");
    </script>

    @stack('scripts') <!-- For additional scripts in child views -->
</body>

</html>
