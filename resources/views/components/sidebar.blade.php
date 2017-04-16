
<div class="ui thin sidebar inverted  vertical  menu">
    <a class="item">
        <i class="home icon"></i>
        Home
    </a>
    <a class="item">
        <i class="block layout icon"></i>
        Topics
    </a>
    <a class="item">
        <i class="smile icon"></i>
        Friends
    </a>
    <a class="item">
        <i class="calendar icon"></i>
        History
    </a>
</div>

@push('scripts')
<script>

    $('.ui.sidebar').first()
            .sidebar('setting', 'dimPage', false)
            .sidebar('attach events', '.menu .click')
            ;

</script>
@endpush