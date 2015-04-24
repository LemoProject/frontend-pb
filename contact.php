<?php include('templates/header.html'); ?>

<div class="container contact">
  <div class="row">
    <div class="col-sm-12">
      <h2>Contact</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa
        dolor eos error explicabo, illum minima necessitatibus nulla omnis
        quia quisquam repellat suscipit vel. Beatae eligendi est fugit nulla
        quibusdam similique!</p>

      <p>Aliquid atque commodi, consectetur, dolor error et excepturi
        exercitationem fuga id iure iusto libero quod rem repellat sit
        veritatis voluptatem? A accusamus blanditiis dolor, est impedit
        libero quaerat quod soluta.</p>

      <div class="well form">
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="email" class="form-control" id="name">
          </div>

          <div class="form-group">
            <label for="surname">Surname</label>
            <input type="email" class="form-control" id="surname">
          </div>

          <div class="form-group">
            <label for="email">Your Email address</label>
            <input type="email" class="form-control" id="email">
          </div>

          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" rows="8"></textarea>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include('templates/footer.html'); ?>
