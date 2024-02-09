<main class="col col-sm-8 d-flex mt-3 flex-wrap">
    <section class="flex-grow-1 ">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Tamaño</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
                <tr class="table-row">
                  <td>Imagen.png</td>
                  <td>500kb</td>
                  <td>X</td>
                </tr>
                <tr class="table-row">
                  <td>Imagen2.png</td>
                  <td>500Kb</td>
                  <td>X</td>
                </tr>
                <tr class="table-row">
                  <td>Imagen3.png</td>
                  <td>500Kb</td>
                  <td>X</td>
                </tr>
              </tbody>
            </table>
    </section>
</main>

<aside class="d-flex flex-column justify-content-around col-1  m-2">
        <button class="btn btn-primary">Añadir Imagen</button>
        <button class="btn btn-primary" id="verImg">Ver Imagen</button>
</aside>

<?= getModal("modal_admin", $data); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>/Assets/js/functions_admin.js"></script>