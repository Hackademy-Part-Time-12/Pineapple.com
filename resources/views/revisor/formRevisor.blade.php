<x-layout>

<form action="{{route('become.revisor')}}" method="POST" class="shadow p-5">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nome e Cognome</label>
      <input type="text" name="name" class="form-control" id="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
    <label for="user_message" class="form-label">Perchè desideri lavorare con noi?</label>
    <textarea name="user_message" id="user_message" class="form-control" cols="30" rows="7"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Invia la tua candidatura</button>
</form>

</x-layout>