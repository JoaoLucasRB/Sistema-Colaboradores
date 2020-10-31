<div>

    <table id="colaboradores_table" class="stripe">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Altura (m)</th>
                <th>Peso (kg)</th>
                <th>É Atleta?</th>
                <th>Intolerante à lactose?</th>
                <th>
                    <div class="container-actions-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 210 210" style="enable-background:new 0 0 210 210;" xml:space="preserve" class='actions-icon'>
                            <g id="XMLID_27_">
                                <path id="XMLID_28_" d="M25,80C11.215,80,0,91.215,0,105s11.215,25,25,25c13.785,0,25-11.215,25-25S38.785,80,25,80z" />
                                <path id="XMLID_30_" d="M105,80c-13.785,0-25,11.215-25,25s11.215,25,25,25c13.785,0,25-11.215,25-25S118.785,80,105,80z" />
                                <path id="XMLID_71_" d="M185,80c-13.785,0-25,11.215-25,25s11.215,25,25,25c13.785,0,25-11.215,25-25S198.785,80,185,80z" />
                            </g>
                        </svg>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

</div>

<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form id='form-add'>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAddLabel">Adicionar um novo colaborador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type='hidden' id='colaborador_id' name='colaborador_id' />
                    <div class='row'>
                        <div class='col'>
                            <div class="form-group">
                                <label for="nome_usuario">Nome do colaborador</label>
                                <input type="text" class="form-control" id="nome_usuario" name='nome_usuario' aria-describedby="nomeHelp" placeholder="Ex: João Lucas Gonçalves da Silva" required autocomplete="off">
                                <small id="nomeHelp" class="form-text text-muted">Nome completo do colaborador.</small>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col'>
                            <div class="form-group">
                                <label for="altura">Altura</label>
                                <input type="number" class="form-control" id="altura" name='altura' aria-describedby="alturaHelp" placeholder="Ex: 1.70" step=".01" required autocomplete="off">
                                <small id="alturaHelp" class="form-text text-muted">Altura do colaborador em metros.</small>
                            </div>
                        </div>
                        <div class='col'>
                            <div class="form-group">
                                <label for="peso">Peso</label>
                                <input type="number" class="form-control" id="peso" name='peso' aria-describedby="pesoHelp" placeholder="Ex: 60" step=".01" required autocomplete="off">
                                <small id="pesoHelp" class="form-text text-muted">Peso do colaborador em KG.</small>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col'>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="atleta" name="atleta">
                                <label class="custom-control-label" for="atleta">
                                    É Atleta?
                                </label>
                            </div>
                        </div>
                        <div class='col'>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="lactose" name="lactose">
                                <label class="custom-control-label" for="lactose">
                                    Intolerante à lactose?
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class='modal-btn-close' data-dismiss="modal">Fechar</button>
                    <button class='modal-btn-save' type='submit'>Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>