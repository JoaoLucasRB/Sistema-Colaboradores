<style>
    html,
    body {
        padding: 0;
        margin: 0;
    }

    body {
        --primary-color: #6D5BD0;
        --secondary-color: #f8f9fa;
        --primary-hover: #6150ba;
        --secondary-hover: #eee;
        font-family: 'Inter', sans-serif;
    }

    .navbar {
        padding: 0;
        box-sizing: border-box;
        border-bottom: 1px solid var(--secondary-hover);
    }

    .navbar-brand {
        padding: 0;
        display: flex;
        align-items: center;
    }

    .company-logo {
        padding: 1vh;
        margin: 0;
        height: 8vh;
        width: 5vw;
        background-color: var(--primary-color);
        margin-right: 1rem;
        fill: var(--secondary-color);
        border-right: 1px solid var(--secondary-hover);
    }

    .company-logo>svg {
        height: 3rem;
        width: 3rem;
        fill: var(--secondary-color)
    }

    .company-name {
        font-size: 2rem;
        color: var(--primary-color) !important;
        font-weight: 300;
    }

    .company-name:hover {
        cursor: pointer;
    }

    .container-tools {
        height: 100%;
        display: flex;
        align-items: center;
    }

    .container-tool-user {
        padding-right: 2rem;
        fill: var(--primary-color);
    }

    .container-tool-user:hover {
        fill: var(--primary-hover);
    }

    .container-tool-notification {
        padding-right: 2rem;
        width: auto;
        fill: var(--primary-color);
    }

    .container-tool-notification>svg {
        height: 2rem;
        width: 2rem;
    }

    .container-tool-notification:hover {
        fill: var(--primary-hover);
    }

    .container-side-menu {
        background-color: var(--secondary-color);
        border-right: 1px solid var(--secondary-hover);
        width: 5.3vw;
        height: 90vh;
        box-sizing: border-box;
        transition: width 0.3s ease-in-out;
        overflow-x: hidden;
    }

    .container-side-menu.active {
        width: 17vw;
    }

    .container-side-menu-action-btn {
        width: 100%;
        height: 6vh;
        background-color: var(--primary-color);
        display: flex;
        justify-content: center;
        align-items: center;
        display: flex;
        justify-content: flex-end;
        transition: background-color 0.3s ease-in-out;
    }

    .container-side-menu-action-btn:hover {
        background-color: var(--primary-hover);
        cursor: pointer;
    }

    .container-side-menu-action-btn>svg {
        transition: transform 0.3s ease-in-out;
    }

    .container-side-menu.active>.container-side-menu-action-btn>svg {
        transform: rotateY(3.142rad);
    }

    .side-menu-action-btn {
        fill: var(--secondary-color);
        height: 2rem;
        width: 5.3vw;
    }

    .container-side-menu-item {
        display: flex;
        align-items: center;
        width: 5.3vw;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        color: var(--primary-color);
        fill: var(--primary-color);
        transition: width 0.3s ease-in-out, background-color 0.3s ease-in-out, color 0.3s ease-in-out, fill 0.3s ease-in-out;
    }

    .container-side-menu.active>.container-side-menu-item.active {
        background-color: var(--primary-color);
        color: var(--secondary-color);
        fill: var(--secondary-color);
    }

    .container-side-menu-item:hover {
        background-color: var(--secondary-hover);
        cursor: pointer;
    }

    .container-side-menu.active>.container-side-menu-item.active:hover {
        background-color: var(--primary-hover);
    }

    .container-side-menu.active>.container-side-menu-item {
        width: 17vw;
    }

    .side-menu-item-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 5.3vw;
        height: 6vh;
    }

    .side-menu-item-icon>svg {
        height: 3vh;
        width: 5.3vw;
    }

    .side-menu-item-text {
        font-size: 1.2em;
        font-weight: 400;
    }

    .container-side-menu-item-content {
        width: 100%;
        height: 0;
        overflow: hidden;
        transition: height 0.3s ease-in-out;
    }

    .container-side-menu.active>.container-side-menu-item-content.active {
        height: 10vh;
    }

    .container-side-menu-item-content>ul {
        list-style-type: none;
    }

    .container-side-menu-item-content>ul>li {
        padding-top: 1em;
    }

    .container-side-menu-item-content>ul>li>a {
        color: var(--primary-color) !important;
        font-size: 1.1em;
    }

    .container-side-menu-item-content>ul>li>a:hover {
        color: var(--primary-hover) !important;
        font-weight: 500;
        cursor: pointer;
        text-decoration: none;
    }

    .wrapper-section {
        display: flex;
    }

    .container-section {
        padding: 2em;
        width: 100%;
    }

    .container-content {
        background-color: var(--secondary-color);
        width: 100%;
        height: 100%;
        border-radius: 10px;
    }

    .wrapper-footer {
        width: 100%;
        background-color: var(--primary-color);
        color: var(--secondary-color);
        box-sizing: border-box;
        border-top: var(--primary-hover);
    }

    .wrapper-footer>.container-attribution {
        padding: 1em;
    }

    .wrapper-footer>.container-attribution>ul>li a {
        color: #DDA448;
    }

    .ui-block {
        position: absolute;
        top: 0;
        width: 100%;
        height: 115vh;
        z-index: 2000;
        display: none;
        cursor: wait;
    }

    .ui-block .ui-block-bg {
        width: 100%;
        height: 100%;
        position: absolute;
        background-color: #000;
        opacity: 0.3;
        z-index: 2001;
    }

    .ui-block .ui-block-spinner {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ui-block .ui-block-spinner .spinner-border {
        height: 25em;
        width: 25em;
        color: var(--primary-color);
        z-index: 2002;
    }

    .ui-block .ui-block-spinner .spinner-border.reverse {
        color: var(--secondary-color);
        animation-direction: reverse;
    }

    .ui-block .ui-block-spinner .spinner-border.outer {
        height: 26em;
        width: 26em;
    }

    .ui-block .ui-block-spinner .spinner-border.inner {
        height: 24em;
        width: 24em;
    }

    .dropdown-item:focus {
        color: var(--secondary-color);
        background-color: var(--primary-color) !important;
    }

    .container-profile {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1em 2em;
        width: 20em;
    }

    .profile-icon {
        border: 2px solid var(--primary-color);
        width: fit-content;
        border-radius: 100%;
    }

    .profile-name {
        padding-left: 2em;
    }

    @media (max-height: 720px) {
        .container-side-menu {
            height: 118vh;
        }

        .container-side-menu.active {
            width: 22vw;
        }

        .container-side-menu.active>.container-side-menu-item {
            width: 18vw;
        }
    }
</style>