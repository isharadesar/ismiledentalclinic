



<!-- jQuery 3 -->
{{--<script src="{{asset('backend/js/jquery.min.js')}}"></script>--}}

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<!-- Bootstrap 3.3.7 -->
<script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/js/adminlte.min.js')}}"></script>

<script src="{{asset('backend/js/lightbox.min.js')}}"></script>

<script src="{{asset('backend/js/ckeditor.js')}}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

<script>
    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;

                // for (i = 0; i < filesAmount; i++) {
                for (i = 0; i < 1; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {

                        // $($.parseHTML('<img class="p-3 mb-2" style="height: 200px; width: auto;" >')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        $($.parseHTML('<img class="p-3 mb-2 table-thumbnail-img" >')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#gallery-photo-add').on('change', function() {
            imagesPreview(this, 'div.gallery');
        });
    });
</script>


<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),{
            toolbar: [ 'bold', 'italic','link', 'bulletedList', 'numberedList', 'blockQuote','undo','redo' ],
        } )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );


</script>


</body>

<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
</footer>
</html>