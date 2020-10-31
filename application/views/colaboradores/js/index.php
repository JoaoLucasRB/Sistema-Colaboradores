<script>
    $(document).ready(() => {
        buildTable();
        buildListeners();
        loadDataIntoTable()
    });

    const buildTable = () => {
        $("#colaboradores_table").DataTable({
            columns: [{
                    data: "colaborador_id",
                    width: '3vw'
                },
                {
                    data: "nome_usuario"
                },
                {
                    data: "altura",
                    width: '6vw',
                    render: (data, type, row) => {
                        return `<div style='width: 100%; display:flex; align-items: center; justify-content: center;'>${data}</div>`;
                    }
                },
                {
                    data: "peso",
                    width: '5vw',
                    render: (data, type, row) => {
                        return `<div style='width: 100%; display:flex; align-items: center; justify-content: center;'>${data}</div>`;
                    }
                },
                {
                    data: "atleta",
                    width: '5vw',
                    render: (data, type, row) => {
                        return `<div style='width: 100%; display:flex; align-items: center; justify-content: center;'><div class='flag ${data ? 'active' : ''}'>Atleta</div></div>`;
                    }
                },
                {
                    data: "lactose",
                    width: '10vw',
                    className: 'dt-body-center',
                    render: (data, type, row) => {
                        return `<div style='width: 100%; display:flex; align-items: center; justify-content: center;'><div class='flag ${data ? 'active' : ''}'>Lactose</div></div>`;
                    }
                },
                {
                    data: "null",
                    width: '6vw',
                    render: function(data, type, row) {
                        return `<div class='container-table-item-tool'>
                            <div class='table-item-tool-delete'>
                                <svg height="512pt" viewBox="-57 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m156.371094 30.90625h85.570312v14.398438h30.902344v-16.414063c.003906-15.929687-12.949219-28.890625-28.871094-28.890625h-89.632812c-15.921875 0-28.875 12.960938-28.875 28.890625v16.414063h30.90625zm0 0"/>
                                    <path d="m344.210938 167.75h-290.109376c-7.949218 0-14.207031 6.78125-13.566406 14.707031l24.253906 299.90625c1.351563 16.742188 15.316407 29.636719 32.09375 29.636719h204.542969c16.777344 0 30.742188-12.894531 32.09375-29.640625l24.253907-299.902344c.644531-7.925781-5.613282-14.707031-13.5625-14.707031zm-219.863282 312.261719c-.324218.019531-.648437.03125-.96875.03125-8.101562 0-14.902344-6.308594-15.40625-14.503907l-15.199218-246.207031c-.523438-8.519531 5.957031-15.851562 14.472656-16.375 8.488281-.515625 15.851562 5.949219 16.375 14.472657l15.195312 246.207031c.527344 8.519531-5.953125 15.847656-14.46875 16.375zm90.433594-15.421875c0 8.53125-6.917969 15.449218-15.453125 15.449218s-15.453125-6.917968-15.453125-15.449218v-246.210938c0-8.535156 6.917969-15.453125 15.453125-15.453125 8.53125 0 15.453125 6.917969 15.453125 15.453125zm90.757812-245.300782-14.511718 246.207032c-.480469 8.210937-7.292969 14.542968-15.410156 14.542968-.304688 0-.613282-.007812-.921876-.023437-8.519531-.503906-15.019531-7.816406-14.515624-16.335937l14.507812-246.210938c.5-8.519531 7.789062-15.019531 16.332031-14.515625 8.519531.5 15.019531 7.816406 14.519531 16.335937zm0 0"/><path d="m397.648438 120.0625-10.148438-30.421875c-2.675781-8.019531-10.183594-13.429687-18.640625-13.429687h-339.410156c-8.453125 0-15.964844 5.410156-18.636719 13.429687l-10.148438 30.421875c-1.957031 5.867188.589844 11.851562 5.34375 14.835938 1.9375 1.214843 4.230469 1.945312 6.75 1.945312h372.796876c2.519531 0 4.816406-.730469 6.75-1.949219 4.753906-2.984375 7.300781-8.96875 5.34375-14.832031zm0 0"/>
                                </svg>
                            </div>
                            <div class='table-item-tool-edit'>
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="528.899px" height="528.899px" viewBox="0 0 528.899 528.899" style="enable-background:new 0 0 528.899 528.899;" xml:space="preserve">
                                    <g>
                                        <path d="M328.883,89.125l107.59,107.589l-272.34,272.34L56.604,361.465L328.883,89.125z M518.113,63.177l-47.981-47.981   c-18.543-18.543-48.653-18.543-67.259,0l-45.961,45.961l107.59,107.59l53.611-53.611   C532.495,100.753,532.495,77.559,518.113,63.177z M0.3,512.69c-1.958,8.812,5.998,16.708,14.811,14.565l119.891-29.069   L27.473,390.597L0.3,512.69z"/>
                                    </g>
                                </svg>
                            </div>
                        </div>`;
                    }
                }
            ],
            "order": [
                [1, "asc"]
            ],
            dom: '<"top"<"filter">f<"add">>rt<"bottom"lip>',
            pagingType: "simple",
            language: {
                searchPlaceholder: "Buscar...",
                search: "",
                info: "_START_-_END_ de _TOTAL_",
                sLengthMenu: "Itens por página: _MENU_",
                paginate: {
                    previous: "Anterior",
                    next: "Próxima"
                },
                emptyTable: "Não foi encontrado nenhum registro."
            }
        });
        buildTableCustomHTML();
    }

    const buildTableCustomHTML = () => {
        $(".dataTables_wrapper .filter").html(`
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="971.986px" height="971.986px" viewBox="0 0 971.986 971.986" style="enable-background:new 0 0 971.986 971.986;" xml:space="preserve" class="dropdown-toggle" data-toggle="dropdown" data-display="static">
                <g>
                    <path d="M370.216,459.3c10.2,11.1,15.8,25.6,15.8,40.6v442c0,26.601,32.1,40.101,51.1,21.4l123.3-141.3   c16.5-19.8,25.6-29.601,25.6-49.2V500c0-15,5.7-29.5,15.8-40.601L955.615,75.5c26.5-28.8,6.101-75.5-33.1-75.5h-873   c-39.2,0-59.7,46.6-33.1,75.5L370.216,459.3z"/>
                </g>
            </svg>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class='form-group container-filter'>
                    <select class="form-control" id="filter-peso" name='filter-field'>
                        <option value="0">Peso..</option>
                        <option value="1">Abaixo do Peso Ideal</option>
                        <option value="2">Peso Ideal</option>
                        <option value="3">Acima do Peso Ideal</option>
                    </select>
                </div>
                <div class='form-group container-filter'>
                    <select class="form-control" id="filter-altura" name='filter-field'>
                        <option value="0">Altura..</option>
                        <option value="1">Baixo</option>
                        <option value="2">Médio</option>
                        <option value="3">Alto</option>
                    </select>
                </div>
                <div class='form-group container-filter'>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filter-atleta" name="filter-field">
                        <label class="custom-control-label" for="filter-atleta">
                            Atleta
                        </label>
                    </div>
                </div>
                <div class='form-group container-filter'>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filter-lactose" name="filter-field">
                        <label class="custom-control-label" for="filter-lactose">
                            Lactose
                        </label>
                    </div>
                </div>
            </div>
        `);

        $(".dataTables_wrapper .add").html(`
            <div class='container-add-button'>
                <div class='add-button' data-toggle="modal" data-target="#modalAdd">
                    <svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-181.019531 397.019531c-119.101562 0-216-96.898438-216-216s96.898438-216 216-216 216 96.898438 216 216-96.898438 216-216 216zm20-236.019531h90v40h-90v90h-40v-90h-90v-40h90v-90h40zm0 0"/></svg>
                    Adicionar Colaborador
                </div>
            </div>
        `);
    }

    const buildListeners = () => {
        $('.container-content').on('click', 'select, label', e => {
            e.stopPropagation();
        });
        $('.container-content').on('change', "[name='filter-field']", loadDataIntoTable);
        $(".add-button").click(() => $('#form-add').trigger("reset"));
        $('.container-content').on('click', '.table-item-tool-delete > svg', deleteColaborador);
        $('.container-content').on('click', '.table-item-tool-edit > svg', editColaborador);
        $("#form-add").submit((e) => {
            e.preventDefault();
            saveColaborador()
        });
    }

    const loadDataIntoTable = () => {
        $.ajax({
            url: "Colaboradores/getColaboradores",
            method: "POST",
            data: getFilterData(),
            success: (successResult) => {
                $dataTableReference = $("#colaboradores_table").DataTable();
                $dataTableReference.clear().draw();
                $dataTableReference.rows.add(successResult.data);
                $dataTableReference.columns.adjust().draw();
            },
            error: () => {}
        });
    }

    const getFilterData = () => {
        const data = {
            fields: new Array(),
            values: new Array(),
            operators: new Array()
        };
        if ($("#filter-peso").val()) {
            const peso = $("#filter-peso").val();
            if (peso === "1") {
                data.fields.push('peso');
                data.values.push(70);
                data.operators.push('<');
            } else if (peso === "2") {
                data.fields.push('peso');
                data.values.push(70);
                data.operators.push('>=');
                data.fields.push('peso');
                data.values.push(90);
                data.operators.push('<=');
            } else if (peso === "3") {
                data.fields.push('peso');
                data.values.push(90);
                data.operators.push('>');
            }
        }
        if ($("#filter-altura").val()) {
            const altura = $("#filter-altura").val();
            if (altura === "1") {
                data.fields.push('altura');
                data.values.push(1.6);
                data.operators.push('<');
            } else if (altura === "2") {
                data.fields.push('altura');
                data.values.push(1.6);
                data.operators.push('>=');
                data.fields.push('altura');
                data.values.push(1.8);
                data.operators.push('<=');
            } else if (altura === "3") {
                data.fields.push('altura');
                data.values.push(1.8);
                data.operators.push('>');
            }
        }
        if ($("#filter-atleta").is(":checked")) {
            data.fields.push('atleta');
            data.values.push(1);
            data.operators.push('=');
        }
        if ($("#filter-lactose").is(":checked")) {
            data.fields.push('lactose');
            data.values.push(1);
            data.operators.push('=');
        }
        return data;
    }

    const saveColaborador = () => {
        const data = new Object();
        $.each($("#form-add").serializeArray(), function(key, value) {
            data[value['name']] = isNaN(value['value']) ? value['value'] : Number(value['value']);
        });
        if (!data.colaborador_id)
            delete data.colaborador_id;
        data.atleta = data.atleta ? 1 : 0;
        data.lactose = data.lactose ? 1 : 0;
        $.ajax({
            url: "Colaboradores/save",
            data,
            method: "POST",
            success: (successResult) => {
                if (successResult.data) {
                    swal.fire({
                        icon: 'success',
                        title: 'Sucesso!',
                        text: 'O registro foi adicionado.',
                    }).then(() => {
                        loadDataIntoTable();
                        $("#modalAdd").modal('hide');
                        $('#form-add').trigger("reset");
                    });
                } else {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops..',
                        text: 'Alguma coisa deu errado ao tentar adicionar o registro. Tente novamente.',
                    });
                }
            },
            error: () => {
                swal.fire({
                    icon: 'error',
                    title: 'Oops..',
                    text: 'Não foi possivel concluir a requisição. Tente novamente.',
                });
            }
        });
    }

    function deleteColaborador() {
        const rowId = $(this).closest('tr').find('td').eq(0).html();
        $.ajax({
            url: "Colaboradores/remove/" + rowId,
            method: "POST",
            success: (successResult) => {
                if (successResult.data) {
                    swal.fire({
                        icon: 'success',
                        title: 'Sucesso!',
                        text: 'O registro foi excluído.',
                    }).then(() => loadDataIntoTable());
                } else {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops..',
                        text: 'Alguma coisa deu errado ao tentar remover o registro. Tente novamente.',
                    });
                }
            },
            error: () => {
                swal.fire({
                    icon: 'error',
                    title: 'Oops..',
                    text: 'Não foi possivel concluir a requisição. Tente novamente.',
                });
            }
        });
    }

    function editColaborador() {
        const rowId = $(this).closest('tr').find('td').eq(0).html();
        $.ajax({
            url: "Colaboradores/getColaboradores",
            dataType: 'json',
            data: {
                fields: ['colaborador_id'],
                values: [rowId],
                operators: ['=']
            },
            method: "POST",
            success: (successResult) => {
                if (successResult.data[0]) {
                    const objectColaborador = successResult.data[0];
                    console.log(objectColaborador);
                    for (let field in objectColaborador) {
                        if (['atleta', 'lactose'].includes(field))
                            $(`[name='${field}']`).attr("checked", Boolean(objectColaborador[field]));
                        else
                            $(`[name='${field}']`).val(objectColaborador[field]);
                    }
                    $("#modalAdd").modal('show');
                } else {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops..',
                        text: 'Alguma coisa deu errado ao tentar buscar as informações do registro. Tente novamente.',
                    });
                }
            },
            error: () => {
                swal.fire({
                    icon: 'error',
                    title: 'Oops..',
                    text: 'Não foi possivel concluir a requisição. Tente novamente.',
                });
            }
        });
    }
</script>