  <!-- Modal -->
  <div class="modal fade" id="addPatientCardModal{{ $patient->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Assign Card to Patient</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="{{ url('add-patient-card') }}" method="POST">
                      @csrf
                    <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                      <div class="row mb-2">
                          <div class="col">
                              <label>Select Available cards</label>
                          </div>
                      </div>
                      <div class="row mb-2">
                        <div class="col">
                            <select name="card_id" class="form-control">
                                <option disabled selected>Choose cards...</option>
                                @foreach ($cards as $card)
                                <option value="{{ $card->id }}">{{ $card->card_number }}</option>
                                @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">submit</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
