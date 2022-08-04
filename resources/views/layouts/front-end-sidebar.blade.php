<!DOCTYPE html>
<html>
<head>
<title>{{ config('app.name', 'Blog') }}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}

.form-row {
  overflow:hidden; margin-bottom:15px; 
}
.form-row .frm-col8 {
  width:66%; float:left;
}

.form-row .frm-col4 {
  width:34%; float:left;
}

.form-row .frm-col12 {
  width:100%; float:left;
}

</style>
<script src="{!! url('assets/tinymce/js/tinymce.min.js') !!}"></script>
</head>
<body class="w3-light-grey">
@include('layouts.includes.navbar')  
<div class="w3-content" style="max-width:1600px">
@include('layouts.includes.header')
@yield('content')
@include('layouts.includes.sidebar')
<!-- END w3-content -->
</div>
@include('layouts.includes.footer')
<script src="{{ asset('assets/js/datatables-simple-demo.js') }}"></script>
    <script>
    tinymce.init({
      selector: 'textarea#description',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image a11ycheck addcomment showcomments casechange checklist code export formatpainter  editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
  
</body>
</html>
