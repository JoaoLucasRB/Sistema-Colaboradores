<style>
    html,
    body {
        padding: 0;
        margin: 0;
    }

    body {
        --primary-color: #6D5BD0;
        --secondary-color: #fff;
        --primary-hover: #6150ba;
        --secondary-hover: #eee;
        font-family: 'Inter', sans-serif;
    }

    .wrapper-header {
        height: 9vh;
        width: 100%;
        background-color: var(--secondary-color);
        display: flex;
        position: absolute;
        z-index: 2;
        /* -webkit-box-shadow: 0px 2px 13px 0px rgba(0, 0, 0, 0.38);
        -moz-box-shadow: 0px 2px 13px 0px rgba(0, 0, 0, 0.38);
        box-shadow: 0px 2px 13px 0px rgba(0, 0, 0, 0.38); */
    }

    .wrapper-header>.container-logo {
        height: 100%;
        width: 6em;
        padding: 1em;
        background-color: var(--primary-color);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wrapper-header>.container-logo>.company-logo {
        height: 4em;
        fill: var(--secondary-color);
        font-weight: bold;
        margin: 0;
    }

    .wrapper-header>.container-logo>.company-logo:hover {
        cursor: pointer;
    }

    .wrapper-header>.container-name {
        height: 100%;
        padding: 1em;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wrapper-header>.container-name>.company-name:hover {
        cursor: pointer;
    }

    .wrapper-header>.container-name>.company-name {
        font-size: 2.5em;
        color: var(--primary-color);
        font-weight: 300;
        margin: 0;
    }

    .wrapper-header>.container-tools {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .wrapper-header>.container-tools>.tool-notification {
        fill: var(--primary-color);
        height: 2.5em;
        width: 2.5em;
    }

    .wrapper-header>.container-tools>.tool-notification:hover {
        fill: var(--primary-hover);
        cursor: pointer;
    }

    .wrapper-header>.container-tools>.tool-user {
        margin: 0 1.5em;
        fill: var(--primary-color);
        height: 2.5em;
        width: 2.5em;
    }

    .wrapper-header>.container-tools>.tool-user:hover {
        fill: var(--primary-hover);
        cursor: pointer;
    }

    /* .wrapper-header > .container-tools > .tool-user > svg {
        height: 2em;
        width: 2em;
    } */

    .wrapper-section {
        height: 100vh;
        width: 100%;
        display: flex;
        position: relative;
        top: 9vh;
    }

    .wrapper-content {
        height: 100%;
        width: 94vw;
        display: flex;
        flex: 1 1 auto;
        flex-direction: column;
        justify-content: space-between;
        /* background: rgb(237, 232, 233);
        background: linear-gradient(315deg, rgba(237, 232, 233, 1) 0%, rgba(255, 255, 255, 1) 100%); */
        background-color: #F9F4F5;
        padding: 2.5em;
        position: absolute;
        left: 5vw;
    }

    .container-content {
        height: 100%;
        background-color: var(--secondary-color);
        border-radius: 10px;
        padding: 1.5em;
        /* -webkit-box-shadow: 2px 2px 13px 0px rgba(0, 0, 0, 0.38);
        -moz-box-shadow: 2px 2px 13px 0px rgba(0, 0, 0, 0.38);
        box-shadow: 2px 2px 13px 0px rgba(0, 0, 0, 0.38); */
    }

    .wrapper-section>.container-side-menu {
        height: 100%;
        width: 6em;
        background-color: var(--secondary-color);
        padding: 1em;
        transition: width 0.3s ease-in-out;
        position: absolute;
        z-index: 1;
        -webkit-box-shadow: 2px 0px 13px 0px rgba(0, 0, 0, 0.38);
        -moz-box-shadow: 2px 0px 13px 0px rgba(0, 0, 0, 0.38);
        box-shadow: 2px 0px 13px 0px rgba(0, 0, 0, 0.38);
    }

    .wrapper-section>.container-side-menu:hover {
        width: 22em;
    }

    .wrapper-section>.container-side-menu>.container-menu-item>div:first-child {
        transition: background-color 0.3s ease-in-out;
    }

    .wrapper-section>.container-side-menu:hover>.container-menu-item.active>div:first-child {
        background-color: var(--primary-color);
    }

    .wrapper-section>.container-side-menu>.container-menu-item>div:first-child {
        display: flex;
        align-items: center;
    }

    .wrapper-section>.container-side-menu>.container-menu-item:hover>div:first-child {
        cursor: pointer;
        background-color: var(--secondary-hover);
    }

    .wrapper-section>.container-side-menu:hover>.container-menu-item.active:hover>div:first-child {
        background-color: var(--primary-hover);
    }

    .wrapper-section>.container-side-menu>.container-menu-item .menu-item-icon {
        height: 4em;
        width: 4em;
        padding: 1em;
        fill: var(--primary-color);
        transition: fill 0.3s ease-in-out;
    }

    .wrapper-section>.container-side-menu:hover>.container-menu-item.active .menu-item-icon {
        fill: var(--secondary-color);
    }

    .wrapper-section>.container-side-menu>.container-menu-item .menu-item-text {
        color: var(--primary-color);
        width: auto;
        overflow: hidden;
        font-size: 1.2em;
        transition: color 0.3s ease-in-out;
    }

    .wrapper-section>.container-side-menu:hover>.container-menu-item.active .menu-item-text {
        color: var(--secondary-color);
    }

    .wrapper-section>.container-side-menu>.container-menu-item>.item-list {
        height: 0;
        overflow: hidden;
        transition: height 0.3s ease-in-out;
    }

    .wrapper-section>.container-side-menu:hover>.container-menu-item.active>.item-list {
        height: 5em;
    }

    .wrapper-section>.container-side-menu>.container-menu-item>.item-list>ul {
        list-style-type: none;
    }

    .wrapper-section>.container-side-menu>.container-menu-item>.item-list>ul>li {
        color: var(--primary-color);
        padding-top: 1em;
        transition: color 0.3s ease-in-out;
    }

    .wrapper-section>.container-side-menu>.container-menu-item>.item-list>ul>li:hover {
        color: var(--primary-hover);
        font-weight: 500;
        cursor: pointer;
    }

    .wrapper-footer {
        width: 100%;
        background-color: var(--primary-color);
        color: var(--secondary-color);
        position: absolute;
        z-index: 2;
        top: 109vh;
    }

    .wrapper-footer>.container-attribution {
        padding: 1em;
    }

    .wrapper-footer>.container-attribution>ul>li a {
        color: #DDA448;
    }
</style>