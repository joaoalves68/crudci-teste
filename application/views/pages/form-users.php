    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $title ?></h1>
      </div>

			<div class="col-md-12">
				<form action="<?= base_url('users/update/' . $user['id']) ?>" method="post">
				
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= $user['name'] ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Email</label>
							<textarea name="email" id="email" rows="5" class="form-control"><?= $user['email'] ?></textarea>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="country">Country</label>
							<input type="text" class="form-control" name="country" id="country" placeholder="Country" value="<?= $user['country'] ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?= $user['password'] ?>">
						</div>
					</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url('users') ?>" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
