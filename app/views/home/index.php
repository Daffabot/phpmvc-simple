<div class="p-5 m-4 bg-body-tertiary rounded-3" x-data="{ open: false }">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Welcome to Home</h1>
        <p class="col-md-8 fs-4">Hello my name is <?= $data['name'] ?>.</p>
        <button class="btn btn-lg" type="button" @click="open = !open" x-text="open ? 'Close' : 'Get Started'" x-bind:class="open ? 'btn-danger' : 'btn-primary'" @click.outside="open = false" @keyup.esc.window="open = false">Get Started</button>
            <div x-show="open" class="m-2 bg-info p-3 container rounded-xl" x-transition.origin.top.left.duration.1500ms>
                <p class="col fs-4 text-white text-center">"<?= $data['quotes'] ?>"</p>
            </div>
      </div>
</div>

<div class="p-5 m-4 rounded-3 bg-body-tertiary" x-data="{ pesan: '', hobi: [] }">
    <form action="<?= BASEURL; ?>/about/" @submit.once.prevent="alert('data terkirim')" class="form flex justify-content-center align-items-center px-5">
        <h3 class="text-center">Pesan</h3>
    <textarea x-model="pesan" @keyup.debounce.500ms="console.log($event.target.value)" class="form-control"></textarea>
    <p class="text-center"><span x-text="pesan.length" x-bind:class="pesan.length < 20 ? 'text-success' : 'text-danger'"></span></p>
    <div class="m-4 flex column">
        <input type="checkbox" name="game" id="game" x-model="hobi" value="game" class="form-check-input">
        <label for="game" name="game" class="form-check-label">game</label>
        <br>
        <input type="checkbox" name="ngoding" id="ngoding" x-model="hobi" value="ngoding" class="form-check-input">
        <label for="ngoding" name="ngoding" class="form-check-label">ngoding</label>
        <br>
        <input type="checkbox" name="film" id="film" x-model="hobi" value="film" class="form-check-input">
        <label for="film" name="film" class="form-check-label">film</label>
    </div>
    <p>Hobi: <span x-text="hobi.map(h => ' ' + h.charAt(0).toUpperCase() + h.slice(1))"></span></p>
    <button type="submit" class="btn btn-lg bg-info text-white my-0 mx-auto">Kirim</button>
    </form>
</div>