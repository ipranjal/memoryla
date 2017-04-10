@extends('layouts.main')


@section('main')
<div class="ui stackable grid container">

    <div class="two wide column"></div> 

    <div class="twelve wide column">  
        <div class="ui raised segment">

            <center><h5>"Keep a diary and someday it will keep you"</h5></center><br>
            <form method="post" action="{{url('/diary/editor')}}">
            <textarea name="content"> Dear Diary, </textarea>
            {{csrf_field()}}
            <br>
            <center> <button type="submit" class="ui green submit button" >Post</button></center>
            </form>
        </div>
    </div>    


    <div class="two wide column"></div>    

</div>
@endsection

@push('scripts')
<script src="{{url('js/tinymce/tinymce.min.js')}}"></script>
<script>
tinymce.init({
    selector: 'textarea',
    plugins: [
        'advlist autolink autosave lists link image charmap preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media table contextmenu directionality',
        'emoticons autoresize template paste  textpattern imagetools codesample toc'
    ],
    toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    toolbar2: 'restoredraft | preview media |  emoticons | codesample',
    file_browser_callback : elFinderBrowser,
});

function elFinderBrowser (field_name, url, type, win) {
  tinymce.activeEditor.windowManager.open({
    file: '<?= route('elfinder.tinymce4') ?>',// use an absolute path!
    title: 'elFinder 2.0',
    width: 900,
    height: 450,
    resizable: 'yes'
  }, {
    setUrl: function (url) {
      win.document.getElementById(field_name).value = url;
    }
  });
  return false;
}
</script>

@endpush