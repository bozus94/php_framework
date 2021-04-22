<form action="/contact" method="post">
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="God Service" name="text">
        <label for="floatingInput">Asunto</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px" name="content"></textarea>
        <label for="floatingTextarea">Contenido</label>
    </div>
    <button type="submit" class="btn btn-outline-secondary">Enviar</button>
</form>