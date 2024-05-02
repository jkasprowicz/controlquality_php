<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="/static/css/configuration_page.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <div class="container-reagentes">
    <h3>PÁGINA ADMINISTRADOR</h3>
    <hr>
    <div class="subtitles">
      <h7>CONFIGURAÇÕES DE ADMINISTRADOR, CRIAR USUÁRIOS, CRIAR LOCAIS, ASSOACIAR LOCAIS, DELETAR USUÁRIOS, DELETAR ITEMS. </h7><br>
    </div>
    <hr>  
    <div class="row justify-content-center">
        <div class="col-md-4"  onclick="criarUsuarios('/create_profile')">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">CRIAR USUÁRIO</h5>
                </div>
            </div>
        </div>
        
        <div class="col-md-4"  onclick="criarUsuarios('')">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">CRIAR GRUPOS DE USUÁRIOS</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4" onclick="criarLocais('/create_place')">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">CRIAR LOCAIS</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4" onclick="criarLocais('/create_place')">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">CRIAR SETORES</h5>
              </div>
          </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body" onclick="associarUsuarios('/locais_usuarios')">
                    <h5 class="card-title">ASSOCIAR USUÁRIOS AOS LOCAIS</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
          <div class="card">
              <div class="card-body" onclick="associarUsuarios('/verify_users')">
                  <h5 class="card-title">VERIFICAR USUÁRIOS</h5>
              </div>
          </div>
      </div>

        <div class="col-md-4">
          <div class="card">
              <div class="card-body" onclick="deletarUsuarios('')">
                  <h5 class="card-title">CONTROLE DE USUÁRIOS</h5>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body" onclick="deletarItens('')">
                  <h5 class="card-title">DELETAR ITENS</h5>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body" onclick="criarEquipamentos('/equipamentos/create_equipments')">
                  <h5 class="card-title">CRIAR EQUIPAMENTOS</h5>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body" onclick="listaEquipamentos('')">
                  <h5 class="card-title">LISTA DE EQUIPAMENTOS</h5>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body" onclick="editarEquipamentos('')">
                  <h5 class="card-title">EDITAR EQUIPAMENTOS</h5>
              </div>
          </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body" onclick="criarTasks('/create_task')">
                    <h5 class="card-title">CRIAR TASKS</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body" onclick="criarTasks('')">
                  <h5 class="card-title">EDITAR TASKS</h5>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body" onclick="criarEquipamentos('')">
                  <h5 class="card-title">LISTAS DE TASKS</h5>
              </div>
          </div>
        </div>

    </div>
  </div>
  <script>
    function criarUsuarios(url) {
      window.location.href = url;
    }
    function criarLocais(url) {
      window.location.href = url;
    }
    function associarUsuarios(url) {
      window.location.href = url;
    }
    function deletarUsuarios(url) {
      window.location.href = url;
    }
    function deletarItens(url) {
      window.location.href = url;
    }
    function criarEquipamentos(url) {
      window.location.href = url;
    }
    function listaEquipamentos(url) {
      window.location.href = url;
    }
    function editarEquipamentos(url) {
      window.location.href = url;
    }
    function criarTasks(url) {
      window.location.href = url;
    }
  </script>
</body>
</html>
