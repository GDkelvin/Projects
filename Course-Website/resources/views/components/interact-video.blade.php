<html>
<head>
  <link type="text/css" rel="stylesheet" media="all" href="{{url('h5p-standalone-1.3.x/dist/styles/h5p.css')}}" />
  <script type="text/javascript" src="{{asset('h5p-standalone-1.3.x/dist/js/h5p-standalone-main.min.js')}}"></script>
  <script type="text/javascript" defer>
    (function($) {
      $(function() {
        $('.h5p-container').h5p({
          frameJs: "{{asset('h5p-standalone-1.3.x/dist/js/h5p-standalone-frame.min.js')}}",
          frameCss: "{{url('h5p-standalone-1.3.x/dist/styles/h5p.css')}}",
          h5pContent: "{{asset('h5p-standalone-1.3.x/workspace/content-example-3')}}" <!-- Name of specific H5P content folder goes here -->
        });
      });
    })(H5P.jQuery);
  </script>
</head>
  <body>
    <div class="h5p-container"></div>
  </body>
</html>
