<!-- Modal Structure -->
<div id="option" class="modal">
    <div class="modal-content">
      <h4 class="flow-text pink-text center">Cambiar foto de perfil y portada</h4>
      <p class="center">Controla lo que los demas ven sobre t&iacute;</p>

      <!-- Foto de perfil -->
      <form action="./backend/setting-photo" method="POST" enctype="multipart/form-data">
        <div class="file-field input-field">
          <div class="btn">
            <span>Perfil</span>
            <input name="photo" type="file" required />
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Cambiar foto de perfil">
          </div>

          <button class="btn waves-effect btn-color right" type="submit" name="submit">Cambiar perfil
          </button>


        </div>
      </form>

      <!-- Foto de portada -->
      <form action="./backend/setting-cover" method="POST" enctype="multipart/form-data">
        <div class="file-field input-field">
          <div class="btn">
            <span>Portada</span>
            <input type="file" name="photo" required />
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Cambiar foto de portada">
          </div>

          <button class="btn waves-effect btn-color right" type="submit" name="submit">Cambiar portada
          </button>


        </div><br><br>
      </form>

    </div>
</div>