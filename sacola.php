<style>
  .btn-amarelo {
    background-color: #ffc700;
    color: #000;
  }
</style>



<!-- Modal sacola -->
<div class=" modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---->
        <span aria-hidden="true" data-dismiss="modal"><i class="fas fa-close"></i></span>

        <span class="text-center ">SACOLA</span>
        <i class="text-danger fa fa-trash"></i>

      </div>
      <div class="modal-body">
        <div class="bg-light comments-box p-3 mt-3">
          <div class="d-flex justify-content-between align-items-center"></div>
          <div class="d-flex justify-content-between align-items-center">
            <h6 class="text-muted">canja de galinha</h6>
            <div class="text-center">2x</div>
            <div class="text-center">R$15,00</div>
            <span>
              <div class="btn-group">
                <a class="btn" data-toggle="dropdown" href="#">
                  <img src="https://image.flaticon.com/icons/png/512/64/64576.png" width="15px" alt="">
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <a class="dropdown-item" href="#">Editar item</a>
                  <a class="dropdown-item" href="#">Remover item</a>
                </ul>
              </div>
            </span>
          </div>
        </div>
        <div class="bg-light comments-box p-3 mt-3">
          <div class="d-flex justify-content-between align-items-center"></div>
          <div class="d-flex justify-content-between align-items-center">
            <h6 class="text-muted">canja de galinha</h6>
            <div class="text-center">2x</div>
            <div class="text-center">R$15,00</div>
            <span class="">
              <div class="btn-group">
                <a class="btn" data-toggle="dropdown" href="#">
                  <img src="https://image.flaticon.com/icons/png/512/64/64576.png" width="15px" alt="">
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <a class="dropdown-item" href="#">Editar item</a>
                  <a class="dropdown-item" href="#">Remover item</a>
                </ul>
              </div>
            </span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <b>
          <p>Total: R$30,00</p>
        </b> <br>
        <button type="button" class=" btn  col-md-12 btn-amarelo">Fazer pedido</button>
      </div>
    </div>
  </div>
</div>
<!--Sacola-->

<a class="bolsa-modal" data-toggle="modal" data-target="#exampleModalCenter" style="
    position:fixed;
    width:60px;
    height:60px;
    bottom:60px;
    right:15px;
    background-color:#ffc700;
    color:#FFF;
    border-radius:50px;
    text-align:center;
    font-size:30px;
    box-shadow: 1px 1px 2px #888;
    z-index:1000;">
  <div style="font-size: 15px; background-color: #fff; width: 33%; height: 33%; border-radius: 50%; position: absolute; right: 9px; margin-top: 18px;">

    2

  </div>
  <img style="margin-top:16px" width="50%" height="50%" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSItMzUgMCA1MTIgNTEyLjAwMTAyIiB3aWR0aD0iNTEycHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQ0My4wNTQ2ODggNDk1LjE3MTg3NS0zOC45MTQwNjMtMzcwLjU3NDIxOWMtLjgxNjQwNi03Ljc1NzgxMi03LjM1NTQ2OS0xMy42NDg0MzctMTUuMTU2MjUtMTMuNjQ4NDM3aC03My4xNDA2MjV2LTE2LjY3NTc4MWMwLTUxLjk4MDQ2OS00Mi4yOTI5NjktOTQuMjczNDM4LTk0LjI3MzQzOC05NC4yNzM0MzgtNTEuOTg0Mzc0IDAtOTQuMjc3MzQzIDQyLjI5Mjk2OS05NC4yNzczNDMgOTQuMjczNDM4djE2LjY3NTc4MWgtNzMuMTQwNjI1Yy03LjgwMDc4MiAwLTE0LjMzOTg0NCA1Ljg5MDYyNS0xNS4xNTYyNSAxMy42NDg0MzdsLTM4LjkxNDA2MjggMzcwLjU3NDIxOWMtLjQ0OTIxOTIgNC4yOTI5NjkuOTQ1MzEyOCA4LjU3ODEyNSAzLjgzMjAzMDggMTEuNzg5MDYzIDIuODkwNjI2IDMuMjA3MDMxIDcuMDA3ODEzIDUuMDM5MDYyIDExLjMyNDIxOSA1LjAzOTA2Mmg0MTIuNjU2MjVjNC4zMjAzMTMgMCA4LjQzNzUtMS44MzIwMzEgMTEuMzI0MjE5LTUuMDM5MDYyIDIuODk0NTMxLTMuMjEwOTM4IDQuMjg1MTU2LTcuNDk2MDk0IDMuODM1OTM4LTExLjc4OTA2M3ptLTI4NS4yODUxNTctNDAwLjg5ODQzN2MwLTM1LjE3NTc4MiAyOC42MjEwOTQtNjMuNzk2ODc2IDYzLjgwMDc4MS02My43OTY4NzYgMzUuMTc1NzgyIDAgNjMuNzk2ODc2IDI4LjYyMTA5NCA2My43OTY4NzYgNjMuNzk2ODc2djE2LjY3NTc4MWgtMTI3LjU5NzY1N3ptLTEyNS42MDkzNzUgMzg3LjI1IDM1LjcxNDg0NC0zNDAuMDk3NjU3aDU5LjQxNzk2OXYzMy41ODIwMzFjMCA4LjQxNDA2MyA2LjgyNDIxOSAxNS4yMzgyODIgMTUuMjM4MjgxIDE1LjIzODI4MnMxNS4yMzgyODEtNi44MjQyMTkgMTUuMjM4MjgxLTE1LjIzODI4MnYtMzMuNTgyMDMxaDEyNy41OTc2NTd2MzMuNTgyMDMxYzAgOC40MTQwNjMgNi44MjQyMTggMTUuMjM4MjgyIDE1LjIzODI4MSAxNS4yMzgyODIgOC40MTQwNjIgMCAxNS4yMzgyODEtNi44MjQyMTkgMTUuMjM4MjgxLTE1LjIzODI4MnYtMzMuNTgyMDMxaDU5LjQxNzk2OWwzNS43MTQ4NDMgMzQwLjA5NzY1N3ptMCAwIi8+PC9zdmc+" />
</a>