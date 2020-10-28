<script>
    $(document).ready(() => {
        buildListeners();
    });

    const buildListeners = () => {
        $(".container-menu-item").click(function() {
            console.log('click')
            if ($(this).hasClass('active'))
                $(this).removeClass('active');
            else
                $(this).addClass('active')
        });
    }
</script>