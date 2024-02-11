<section class="w-25 m-auto mt-5">
  <!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="tab-login"
      data-mdb-pill-init
      href="#pills-login"
      role="tab"
      aria-controls="pills-login"
      aria-selected="true"
      >Connexion</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="tab-register"
      data-mdb-pill-init
      href="#pills-register"
      role="tab"
      aria-controls="pills-register"
      aria-selected="false"
      >Inscription</a
    >
  </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content">
  <div
    class="tab-pane fade show active"
    id="pills-login"
    role="tabpanel"
    aria-labelledby="tab-login"
  >
    <form method="POST">
      <div class="text-center mb-3">
        <p>Sign in with:</p>
        <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>

        <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>

        <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>

        <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-github"></i>
        </button>
      </div>

      <p class="text-center">or:</p>

      <!-- Email input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" name="email" id="loginName" class="form-control" />
        <label class="form-label" for="loginName">Email</label> 
      </div>

      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="password"  name="mdp" id="loginPassword" class="form-control" />
        <label class="form-label" for="loginPassword">Mot de passe</label>
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check mb-3 mb-md-0">
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="loginCheck"
              checked
            />
            <label class="form-check-label" for="loginCheck"> Se souvenir de moi </label>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center">
          <!-- Simple link -->
          <a href="#!">Mot de passe oublié?</a>
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit"  name="connexion" class="btn btn-primary btn-block mb-4">CONNEXION</button>

      <!-- Register buttons -->
      
    </form>
  </div>
  <div
    class="tab-pane fade"
    id="pills-register"
    role="tabpanel"
    aria-labelledby="tab-register"
  >    
    <form method="POST"> 
      <div class="text-center mb-3">
        <p>Sign up with:</p>
        <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>

        <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>

        <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>

        <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-github"></i>
        </button>
      </div>

      <p class="text-center">or:</p>

      <!-- Name input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" name="nom" id="registerName" class="form-control" />
        <label class="form-label" for="registerName">Nom</label>
      </div>

      <!-- Username input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" name="prenom" id="registerUsername" class="form-control" />
        <label class="form-label" for="registerUsername">Prenom</label>
      </div>

      <!-- Email input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" name="email" id="registerEmail" class="form-control" />
        <label class="form-label" for="registerEmail">Email</label>
      </div>

      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" name="mdp" id="registerPassword" class="form-control" />
        <label class="form-label" for="registerPassword">Mot de passe</label>
      </div>

      <!-- Repeat Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" name="cmdp" id="registerRepeatPassword" class="form-control" />
        <label class="form-label" for="registerRepeatPassword">Confirmation mot de passe</label>
      </div>

      <!-- Checkbox -->
      <div class="form-check d-flex justify-content-center mb-4">
        <input
          class="form-check-input me-2"
          type="checkbox"
          value=""
          id="registerCheck"
          checked
          aria-describedby="registerCheckHelpText"
        />
        <label class="form-check-label" for="registerCheck">
          I have read and agree to the terms
        </label>
      </div>

      <!-- Submit button -->
       <button data-mdb-ripple-init name="inscription" type="submit" class="btn btn-primary btn-block mb-3">Inscription</button></button>
    </form>
  </div>
</div>
<!-- Pills content -->
</section>