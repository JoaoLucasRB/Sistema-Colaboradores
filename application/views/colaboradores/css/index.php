<style>
    .dataTables_wrapper .top {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding: 1em;
    }

    .dataTables_wrapper .filter {
        position: relative;
    }

    .dataTables_wrapper .filter svg {
        height: 3vh;
        width: 5vw;
        padding: 0 2em;
        fill: var(--primary-color);
    }

    .dataTables_wrapper .filter svg:hover {
        fill: var(--primary-hover);
        cursor: pointer;
    }

    .dataTables_wrapper .dataTables_filter label {
        margin: 0;
    }

    .dataTables_wrapper .dataTables_filter input {
        background-color: #fff;
        color: #7d7d7d;
    }

    .dataTable th,
    .dataTable td {
        padding: 0.5em 1em !important;
    }

    .dataTable th {
        color: #7d7d7d;
        font-weight: 500;
        border: none !important;
    }

    .dataTable tr td {
        max-height: 5vh;
    }

    .dataTable {
        border: none !important;
        height: 70vh;
        width: 100% !important;
    }

    .dataTable .odd {
        background-color: #fff !important;
    }

    .dataTable .even {
        background-color: var(--secondary-color);
    }

    .dataTables_wrapper .bottom {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .dataTables_wrapper .bottom .dataTables_length {
        padding: 1em 2em;
    }

    .dataTables_wrapper .bottom .dataTables_length {
        margin: 0;
    }

    .dataTables_wrapper .bottom .dataTables_length select {
        background: none;
        border: none;
    }

    .dataTables_wrapper .bottom .dataTables_length select .select-item {
        background-color: #000;
    }

    .dataTables_wrapper .bottom .dataTables_length select:hover {
        cursor: pointer;
    }

    .dataTables_wrapper .bottom .dataTables_info {
        padding: 1em 2em;
    }

    .dataTables_wrapper .bottom .dataTables_paginate {
        padding: 1em 2em;
    }

    .dataTables_wrapper .bottom .dataTables_paginate a:hover {
        font-weight: 600;
        cursor: pointer;
        background: none;
        color: #7d7d7d !important;
        border: none;
    }

    .dataTable tr td .flag {
        border: 2px solid var(--primary-color);
        width: fit-content;
        padding: 0.5em 1em;
        font-weight: 600;
        border-radius: 40px;
        color: var(--primary-color);
        cursor: default;
    }

    .dataTable tr td .flag.active {
        background-color: var(--primary-color);
        color: var(--secondary-color);
    }

    .container-filter {
        padding: 1em;
        width: 15vw;
    }

    .container-table-item-tool {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .table-item-tool-delete {
        padding: 1em;
    }

    .table-item-tool-delete>svg {
        height: 3vh;
        fill: var(--primary-color);
        width: 2vw;
    }

    .table-item-tool-delete>svg:hover {
        fill: var(--primary-hover);
        cursor: pointer;
    }

    .table-item-tool-edit {
        padding: 1em;
    }

    .table-item-tool-edit>svg {
        height: 3vh;
        fill: var(--primary-color);
        width: 2vw;
    }

    .table-item-tool-edit>svg:hover {
        fill: var(--primary-hover);
        cursor: pointer;
    }

    .dataTables_wrapper .add {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .dataTables_wrapper .add .container-add-button .add-button {
        color: var(--secondary-color);
        background-color: var(--primary-color);
        padding: 0.5em 1em;
        border-radius: 6px;
        font-weight: 500;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease-in-out;
    }

    .dataTables_wrapper .add .container-add-button .add-button:hover {
        cursor: pointer;
        background-color: var(--primary-hover);
    }

    .dataTables_wrapper .add .container-add-button .add-button svg {
        width: auto;
        fill: var(--secondary-color);
        height: 2.5vh;
        padding-right: 1em;
    }

    .modal-btn-save {
        background-color: var(--primary-color);
        color: var(--secondary-color);
        padding: 0.5em 1em;
        border-radius: 6px;
        border: 2px solid var(--primary-color);
        font-weight: 500;
        transition: background-color 0.3s ease-in-out;
    }

    .modal-btn-save:hover {
        background-color: var(--primary-hover);
        cursor: pointer;
    }

    .modal-btn-close {
        color: var(--primary-color);
        padding: 0.5em 1em;
        border-radius: 6px;
        border: 2px solid var(--primary-color);
        font-weight: 600;
        transition: background-color 0.3s ease-in-out;
    }

    .modal-btn-close:hover {
        background-color: var(--secondary-hover);
        cursor: pointer;
    }

    .custom-control-input:focus~.custom-control-label::before {
        border-color: var(--primary-color) !important;
    }

    .custom-control-input:checked~.custom-control-label::before {
        border-color: var(--primary-color) !important;
        background-color: var(--primary-color) !important;
    }

    .custom-control-input:focus:not(:checked)~.custom-control-label::before {
        border-color: #8472e8 !important;
    }

    .custom-control-input:not(:disabled):active~.custom-control-label::before {
        background-color: #b8acfa !important;
        border-color: #b8acfa !important;
    }

    .form-control:focus {
        border-color: #8472e8 !important;
    }

    .container-actions-icon {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container-actions-icon .actions-icon {
        height: 4vh;
        width: 4vh;
        fill: #7d7d7d;
    }

    .form-separator {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-separator .separator {
        width: 100%;
        border: 1px solid #eee;
        height: 0;
    }

    .form-separator .separator.half {
        width: 50%;
    }

    .form-separator .separator-text {
        width: min-content;
        padding: 1em;
    }

    .container-import {
        height: 0;
        overflow: hidden;
        transition: height 0.3s ease-in-out;
    }

    .container-import.active {
        height: 31vh;
    }

    .container-btn-import {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-top: 1em;
    }

    .modal-btn-import {
        background-color: var(--primary-color);
        color: var(--secondary-color);
        padding: 0.5em 1em;
        border-radius: 6px;
        border: 2px solid var(--primary-color);
        font-weight: 500;
        width: fit-content;
        transition: background-color 0.3s ease-in-out;
    }

    .modal-btn-import:hover {
        background-color: var(--primary-hover);
        cursor: pointer;
    }

    @media (max-height: 720px) {
        .dataTables_wrapper .filter svg {
            padding: 0;
        }

        .container-import.active {
            height: 46vh;
        }
    }
</style>