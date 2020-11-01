<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Teste Elofy</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css" crossorigin="anonymous">
    <?php $this->load->view("themes/TemaPadrao/css/index.php"); ?>
    <?php $this->load->view($css); ?>
</head>

<body>
    <div>
        <div class='row'>
            <div class='col'>
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand company-name" href="#">
                        <!-- <svg class='company-logo' xmlns="http://www.w3.org/2000/svg" id="bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512">
                        <path d="m13.03 1.87-10.99-1.67c-.51-.08-1.03.06-1.42.39-.39.34-.62.83-.62 1.34v21.07c0 .55.45 1 1 1h3.25v-5.25c0-.97.78-1.75 1.75-1.75h2.5c.97 0 1.75.78 1.75 1.75v5.25h4.25v-20.4c0-.86-.62-1.59-1.47-1.73zm-7.53 12.88h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm5 9h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75z" />
                        <path d="m22.62 10.842-7.12-1.491v14.649h6.75c.965 0 1.75-.785 1.75-1.75v-9.698c0-.826-.563-1.529-1.38-1.71zm-2.37 10.158h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75zm0-3h-1.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h1.5c.414 0 .75.336.75.75s-.336.75-.75.75z" />
                    </svg> -->
                        <svg class='company-logo' version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve">
                            <g>
                                <g>
                                    <rect x="168" y="160" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="168" y="192" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="168" y="224" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="168" y="256" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="200" y="160" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="200" y="192" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="200" y="224" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="200" y="256" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="232" y="160" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="232" y="192" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="232" y="224" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="232" y="256" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="264" y="160" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="200" y="128" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="232" y="128" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="264" y="128" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="264" y="192" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="264" y="224" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="264" y="256" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="296" y="160" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="296" y="192" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="296" y="224" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="296" y="256" width="16" height="16" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M472.009,120c-0.003,0-0.006,0-0.009,0H352V8c0.003-4.416-3.575-7.997-7.991-8c-0.003,0-0.006,0-0.009,0H136    c-4.416-0.003-7.997,3.575-8,7.991c0,0.003,0,0.006,0,0.009v112H8c-4.416-0.003-7.997,3.575-8,7.991c0,0.003,0,0.006,0,0.009v288    c-0.003,4.416,3.575,7.997,7.991,8c0.003,0,0.006,0,0.009,0h16.723c-0.464,2.642-0.706,5.318-0.723,8v40    c-0.003,4.416,3.575,7.997,7.991,8c0.003,0,0.006,0,0.009,0h416c4.416,0.003,7.997-3.575,8-7.991c0-0.003,0-0.006,0-0.009v-40    c-0.016-2.682-0.258-5.358-0.723-8H472c4.416,0.003,7.997-3.575,8-7.991c0-0.003,0-0.006,0-0.009V128    C480.003,123.584,476.425,120.003,472.009,120z M344,344c0,8.837-7.163,16-16,16s-16-7.163-16-16s7.163-16,16-16    C336.832,328.011,343.989,335.168,344,344z M152,328c8.837,0,16,7.163,16,16s-7.163,16-16,16s-16-7.163-16-16    C136.011,335.168,143.168,328.011,152,328z M104,464H40v-32c0-17.673,14.327-32,32-32s32,14.327,32,32V464z M56,368    c0-8.837,7.163-16,16-16s16,7.163,16,16s-7.163,16-16,16C63.168,383.989,56.011,376.832,56,368z M105.212,397.425    c-3.017-2.91-6.4-5.414-10.064-7.449c12.202-12.784,11.731-33.04-1.053-45.243s-33.04-11.731-45.243,1.053    c-11.803,12.365-11.803,31.824,0,44.189c-7.636,4.238-13.98,10.467-18.358,18.024H16V136h112v187.056    c-10.986,12.327-10.615,31.039,0.852,42.92C116.852,372.613,108.253,384.053,105.212,397.425z M184,464h-64v-56    c0-17.673,14.327-32,32-32s32,14.327,32,32V464z M280,464h-80v-56c0-22.091,17.909-40,40-40c22.091,0,40,17.909,40,40V464z     M216,328c0-13.255,10.745-24,24-24s24,10.745,24,24s-10.745,24-24,24C226.751,351.986,216.014,341.249,216,328z M288.722,380.495    c-5.357-9.444-13.327-17.139-22.953-22.16c16.897-14.232,19.057-39.467,4.826-56.364c-14.232-16.897-39.467-19.057-56.364-4.826    c-16.897,14.232-19.057,39.467-4.826,56.364c1.468,1.743,3.082,3.357,4.826,4.826c-9.626,5.021-17.596,12.716-22.953,22.16    c-4.206-6-9.722-10.965-16.13-14.519c12.265-12.547,12.037-32.662-0.511-44.927c-8.079-7.898-19.744-10.91-30.637-7.913V16h192    v297.136c-2.607-0.719-5.296-1.101-8-1.136c-17.626-0.047-31.953,14.204-32,31.831c-0.022,8.248,3.151,16.185,8.852,22.145    C298.444,369.53,292.928,374.495,288.722,380.495z M360,432v32h-64v-56c0-17.673,14.327-32,32-32c17.673,0,32,14.327,32,32V432z     M440,464h-64v-32c0-17.673,14.327-32,32-32c17.673,0,32,14.327,32,32V464z M392,368c0-8.837,7.163-16,16-16s16,7.163,16,16    s-7.163,16-16,16C399.168,383.989,392.011,376.832,392,368z M464,408h-14.494c-4.378-7.557-10.722-13.786-18.358-18.024    c12.202-12.784,11.731-33.04-1.053-45.243c-12.784-12.202-33.04-11.731-45.243,1.053c-11.803,12.365-11.803,31.824,0,44.189    c-3.664,2.035-7.048,4.539-10.064,7.449c-3.04-13.372-11.64-24.812-23.64-31.449c11.467-11.881,11.839-30.593,0.853-42.92V136h112    V408z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="376" y="184" width="16" height="128" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="424" y="184" width="16" height="128" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="40" y="184" width="16" height="128" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="88" y="184" width="16" height="128" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M288.009,32c-0.003,0-0.006,0-0.009,0h-96c-4.416-0.003-7.997,3.575-8,7.991c0,0.003,0,0.006,0,0.009v64    c-0.003,4.416,3.575,7.997,7.991,8c0.003,0,0.006,0,0.009,0h96c4.416,0.003,7.997-3.575,8-7.991c0-0.003,0-0.006,0-0.009V40    C296.003,35.584,292.425,32.003,288.009,32z M280,96h-80V48h80V96z" />
                                </g>
                            </g>
                        </svg>
                        Empresa
                    </a>
                    <div class='container-tools'>
                        <div class="dropdown container-tool-user">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-42 0 512 512.002" style="height: 2em; width: 2em;" class="dropdown-toggle" data-toggle="dropdown" data-display="static">
                                <path d="m210.351562 246.632812c33.882813 0 63.222657-12.152343 87.195313-36.128906 23.972656-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.132812 87.195312 23.976563 23.96875 53.3125 36.125 87.1875 36.125zm0 0" />
                                <path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.308594-10.339844-7.808594-20.550781-13.371094-30.335938-5.773438-10.15625-12.554688-19-20.164063-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.039063 5.339844-10.972656 0-22.085937-1.796876-33.046874-5.339844-11.210938-3.621094-20.296876-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.75-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.605469 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.058594 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.796875-1.023438 19.964844-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.441406 23.734375 65.066406 23.734375h246.53125c26.625 0 48.511719-7.984375 65.0625-23.734375 16.757813-15.945312 25.253906-37.585937 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm0 0" />
                            </svg>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <div class='container-profile'>
                                    <div class='profile-icon'>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-42 0 512 512.002" style="height: 2em; width: 2em;" class="dropdown-toggle" data-toggle="dropdown" data-display="static">
                                            <path d="m210.351562 246.632812c33.882813 0 63.222657-12.152343 87.195313-36.128906 23.972656-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.132812 87.195312 23.976563 23.96875 53.3125 36.125 87.1875 36.125zm0 0" />
                                            <path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.308594-10.339844-7.808594-20.550781-13.371094-30.335938-5.773438-10.15625-12.554688-19-20.164063-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.039063 5.339844-10.972656 0-22.085937-1.796876-33.046874-5.339844-11.210938-3.621094-20.296876-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.75-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.605469 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.058594 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.796875-1.023438 19.964844-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.441406 23.734375 65.066406 23.734375h246.53125c26.625 0 48.511719-7.984375 65.0625-23.734375 16.757813-15.945312 25.253906-37.585937 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm0 0" />
                                        </svg>
                                    </div>
                                    <div class='profile-name'>João Lucas</div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="https://github.com/JoaoLucasRB" target="_blank">Meu GitHub</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="https://www.linkedin.com/in/jo%C3%A3o-lucas-gon%C3%A7alves-da-silva-510441145/" target="_blank">Meu Linkedin</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class='row'>
            <div class='col wrapper-section'>
                <div class='container-side-menu active'>
                    <div class="container-side-menu-action-btn">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 256 256" style="enable-background:new 0 0 256 256;" xml:space="preserve" class='side-menu-action-btn'>
                            <g>
                                <g>
                                    <polygon points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128   " />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class='container-side-menu-item' name='colaboradores'>
                        <div class='side-menu-item-icon'>
                            <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                                <g>
                                    <circle cx="256" cy="119.631" r="87" />
                                    <circle cx="432" cy="151.63" r="55" />
                                    <circle cx="80" cy="151.63" r="55" />
                                    <path d="m134.19 256.021c-21.65-17.738-41.257-15.39-66.29-15.39-37.44 0-67.9 30.28-67.9 67.49v109.21c0 16.16 13.19 29.3 29.41 29.3 70.026 0 61.59 1.267 61.59-3.02 0-77.386-9.166-134.137 43.19-187.59z" />
                                    <path d="m279.81 241.03c-43.724-3.647-81.729.042-114.51 27.1-54.857 43.94-44.3 103.103-44.3 175.48 0 19.149 15.58 35.02 35.02 35.02 211.082 0 219.483 6.809 232-20.91 4.105-9.374 2.98-6.395 2.98-96.07 0-71.226-61.673-120.62-111.19-120.62z" />
                                    <path d="m444.1 240.63c-25.17 0-44.669-2.324-66.29 15.39 51.965 53.056 43.19 105.935 43.19 187.59 0 4.314-7.003 3.02 60.54 3.02 16.8 0 30.46-13.61 30.46-30.34v-108.17c0-37.21-30.46-67.49-67.9-67.49z" />
                                </g>
                            </svg>
                        </div>
                        <div class='side-menu-item-text'>
                            Colaboradores
                        </div>
                    </div>
                    <div class='container-side-menu-item-content' name='colaboradores'>
                        <ul>
                            <li><a href="Colaboradores">Gerenciar</a></li>
                        </ul>
                    </div>
                </div>
                <div class="container-section">
                    <div class='container-content'>
                        <?php $this->load->view($view); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col wrapper-footer'>
                <div class='container-attribution'>
                    <p>Atribuições</p>
                    <ul>
                        <li>
                            <div>Company Icon made by <a href="https://www.flaticon.com/authors/geotatah" title="geotatah" target="_blank">geotatah</a> from <a href="https://www.flaticon.com/" title="Flaticon" target="_blank">www.flaticon.com</a></div>
                        </li>
                        <li>
                            <div>Client, User, Filter, Add, Edit, Delete and Actions Icon made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik" target="_blank">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon" target="_blank">www.flaticon.com</a></div>
                        </li>
                        <li>
                            <div>Arrow Icon made by <a href="https://www.flaticon.com/authors/google" title="Google" target="_blank">Google</a> from <a href="https://www.flaticon.com/" title="Flaticon" target="_blank">www.flaticon.com</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class='ui-block'>
        <div class='ui-block-bg'></div>
        <div class='ui-block-spinner'>
            <div class="spinner-border reverse outer" role="status">
                <span class="sr-only">Carregando...</span>
            </div>
        </div>
        <div class='ui-block-spinner'>
            <div class="spinner-border" role="status">
                <span class="sr-only">Carregando...</span>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/0.71/jquery.csv-0.71.min.js"></script>
    <?php $this->load->view("themes/TemaPadrao/js/index.php"); ?>
    <?php $this->load->view($js); ?>
</body>

</html>