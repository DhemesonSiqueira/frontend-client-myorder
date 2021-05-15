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
  <img style="margin-top:16px" width="50%" height="50%" src="./img/bag-icon.svg" />
</a>