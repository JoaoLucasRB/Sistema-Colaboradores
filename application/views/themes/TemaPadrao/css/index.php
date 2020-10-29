<!-- <style>
    html,
    body {
        padding: 0;
        margin: 0;
    }

    body {
        --primary-color: #6D5BD0;
        --secondary-color: #f8f9fa!;
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
</style> -->

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
        /* max-height: 4rem; */
        /* max-width: 5rem; */
        /* width: auto; */
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
        width: 16vw;
    }

    .container-side-menu-action-btn {
        /* border-top: 1px solid var(--primary-hover); */
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
        width: 16vw;
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
        color: var(--primary-color);
        font-size: 1.1em;
        padding-top: 1em;
    }

    .container-side-menu-item-content>ul>li:hover {
        color: var(--primary-hover);
        font-weight: 500;
        cursor: pointer;
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
</style>