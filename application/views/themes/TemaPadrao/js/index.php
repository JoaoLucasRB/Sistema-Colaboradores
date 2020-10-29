<script>
    $(document).ready(() => {
        buildListeners();
    });

    const buildListeners = () => {
        $(".container-side-menu-action-btn").click(() => addClassActive('.container-side-menu'));
        $(".container-side-menu-item").click(function() {
            if ($(".container-side-menu ").hasClass("active")) {
                addClassActive('.container-side-menu-item')
                showSideMenuItemContent($(this));
            }
        });
        // $(".container-side-menu-item").click(function() {
        //     if ($(this).hasClass('active'))
        //         $(this).removeClass('active');
        //     else
        //         $(this).addClass('active')
        // });
        // $(".side-menu-action-btn").click(() => {
        //     $containerSideMenu = $(".container-side-menu");
        //     if ($containerSideMenu.hasClass('active'))
        //         $containerSideMenu.removeClass('active');
        //     else
        //         $containerSideMenu.addClass('active')
        // });
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