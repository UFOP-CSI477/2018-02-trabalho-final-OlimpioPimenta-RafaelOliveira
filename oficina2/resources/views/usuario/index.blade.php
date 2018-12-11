<h3>Usuário</h3>
<img src="img/usuario.png" width="100px" height="100px">

     <div class="container-table100">
         <div class="wrap-table100">
            <div class="table100 ver1 m-b-110">
              <caption align="left">Usuários</caption>
               <table>
                  <thead>
                     <tr>
                        <th scope="col">ID</th>
                        <th scope="col">USUÁRIO</th>
                        <th scope="col">CHAPA</th>
                        <th scope="col">SENHA</th>
                        <th scope="col">CONFIRMA</th>
                        <th scope="col">ATIVO</th>
                        <th scope="col">ADMINISTRADOR</th>
                     </tr>
                  </thead>
                  <tbody>

                  @foreach($usuarios as $w)
                     <tr>
                        <td data-label="Id">{{ $w->id }}</td>
                        <td data-label="Usuário">{{ $w->usuario }}</td>
                        <td data-label="Chapa">{{ $w->chapa }}</td>
                        <td data-label="Senha">{{ $w->senha }}</td>
                        <td data-label="Confirma">{{ $w->confirma }}</td>
                        <td data-label="Ativo">{{ $w->ativo }}</td>
                        <td data-label="Administrador">{{ $w->administrador}}</td>
                     </tr>
                   @endforeach
                 </tbody>
               </table>
            </div>
          </div>
        </div>
