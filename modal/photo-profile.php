<!-- Modal Structure -->
 <div id="photo-complete" class="modal">
    <div class="modal-content">
      <h4 class="flow-text pink-text center">Coloca una foto de perfil</h4>
      
        <form action="./backend/photo-profile.php" method="POST" enctype="multipart/form-data">
            <div class="file-field input-field">
            <div class="btn btn-color">
                <span><i class="material-icons">photo_camera</i></span>
                <input type="file" name="photo" required>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Selecciona una foto de perfil">
            </div>
            </div>

              <button class="btn waves-effect right btn-color" type="submit" name="submit">enviar
                <i class="material-icons left">send</i>
              </button><br><br><br>
        </form>

    </div>
</div>