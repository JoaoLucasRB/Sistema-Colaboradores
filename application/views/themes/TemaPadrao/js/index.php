<script>
    $(document).ready(() => {
        buildListenersTheme();
    });

    const buildListenersTheme = () => {
        $(".container-side-menu-action-btn").click(() => addClassActive('.container-side-menu'));
        $(".container-side-menu-item").click(function() {
            if ($(".container-side-menu ").hasClass("active")) {
                addClassActive('.container-side-menu-item')
                showSideMenuItemContent($(this));
            }
        });

        $(document).ajaxStart(function() {
            $(".ui-block").show();
        });
        $(document).ajaxComplete(function() {
            $(".ui-block").hide();
        });
    }

    const addClassActive = (selectorString) => {
        const $elementReference = $(selectorString);
        if ($elementReference.hasClass('active'))
            $elementReference.removeClass('active');
        else
            $elementReference.addClass('active')
    }

    const showSideMenuItemContent = ($menuItemReference) => {
        const $menuItemContentReference = $(`.container-side-menu-item-content[name='${$menuItemReference.attr('name')}']`);
        console.log($menuItemContentReference)
        if ($menuItemContentReference.hasClass('active'))
            $menuItemContentReference.removeClass('active');
        else
            $menuItemContentReference.addClass('active')
    }
</script>