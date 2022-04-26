<!-- Required vendors -->
<script src="https://kit.fontawesome.com/aa028fd33c.js" crossorigin="anonymous"></script>
<script src="{{url('public/admin')}}/vendor/global/global.min.js"></script>
<script src="{{url('public/admin')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{url('public/admin')}}/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="{{url('public/admin')}}/js/custom.min.js"></script>
<script src="{{url('public/admin')}}/js/deznav-init.js"></script>
<script src="{{url('public/admin')}}/vendor/owl-carousel/owl.carousel.js"></script>
<!-- Datatable -->
<script src="{{url('public/admin')}}/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{url('public/admin')}}/js/plugins-init/datatables.init.js"></script>

<!-- Chart piety plugin files -->
<script src="{{url('public/admin')}}/vendor/peity/jquery.peity.min.js"></script>

<!-- Apex Chart -->
<script src="{{url('public/admin')}}/vendor/apexchart/apexchart.js"></script>

<!-- Dashboard 1 -->
<script src="{{url('public/admin')}}/js/dashboard/dashboard-1.js"></script>
<script src="https://cdn.tiny.cloud/1/kexg697506qd0eiwt6t8a4kd9xvcgmgrxlwobxgrqk52z8vy/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea.editor',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        importcss_append: true,
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image imagetools table',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>
